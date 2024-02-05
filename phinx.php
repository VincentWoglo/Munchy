<?php
    include __DIR__."/vendor/autoload.php";
    use munchy\database\databaseConnection;
    $databaseConnection = new databaseConnection;
    $Connection->connectDatabase();
    //May have to load the connection class in the model and manually run it here
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/Model", ".env.Connection");
    $dotenv->load();
    return [
        'paths' => [
            'migrations' => 'Database/Migration'
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
                'adapter' => $_ENV['ADAPTER'],
                'host' => $_ENV['HOST'],
                'name' => $_ENV['DBNAME'],
                'user' => $_ENV['USER'],
                'pass' => $_ENV['PASSWORD']
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
    
?>