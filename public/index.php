<?php
// For autoloading Composer based dependencies
use Acme\Service\UserService;

/** @var \Acme\Foundation\Application $app */
$app = require __DIR__ . '/../bootstrap.php';

$userService = $app->run()->getContainer()[UserService::class];

$user = $userService->getCurrentUser();
dump($user);
