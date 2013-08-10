<?php

$file = __DIR__.'/../vendor/autoload.php';
if (!file_exists($file)) {
    throw new RuntimeException('Install dependencies to run test suite.');
}

$autoload = require_once $file;

$file = __DIR__.'/../libs/config.php';
if (!file_exists($file)) {
    throw new RuntimeException('Missing config file.');
}

$autoload = require_once $file;


