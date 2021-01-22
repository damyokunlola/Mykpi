<?php
require_once "../config/dbconnection.php";
class User extends MyConnection
{

    private $con;
    public function __construct()
    {
        $this->con = parent::__construct();
    }

    public function checkMail($email)
    {
        $query = "SELECT email FROM kpi WHERE email= '$email' ";
        $result = $this->con->query($query);

        return  $result->num_rows;
    }

    public function addStaff($fields, $values)
    {
        $query = "INSERT INTO staff ($fields) VALUES ($values)";
        $result = $this->con->query($query);
        return $result;
    }
}
