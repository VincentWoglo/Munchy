<?php

namespace munchy\database;

// No need to use 'use PDO;' since it's a core PHP class

// require_once __DIR__ . '/../../config/config.php';

class databaseConnection 
{
    private $hostname;
    private $password;
    private $username;
    private $databaseName;
    protected $databaseConnection;

    public function __construct()
    {
        $this->hostname = "127.0.0.1";
        $this->password = "";
        $this->username = "root";
        $this->databaseName = "munchy";
    }

    public function connectDatabase()
    {
        try
        {
            $this->databaseConnection = new \PDO("mysql:host=$this->hostname;dbname=$this->databaseName", $this->username, $this->password);
            $this->databaseConnection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $this->databaseConnection;
        }
        catch(\PDOException $e)
        {
            throw new \PDOException($e->getMessage(), $e->getCode());
        }
    }
}
?>
