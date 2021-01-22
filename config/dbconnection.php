<?php

class MyConnection
{
    private $server = "localhost";
    private $dbname = "kpi";
    private $username = "root";
    private $password = "";

    public function __construct()
    {
        return new mysqli($this->server, $this->username, $this->password, $this->dbname);
    }
}
