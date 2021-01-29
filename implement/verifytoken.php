<?php
include "../controller/functionpage.php";

$email = $_POST["email"];
$user = new User();
$verifyToken = $user->verifyToken($email);
if ($verifyToken) {

    //$result["status"] = true;
    //$result["message"]= "success";
    exit(json_encode($user->successalert("Email match")));
} else {

    $result["status"] = false;

    //exit(json_encode($user->failalert("Email does not match")));

}
