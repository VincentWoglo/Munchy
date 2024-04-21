<?php
include __DIR__."/vendor/autoload.php";

require_once __DIR__ . './config/config.php';

return [
    'paths' => [
        'migrations' => 'database/migration'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => '127.0.0.1',
            'name' => 'production_db',
            'user' => 'root',
            'pass' => '',
            'port' => '3309',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => DATABASE_ADAPTER,
            'host' => DATABASE_HOSTNAME,
            'name' => DATABASE_NAME,
            'user' => DATABASE_USERNAME,
            'pass' => DATABASE_PASSWORD,
            'port' => DATABASE_PORT
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'testing_db',
            'user' => 'root',
            'pass' => '',
            'port' => '3306',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
