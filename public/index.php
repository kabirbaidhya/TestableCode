<?php
// For autoloading Composer based dependencies
use Acme\Service\UserService;
use Doctrine\DBAL\DriverManager;
use Acme\Repository\UserRepository;
use Acme\Foundation\Session\Session;
use Acme\Foundation\Database\Database;

require __DIR__ . '/../bootstrap.php';

$config = require CONFIG_FILE;
$database = new Database(
    DriverManager::getConnection($config['database'])
);
$session = new Session($database);
$userRepository = new UserRepository($database);
$userService = new UserService($session, $userRepository);

$user = $userService->getCurrentUser();
dump($user);
