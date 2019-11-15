<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/audio_config.proto

namespace Google\Cloud\Dialogflow\V2;

use UnexpectedValueException;

/**
 * Audio encoding of the audio content sent in the conversational query request.
 * Refer to the
 * [Cloud Speech API
 * documentation](https://cloud.google.com/speech-to-text/docs/basics) for more
 * details.
 *
 * Protobuf type <code>google.cloud.dialogflow.v2.AudioEncoding</code>
 */
class AudioEncoding
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>AUDIO_ENCODING_UNSPECIFIED = 0;</code>
     */
    const AUDIO_ENCODING_UNSPECIFIED = 0;
    /**
     * Uncompressed 16-bit signed little-endian samples (Linear PCM).
     *
     * Generated from protobuf enum <code>AUDIO_ENCODING_LINEAR_16 = 1;</code>
     */
    const AUDIO_ENCODING_LINEAR_16 = 1;
    /**
     * [`FLAC`](https://xiph.org/flac/documentation.html) (Free Lossless Audio
     * Codec) is the recommended encoding because it is lossless (therefore
     * recognition is not compromised) and requires only about half the
     * bandwidth of `LINEAR16`. `FLAC` stream encoding supports 16-bit and
     * 24-bit samples, however, not all fields in `STREAMINFO` are supported.
     *
     * Generated from protobuf enum <code>AUDIO_ENCODING_FLAC = 2;</code>
     */
    const AUDIO_ENCODING_FLAC = 2;
    /**
     * 8-bit samples that compand 14-bit audio samples using G.711 PCMU/mu-law.
     *
     * Generated from protobuf enum <code>AUDIO_ENCODING_MULAW = 3;</code>
     */
    const AUDIO_ENCODING_MULAW = 3;
    /**
     * Adaptive Multi-Rate Narrowband codec. `sample_rate_hertz` must be 8000.
     *
     * Generated from protobuf enum <code>AUDIO_ENCODING_AMR = 4;</code>
     */
    const AUDIO_ENCODING_AMR = 4;
    /**
     * Adaptive Multi-Rate Wideband codec. `sample_rate_hertz` must be 16000.
     *
     * Generated from protobuf enum <code>AUDIO_ENCODING_AMR_WB = 5;</code>
     */
    const AUDIO_ENCODING_AMR_WB = 5;
    /**
     * Opus encoded audio frames in Ogg container
     * ([OggOpus](https://wiki.xiph.org/OggOpus)).
     * `sample_rate_hertz` must be 16000.
     *
     * Generated from protobuf enum <code>AUDIO_ENCODING_OGG_OPUS = 6;</code>
     */
    const AUDIO_ENCODING_OGG_OPUS = 6;
    /**
     * Although the use of lossy encodings is not recommended, if a very low
     * bitrate encoding is required, `OGG_OPUS` is highly preferred over
     * Speex encoding. The [Speex](https://speex.org/) encoding supported by
     * Dialogflow API has a header byte in each block, as in MIME type
     * `audio/x-speex-with-header-byte`.
     * It is a variant of the RTP Speex encoding defined in
     * [RFC 5574](https://tools.ietf.org/html/rfc5574).
     * The stream is a sequence of blocks, one block per RTP packet. Each block
     * starts with a byte containing the length of the block, in bytes, followed
     * by one or more frames of Speex data, padded to an integral number of
     * bytes (octets) as specified in RFC 5574. In other words, each RTP header
     * is replaced with a single byte containing the block length. Only Speex
     * wideband is supported. `sample_rate_hertz` must be 16000.
     *
     * Generated from protobuf enum <code>AUDIO_ENCODING_SPEEX_WITH_HEADER_BYTE = 7;</code>
     */
    const AUDIO_ENCODING_SPEEX_WITH_HEADER_BYTE = 7;

    private static $valueToName = [
        self::AUDIO_ENCODING_UNSPECIFIED => 'AUDIO_ENCODING_UNSPECIFIED',
        self::AUDIO_ENCODING_LINEAR_16 => 'AUDIO_ENCODING_LINEAR_16',
        self::AUDIO_ENCODING_FLAC => 'AUDIO_ENCODING_FLAC',
        self::AUDIO_ENCODING_MULAW => 'AUDIO_ENCODING_MULAW',
        self::AUDIO_ENCODING_AMR => 'AUDIO_ENCODING_AMR',
        self::AUDIO_ENCODING_AMR_WB => 'AUDIO_ENCODING_AMR_WB',
        self::AUDIO_ENCODING_OGG_OPUS => 'AUDIO_ENCODING_OGG_OPUS',
        self::AUDIO_ENCODING_SPEEX_WITH_HEADER_BYTE => 'AUDIO_ENCODING_SPEEX_WITH_HEADER_BYTE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(\sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . \strtoupper($name);
        if (!\defined($const)) {
            throw new UnexpectedValueException(\sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return \constant($const);
    }
}

