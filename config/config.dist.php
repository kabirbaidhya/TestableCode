<?php
// This is a sample configuration file.
// Please make a copy of this file as 'config.php' and fill up your database config parameters
//
// Check this http://doctrine-orm.readthedocs.org/projects/doctrine-dbal/en/latest/reference/configuration.html#getting-a-connection
// for more information about setting up Connection configuration
//
return [
    'database' => [
        'dbname' => 'DBNAME',
        'user' => 'USER',
        'password' => 'PASSWORD',
        'host' => 'HOST',
        'driver' => 'DRIVER',
    ],
    'providers' => require __DIR__ . '/providers.config.php'
];
