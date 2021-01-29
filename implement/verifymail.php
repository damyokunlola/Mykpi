<?php
include "../controller/user.php";

$user = new User();
// $email = $_POST["email"];
// $department = $_POST["department"];
// $position = $_POST["position"];

$email= "ade@gmail.com";
$serial = rand(100000, 999999);
$date = date("Y-m-d");
$addstaff = $user->addstaff("email,department,position,token,expiry", "'$email', 'developer', 'staff','$serial','$date'");

$verifyMail= $user->checkMail($email);

if($verifyMail){

exit(json_encode($user->failalert("Email already registered")));
}

if ($addstaff) {


    $result["status"] = true;
    $result["message"] = "successful";
    exit(json_encode($result));
    // exit(json_encode(["message" => "success", "data" => [var_dump($_POST)]]));

    
} else {
    $result["status"] = false;
    $result["message"] = "failed";
    exit(json_encode($result));
}

echo json_encode($result);


