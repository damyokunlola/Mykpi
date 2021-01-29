<?php
require_once "../config/dbconnection.php";
class User extends MyConnection
{

    private $con;
    public function __construct()
    {
        $this->con = parent::__construct();
    }

    

    public function addStaff($fields, $values)
    {
        $query = "INSERT INTO staff ($fields) VALUES ($values)";
        $result = $this->con->query($query);
        return $result;
    }

    public function generateToken($fields, $values)
    {
        $query = "INSERT INTO token ($fields) VALUES ($values)";
        $result = $this->con->query($query);
        return $result;
    }

    public function successalert($message)
    {

        $result["status"] = true;
        $result["message"] = "$message";
        return $result;
    }

    public function failalert($message)
    {

        $result["status"] = false;
        $result["message"] = "$message";
        return $result;
    }

    public function checkMail($email)
    {
        $query = "SELECT email FROM kpi WHERE email= '$email' ";
        $result = $this->con->query($query);

        return  $result->num_rows;
    }

    public function verifyToken($email){

        $query= "SELECT * FROM staff WHERE email='$email' ";
        $result = $this->con->query($query);
        return $result;
    }

    
}
