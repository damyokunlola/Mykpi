<?php
require_once("../controller/functionpage.php") ;

// $email = $_POST["email"];
$user = new User();
$verifyToken = $user->verifyToken("ebuka@gmail.com");
if ($verifyToken) {                                                                                                                                                               

    //$result["status"] = true;
    //$result["message"]= "success";
    exit(json_encode($user->successalert("Email match")));
} else {

    $result["status"] = false;

    exit(json_encode($user->failalert("Email does not match")));
}
