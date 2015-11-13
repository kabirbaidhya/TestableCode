<?php
// Application Bootstrap file

use Acme\Foundation\Application;
use Illuminate\Container\Container;

define('BASE_PATH', __DIR__ . '/');
define('CONFIG_PATH', BASE_PATH . 'config/');
define('CONFIG_FILE', CONFIG_PATH . 'config.php');
define('TEST_PATH', BASE_PATH . 'tests/');

// Require Composer's autoloader
require __DIR__ . '/vendor/autoload.php';

// Return a new Application Instance
return new Application(new Container());
