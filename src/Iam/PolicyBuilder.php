<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Iam;

use InvalidArgumentException;

/**
 * Helper class for creating valid IAM policies
 */
class PolicyBuilder
{
    const MEMBER_REGEX = '/^((user\:|serviceAccount\:|group\:|domain\:).)|allUsers|allAuthenticatedUsers/';

    /**
     * @var array
     */
    private $bindings;

    /**
     * @var string
     */
    private $etag;

    /**
     * @var int
     */
    private $version;

    /**
     * Create a PolicyBuilder.
     *
     * * Example:
     * ```
     * use Google\Cloud\Iam\PolicyBuilder;
     *
     * $builder = new PolicyBuilder();
     * $builder->addBinding('roles/admin', [ 'user:admin@domain.com' ]);
     * $result = $builder->result();
     * ```
     *
     * @param  array $policy A policy array
     * @throws InvalidArgumentException
     */
    public function __construct(array $policy = [])
    {
        if (isset($policy['bindings'])) {
            $this->setBindings($policy['bindings']);
        } elseif (!empty($policy)) {
            throw new InvalidArgumentException('Invalid Policy');
        }

        if (isset($policy['etag'])) {
            $this->setEtag($policy['etag']);
        }

        if (isset($policy['version'])) {
            $this->setVersion($policy['version']);
        }
    }

    /**
     * Override all stored bindings on the policy.
     *
     * Example:
     * ```
     * $builder->setBindings([
     *     [
     *         'role' => roles/admin',
     *         'members' => [
     *             'user:admin@domain.com'
     *         ]
     *     ]
     * ]);
     * ```
     *
     * @param  array $bindings An array of bindings
     * @return PolicyBuilder
     * @throws InvalidArgumentException
     */
    public function setBindings(array $bindings = [])
    {
        $this->bindings = [];
        foreach ($bindings as $binding) {
            $this->addBinding($binding['role'], $binding['members']);
        }

        return $this;
    }

    /**
     * Add a new binding to the policy.
     *
     * Example:
     * ```
     * $builder->addBinding('roles/admin', [ 'user:admin@domain.com' ]);
     * ```
     *
     * @param  string $role
     * @param  array  $members An array of members to assign to the binding
     * @return PolicyBuilder
     * @throws InvalidArgumentException
     */
    public function addBinding($role, array $members)
    {
        foreach ($members as $member) {
            $this->validateMember($member);
        }

        $this->bindings[] = [
            'role' => $role,
            'members' => $members
        ];

        return $this;
    }

    /**
     * Update the etag on the policy.
     *
     * Example:
     * ```
     * $builder->setEtag($oldPolicy['etag']);
     * ```
     *
     * @param  string $etag
     * @return PolicyBuilder
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;

        return $this;
    }

    /**
     * Update the version of the policy.
     *
     * Example:
     * ```
     * $builder->setVersion(1);
     * ```
     *
     * @param  int $version
     * @return PolicyBuilder
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Create a policy array with data in the correct format.
     *
     * Example:
     * ```
     * $builder->result();
     * ```
     *
     * @return array An array of policy data
     */
    public function result()
    {
        return array_filter([
            'etag' => $this->etag,
            'bindings' => $this->bindings,
            'version' => $this->version
        ]);
    }

    /**
     * Validate that each member is in the correct format.
     *
     * @param  string $member
     * @throws InvalidArgumentException
     * @return void
     */
    private function validateMember($member)
    {
        if (preg_match(self::MEMBER_REGEX, $member) === 0) {
            throw new InvalidArgumentException('member name is not a valid value.');
        }
    }
}
