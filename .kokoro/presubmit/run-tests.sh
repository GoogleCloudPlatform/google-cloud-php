#!/bin/bash

set -ex

pushd github/google-cloud-php
composer --no-interaction --no-ansi --no-progress update

SHORT_JOB_NAME=${KOKORO_JOB_NAME##*/}
UNIT_LOG_FILENAME=${SHORT_JOB_NAME}_unit_sponge_log.xml
SNIPPETS_LOG_FILENAME=${SHORT_JOB_NAME}_snippets_sponge_log.xml

echo "Running PHPCS Code Style Checker"
dev/sh/style

echo "Running Unit Test Suite"
vendor/bin/phpunit --log-junit ${UNIT_LOG_FILENAME}

echo "Running Snippet Test Suite"
vendor/bin/phpunit -c phpunit-snippets.xml.dist --verbose --log-junit \
                   ${SNIPPETS_LOG_FILENAME}

# Move the file to the source top directory for better look
mv ${UNIT_LOG_FILENAME} ../..
mv ${SNIPPETS_LOG_FILENAME} ../..

popd
