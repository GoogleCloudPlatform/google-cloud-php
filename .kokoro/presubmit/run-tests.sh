#!/bin/bash

set -ex

pushd github/google-cloud-php

# Run docs generator on PHP >= 7.2
RUN_DOCS=$(php -r "echo version_compare(phpversion(), '7.2', '>=') ? '1' : '';")

if [ "" == $RUN_DOCS ]; then
    # Remove PHP 7.2-only phpdocumentor library
    composer remove --dev --no-update phpdocumentor/reflection
fi

# retry composer update command on fail up to 3 times.
for i in $(seq 1 3); do composer --no-interaction --no-ansi --no-progress update && s=0 && break || s=$? && sleep 15; done; (exit $s)

SHORT_JOB_NAME=${KOKORO_JOB_NAME##*/}

# if [ "${SHORT_JOB_NAME}" == "php72" ]; then
#     pecl install xdebug
#     echo "zend_extension=xdebug.so" > ${PHP_DIR}/lib/conf.d/xdebug.ini
#     RUN_CODECOV="true"
#     OPT_CLOVER="--coverage-clover=clover.xml"
# fi

mkdir -p ${SHORT_JOB_NAME}/unit
mkdir -p ${SHORT_JOB_NAME}/snippets

UNIT_LOG_FILENAME=${SHORT_JOB_NAME}/unit/sponge_log.xml
SNIPPETS_LOG_FILENAME=${SHORT_JOB_NAME}/snippets/sponge_log.xml

echo "Running PHPCS Code Style Checker"
dev/sh/style

echo "Running Unit Test Suite"

vendor/bin/phpunit --log-junit ${UNIT_LOG_FILENAME} ${OPT_CLOVER}

if [ "${RUN_CODECOV}" == "true" ]; then
    bash ${KOKORO_GFILE_DIR}/codecov.sh
fi

echo "Running Snippet Test Suite"

vendor/bin/phpunit -c phpunit-snippets.xml.dist --verbose --log-junit \
                   ${SNIPPETS_LOG_FILENAME}

if [ "1" == $RUN_DOCS ]; then
    echo "Running Doc Generator"
    php -d 'memory_limit=-1' dev/google-cloud doc
fi

popd
