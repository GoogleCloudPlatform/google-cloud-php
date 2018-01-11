<?php
/**
 * Copyright 2018 Google Inc. All Rights Reserved.
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

namespace Google\Cloud\Debugger;

/**
 * This class handles searching for a source file in the application's source
 * tree. A debugger breakpoint may be requested for a source path that has
 * extra or missing folders.
 *
 * There are 3 cases for resolving a SourceLocation:
 *
 * Case 1: The exact path is found
 *
 * Example:
 * ```
 * $location = new SourceLocation('src/Debugger/DebuggerClient.php', 1);
 * $resolver = new SourceLocationResolver();
 * $resolvedLocation = $resolver->resolve($location);
 * echo $resolvedLocation->path();
 * ```
 *
 * Case 2: There are extra folder(s) in the requested breakpoint path
 *
 * Example:
 * ```
 * $location = new SourceLocation('extra/folder/src/Debugger/DebuggerClient.php', 1);
 * $resolver = new SourceLocationResolver();
 * $resolvedLocation = $resolver->resolve($location);
 * echo $resolvedLocation->path();
 * ```
 *
 * Case 3: There are fewer folders in the requested breakpoint path
 *
 * Example:
 * ```
 * $location = new SourceLocation('Debugger/DebuggerClient.php', 1);
 * $resolver = new SourceLocationResolver();
 * $resolvedLocation = $resolver->resolve($location);
 * echo $resolvedLocation->path();
 * ```
 */
class SourceLocationResolver
{
    /**
     * Resolve the full path of an existing file in the application's source.
     * If no matching source file is found, then return null. If found, the
     * resolved location will include the full, absolute path to the source
     * file.
     *
     * @param SourceLocation $location The location to resolve.
     * @return SourceLocation|null
     */
    public function resolve(SourceLocation $location)
    {
        $basename = basename($location->path());
        $prefixes = $this->searchPrefixes($location->path());
        $includePaths = explode(':', get_include_path());

        // Phase 1: search for an exact file match and try stripping off extra
        // folders
        foreach ($prefixes as $prefix) {
            foreach ($includePaths as $path) {
                $file = implode(DIRECTORY_SEPARATOR, [$path, $prefix, $basename]);
                if (file_exists($file)) {
                    return new SourceLocation(realpath($file), $location->line());
                }
            }
        }

        // Phase 2: recursively search folders for
        foreach ($includePaths as $includePath) {
            $iterator = new MatchingFileIterator(
                $includePath,
                $location->path()
            );
            foreach ($iterator as $file => $info) {
                return new SourceLocation(realpath($file), $location->line());
            }
        }

        return null;
    }

    /**
     * Returns an array of relative paths for this file by recursively removing
     * each leading directory.
     *
     * @param string $path The source path
     * @return string[]
     */
    private function searchPrefixes($path)
    {
        $dirname = dirname($path);
        $directoryParts = explode(DIRECTORY_SEPARATOR, $dirname);
        $directories = [];
        while ($directoryParts) {
            $directories[] = implode(DIRECTORY_SEPARATOR, $directoryParts);
            array_shift($directoryParts);
        }
        return $directories;
    }
}

/**
 * This iterator returns files that match the provided file in the provided
 * search path.
 *
 * Example:
 * ```
 * $iterator = new MatchingFileIterator('.', 'src/Debugger/DebuggerClient.php');
 * $matches = iterator_to_array($iterator);
 * ```
 *
 * @access private
 */
class MatchingFileIterator extends \FilterIterator
{
    private $file;

    /**
     * Create a new MatchingFileIterator.
     *
     * @param string $searchPath The root path to search in
     * @param string $file The file to search for
     */
    public function __construct($searchPath, $file)
    {
        parent::__construct(
            new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator(
                    realpath($searchPath),
                    \FilesystemIterator::SKIP_DOTS
                )
            )
        );
        $this->file = $file;
    }

    /**
     * FilterIterator callback to determine whether or not the value should be
     * accepted.
     *
     * @return boolean
     * @access private
     */
    public function accept()
    {
        $candidate = $this->getInnerIterator()->current();
        return strrpos($candidate, $this->file) === strlen($candidate) - strlen($this->file);
    }
}
