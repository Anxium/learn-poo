<?php

class DataBase
{

    private $hostname = null;
    private $dbname = null;
    private $user = null;
    private $pass = null;

    public function __construct($hostname, $dbname, $user, $pass)
    {

        $this->hostname = $hostname;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;

    }

    private function getHost()
    {
        return $this->hostname;
    }

    private function getDbname()
    {
        return $this->dbname;
    }

    private function getUser()
    {
        return $this->user;
    }

    private function getPass()
    {
        return $this->pass;
    }

    public function connect()
    {
        return new PDO("mysql:host=" . $this->getHost() . ";dbname=" . $this->getDbname(), $this->getUser(), $this->getPass());
    }

    public function showAll($data, $tableName)
    {
        foreach($this->connect()->query('SELECT ' . $data . ' from ' . $tableName) as $row) {
            print_r($row);
        }
    }

}