<?php
/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Dev\Split\Command;

use Google\Cloud\Dev\GetComponentsTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use vierbergenlars\SemVer\SemVerException;
use vierbergenlars\SemVer\version;

class Split extends Command
{
    use GetComponentsTrait;

    const TOKEN_ENV = 'GH_OAUTH_TOKEN';
    const TAG_ENV = 'TRAVIS_TAG';
    const TARGET_REGEX = '/([a-zA-Z0-9-_]{1,})\/([a-zA-Z0-9-_]{1,})\.git/';

    const COMPONENT_BASE = '%s/../src';
    const SPLIT_SHELL = '%s/sh/split';
    const PATH_MANIFEST = '%s/../docs/manifest.json';
    const PARENT_TAG_NAME = 'https://github.com/GoogleCloudPlatform/google-cloud-php/releases/tag/%s';

    private $cliBasePath;

    private $splitShell;

    private $components;

    private $manifest;

    private $github;

    public function __construct($cliBasePath)
    {
        $this->cliBasePath = $cliBasePath;
        $this->splitShell = sprintf(self::SPLIT_SHELL, $cliBasePath);
        $this->components = sprintf(self::COMPONENT_BASE, $cliBasePath);
        $this->manifest = sprintf(self::PATH_MANIFEST, $cliBasePath);

        $this->github = new \Github\Client();
        $this->github->authenticate(getenv(self::TOKEN_ENV), \Github\Client::AUTH_HTTP_TOKEN);

        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('split')
            ->setDescription('Split subtree and push to various remotes.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!getenv(self::TAG_ENV)) {
            $output->writeln('This command should only be run inside a CI post-release process');
            return;
        }

        $components = $this->getComponents($this->components);

        $tag = getenv(self::TAG_ENV);

        $parentTagSource = sprintf(self::PARENT_TAG_NAME, $tag);

        foreach ($components as $component) {
            $output->writeln('');
            $output->writeln(sprintf('<info>Starting on component %s</info>', $component['id']));
            $output->writeln('------------');
            shell_exec(sprintf(
                '%s %s %s',
                $this->splitShell,
                $component['prefix'],
                $component['target']
            ));

            $target = $component['target'];
            $matches = [];
            preg_match(self::TARGET_REGEX, $target, $matches);

            $org = $matches[1];
            $repo = $matches[2];

            $version = $this->getComponentVersion($this->manifest, $component['id']);
            try {
                new version($version);
            } catch (SemVerException $e) {
                $output->writeln(sprintf(
                    'Component %s version %s is invalid.',
                    $component['id'],
                    $version
                ));
                continue;
            }

            $releases = $this->github->api('repo')->releases()->all($org, $repo);
            if (count(array_filter($releases, function ($release) use ($version) {
                return ($release['tag_name'] === $version);
            })) > 0) {
                $output->writeln(sprintf(
                    'Component %s already tagged at version %s',
                    $component['id'],
                    $version
                ));
                continue;
            }

            $this->github->api('repo')->releases()->create($org, $repo, [
                'tag_name' => $version,
                'name' => $component['displayName'] .' '. $version,
                'body' => sprintf(
                    'For release notes, please see the [associated Google Cloud PHP release](%s).',
                    $parentTagSource
                )
            ]);

            $output->writeln(sprintf(
                'Release %s created for component %s',
                $version,
                $component['id']
            ));
        }
    }
}
