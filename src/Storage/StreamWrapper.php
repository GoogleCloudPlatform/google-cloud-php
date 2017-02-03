<?php
/**
 * Copyright 2015 Google Inc. All Rights Reserved.
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

namespace Google\Cloud\Storage;

use Google\Cloud\Exception\GoogleException;
use Google\Cloud\Exception\ServiceException;

/**
 * A streamWrapper implementation for handling `gs://bucket/path/to/file.jpg`
 *
 * See: http://php.net/manual/en/class.streamwrapper.php
 */
class StreamWrapper
{
    const DEFAULT_PROTOCOL = 'gs';

    // Must be public according to the PHP documentation
    public $context;

    // a GuzzleHttp\Psr7\StreamInterface instance
    private $stream;

    private $protocol;
    private $bucket;
    private $file;
    private $mode;

    /**
     * @var StorageClient[] $clients The default clients to use if using
     *      global methods such as fopen on a stream wrapper. Keyed by protocol.
     */
    private static $clients = [];

    /**
     * Ensure we close the stream when this StreamWrapper is destroyed.
     */
    public function __destruct()
    {
        $this->stream_close();
    }

    /**
     * Register a StreamWrapper for reading and writing to Google Storage
     *
     * @param StorageClient $client The StorageClient configuration to use.
     * @param string $protocol The name of the protocol to use. Defaults to
     *        'gs'.
     * @throws \RuntimeException
     */
    public static function register(StorageClient $client, $protocol = null)
    {
        $protocol = $protocol ?: self::DEFAULT_PROTOCOL;
        if (!in_array($protocol, stream_get_wrappers())) {
            if (!stream_wrapper_register($protocol, StreamWrapper::class)) {
                throw new \RuntimeException("Failed to register '$protocol://' protocol");
            }
            self::$clients[$protocol] = $client;
            return true;
        }
        return false;
    }

    /**
     * Unregisters the SteamWrapper
     *
     * @param string $protocol The name of the protocol to unregister. Defaults
     *        to 'gs'.
     */
    public static function unregister($protocol = null)
    {
        $protocol = $protocol ?: self::DEFAULT_PROTOCOL;
        stream_wrapper_unregister($protocol);
        unset(self::$clients[$protocol]);
    }

    /**
     * Get the default client to use for streams.
     *
     * @param string $protocol The name of the protocol to get the client for.
     *        Defaults to 'gs'.
     * @return StorageClient
     */
    public static function getClient($protocol = null)
    {
        $protocol = $protocol ?: self::DEFAULT_PROTOCOL;
        return self::$clients[$protocol];
    }

    // @codingStandardsIgnoreStart
    /**
     * Callback handler for when a stream is opened. For reads, we need to
     * download the file to see if it can be opened.
     *
     * @return bool
     */
    public function stream_open($path, $mode, $flags, &$opened_path)
    {
        // @codingStandardsIgnoreEnd
        $client = $this->openPath($path);
        $this->mode = $mode;

        $options = [];
        if ($this->context) {
            $contextOptions = stream_context_get_options($this->context);
            if (array_key_exists($this->protocol, $contextOptions)) {
                $options = $contextOptions[$this->protocol] ?: [];
            }
        }

        if ($this->isWriteable()) {
            $options['name'] = $this->file;
            $this->stream = $this->bucket->getStreamableUploader(
                '',
                $options
            );
        } elseif ($this->isReadable()) {
            try {
                $options['httpOptions']['stream'] = true;
                $this->stream = $this->bucket->object($this->file)->downloadAsStream($options);
            } catch (GoogleException $ex) {
                return false;
            }
        } else {
            return false;
        }
        return true;
    }

    private function getStream()
    {
        return $this->stream;
    }

    private function isWriteable()
    {
        return in_array($this->mode, ['w', 'wb', 'wt']);
    }

    private function isReadable()
    {
        return in_array($this->mode, ['r', 'rb', 'rt']);
    }

    // @codingStandardsIgnoreStart
    /**
     * Callback handler for when we try to read a certain number of bytes.
     *
     * @param int $count The number of bytes to read.
     *
     * @return string
     */
    public function stream_read($count)
    {
        // @codingStandardsIgnoreEnd
        return $this->getStream()->read($count);
    }

    // @codingStandardsIgnoreStart
    /**
     * Callback handler for when we try to write data to the stream.
     *
     * @param string|stream $data The data to write
     *
     * @return int The number of bytes written.
     */
    public function stream_write($data)
    {
        // @codingStandardsIgnoreEnd
        return $this->getStream()->write($data);
    }

    // @codingStandardsIgnoreStart
    /**
     * Callback handler for getting data about the stream.
     *
     * @return array
     */
    public function stream_stat()
    {
        // @codingStandardsIgnoreEnd
        $size = $this->getStream()->getSize();
        if (!$size) {
            foreach ($this->getStream()->getMetadata('wrapper_data') as $value) {
                if (substr($value, 0, 15) == "Content-Length:") {
                    $size = (int) substr($value, 16);
                    break;
                }
            }
        }

        return [
            'dev'     => 0,
            'ino'     => 0,
            'mode'    => $this->isWriteable() ? 33188 : 33060, // equivalent to 10644 and 10444 in octal
            'nlink'   => 0,
            'uid'     => 0,
            'gid'     => 0,
            'rdev'    => 0,
            'size'    => $size,
            'atime'   => 0,
            'mtime'   => 0,
            'ctime'   => 0,
            'blksize' => 0,
            'blocks'  => 0
        ];
    }

    // @codingStandardsIgnoreStart
    /**
     * Callback handler for checking to see if the stream is at the end of file.
     *
     * @return bool
     */
    public function stream_eof()
    {
        // @codingStandardsIgnoreEnd
        return $this->getStream()->eof();
    }

    // @codingStandardsIgnoreStart
    /**
     * Callback handler for trying to close the stream.
     */
    public function stream_close()
    {
        // @codingStandardsIgnoreEnd
        if (isset($this->stream)) {
            $this->getStream()->close();
        }
    }

    // @codingStandardsIgnoreStart
    /**
     * Callback handler for trying to seek to a certain location in the stream.
     *
     * @param int $offset The stream offset to seek to
     * @param int $whence Flag for what the offset is relative to. See:
     *        http://php.net/manual/en/streamwrapper.stream-seek.php
     * @return bool
     */
    public function stream_seek($offset, $whence)
    {
        // @codingStandardsIgnoreEnd
        return $this->getStream()->seek($offset, $whence);
    }

    // @codingStandardsIgnoreStart
    /**
     * Callhack handler for inspecting our current position in the stream
     *
     * @return int
     */
    public function stream_tell()
    {
        // @codingStandardsIgnoreEnd
        return $this->getStream()->tell();
    }

    // @codingStandardsIgnoreStart
    /**
     * Callback handler for trying to close an opened directory.
     *
     * @return bool
     */
    public function dir_closedir()
    {
        // @codingStandardsIgnoreEnd
        return false;
    }

    // @codingStandardsIgnoreStart
    /**
     * Callback handler for trying to open a directory.
     *
     * @param string $path The url directory to open
     * @param int $options Whether or not to enforce safe_mode
     * @return bool
     */
    public function dir_opendir($path, $options)
    {
        // @codingStandardsIgnoreEnd

        return false;
    }

    // @codingStandardsIgnoreStart
    /**
     * Callback handler for reading an entry from a directory handle.
     *
     * @return string
     */
    public function dir_readdir()
    {
        // @codingStandardsIgnoreEnd
        return false;
    }

    // @codingStandardsIgnoreStart
    /**
     * Callback handler for rewind the directory handle.
     *
     * @return bool
     */
    public function dir_rewinddir()
    {
        // @codingStandardsIgnoreEnd
        return false;
    }

    /**
     * Callback handler for trying to create a directory.
     *
     * @param string $path The url directory to creaet
     * @param int $mode The permissions on the directory
     * @param int $options Bitwise mask of options
     * @return bool
     */
    public function mkdir($path, $mode, $options)
    {
        $client = $this->openPath($path);
        $this->file = $this->makeDirectory($this->file);

        try {
            $this->bucket->upload("", [
                'name' => $this->file
            ]);
        } catch (GoogleException $e) {
            return false;
        }
        return true;
    }

    private function openPath($path)
    {
        $url = parse_url($path);
        $this->protocol = $url['scheme'];
        $this->file = substr($url['path'], 1);
        $client = self::getClient($this->protocol);
        $this->bucket = $client->bucket($url['host']);
        return $client;
    }

    private function makeDirectory($path)
    {
        if (substr($path, -1) == '/') {
            return $path;
        } else {
            return $path . '/';
        }
    }

    /**
     * Callback handler for trying to move a file or directory.
     *
     * @param string $from The URL to the current file
     * @param string $to The URL of the new file location
     * @return bool
     */
    public function rename($from, $to)
    {
        return false;
    }

    /**
     * Callback handler for trying to remove a directory..
     *
     * @param string $path The URL directory to remove
     * @param int $options Bitwise mask of options
     * @return bool
     */
    public function rmdir($path, $options)
    {
        $path = $this->makeDirectory($path);
        if ($this->dir_readdir() !== false) {
            trigger_error('The directory is not empty.', E_USER_WARNING);
            return false;
        }
        return $this->unlink($path);
    }

    /**
     * Callback handler for retrieving the underlaying resource
     *
     * @param int $castAs STREAM_CAST_FOR_SELECT | STREAM_CAST_AS_STREAM
     * @return resource
     */
    public function stream_cast($castAs)
    {
        return false;
    }

    /**
     * Callback handler for deleting a file
     *
     * @param string $path The URL of the file to delete
     * @return bool
     */
    public function unlink($path)
    {
        $client = $this->openPath($path);
        $object = $this->bucket->object($this->file);

        try {
            return $object->delete();
        } catch (GoogleException $e) {
            return false;
        }
    }

    /**
     * Callback handler for retrieving information about a file
     *
     * @param string $path The URI to the file
     * @param int $flags Bitwise mask of options
     * @return array
     */
    public function url_stat($path, $flags)
    {
        $fp = @fopen($path, 'rb');
        if ($fp === false) {
            return false;
        }
        $stats = fstat($fp);
        fclose($fp);
        return $stats;
    }
}
