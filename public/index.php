<?php
// For autoloading Composer based dependencies
use Acme\Foundation\Database;
use Acme\Foundation\Session;
use Acme\Repository\UserRepository;
use Acme\Service\UserService;
use Doctrine\DBAL\DriverManager;

require __DIR__ . '/../vendor/autoload.php';

$config = require 'config/config.php';
$database = new Database(
    DriverManager::getConnection($config['database'])
);
$session = new Session($database);
$userRepository = new UserRepository($database);
$userService = new UserService($session, $userRepository);

$user = $userService->getCurrentUser();
dump($user);
