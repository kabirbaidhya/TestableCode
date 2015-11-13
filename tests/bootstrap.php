<?php
error_reporting(E_ALL);

/** @var \Acme\Foundation\Application $app */
$app = require __DIR__ . '/../bootstrap.php';

$app->run();

\Acme\Test\TestCase::setApplication($app);

// Needs this line or else phpunit will throw "serialization of Closure .." error
unset($app);
