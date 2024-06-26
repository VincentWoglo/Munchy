<?php

namespace munchy\database;

use pdo;

// No need to use 'use PDO;' since it's a core PHP class

require_once __DIR__ . '../../config/config.php';

class databaseConnection 
{
    private $hostname;
    private $password;
    private $username;
    private $databaseName;
    private $portNumber;
    protected $databaseConnection;

    public function __construct()
    {
        $this->hostname = DATABASE_HOSTNAME;
        $this->password = DATABASE_PASSWORD;
        $this->username = DATABASE_USERNAME;
        $this->databaseName = DATABASE_NAME;
        $this->portNumber = DATABASE_PORT;
    }


    public function connectDatabase()
    {
        try
        {
            $this->databaseConnection = new PDO("mysql:host=$this->hostname; port=$this->portNumber; dbname=$this->databaseName", $this->username, $this->password);
            $this->databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->databaseConnection;
        }
        catch(\PDOException $e)
        {
            throw new \PDOException($e->getMessage(), $e->getCode());
        }
    }


    /**
     * Disconnects database connection
     */
    private function disconnectDatabase()
    {

    }
}
?>
