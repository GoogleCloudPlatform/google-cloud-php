<?php
/*
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * DO NOT EDIT! This is a generated sample ("Request",  "speech_quickstart_beta")
 */

// sample-metadata
//   title: Quickstart Beta
//   description: Performs synchronous speech recognition on an audio file
//   usage: php samples/V1p1beta1/SpeechQuickstartBeta.php [--storage_uri "gs://cloud-samples-data/speech/brooklyn_bridge.mp3"]
// [START speech_quickstart_beta]
require __DIR__.'/../../vendor/autoload.php';

use Google\Cloud\Speech\V1p1beta1\SpeechClient;
use Google\Cloud\Speech\V1p1beta1\RecognitionAudio;
use Google\Cloud\Speech\V1p1beta1\RecognitionConfig;
use Google\Cloud\Speech\V1p1beta1\RecognitionConfig\AudioEncoding;

/**
 * Performs synchronous speech recognition on an audio file.
 *
 * @param string $storageUri URI for audio file in Cloud Storage, e.g. gs://[BUCKET]/[FILE]
 */
function sampleRecognize($storageUri)
{
    $speechClient = new SpeechClient();

    // $storageUri = 'gs://cloud-samples-data/speech/brooklyn_bridge.mp3';

    // The language of the supplied audio
    $languageCode = 'en-US';

    // Sample rate in Hertz of the audio data sent
    $sampleRateHertz = 44100;

    // Encoding of audio data sent. This sample sets this explicitly.
    // This field is optional for FLAC and WAV audio formats.
    $encoding = AudioEncoding::MP3;
    $config = new RecognitionConfig();
    $config->setLanguageCode($languageCode);
    $config->setSampleRateHertz($sampleRateHertz);
    $config->setEncoding($encoding);
    $audio = new RecognitionAudio();
    $audio->setUri($storageUri);

    try {
        $response = $speechClient->recognize($config, $audio);
        foreach ($response->getResults() as $result) {
            // First alternative is the most probable result
            $alternative = $result->getAlternatives()[0];
            printf('Transcript: %s'.PHP_EOL, $alternative->getTranscript());
        }
    } finally {
        $speechClient->close();
    }
}
// [END speech_quickstart_beta]

$opts = [
    'storage_uri::',
];

$defaultOptions = [
    'storage_uri' => 'gs://cloud-samples-data/speech/brooklyn_bridge.mp3',
];

$options = getopt('', $opts);
$options += $defaultOptions;

$storageUri = $options['storage_uri'];

sampleRecognize($storageUri);
