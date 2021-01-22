<?php
include "../controller/user.php";

$user = new User();
$addstaff = $user->addstaff("email,department,position", "'hameed@gmaill.com', 'developer', 'staff'");

if ($check) {

    $result["status"] = true;
    // $result["message"] = "successful";
    // exit(json_encode($result));
    exit(json_encode(["message" => "success", "data" => [var_dump($_POST)]]));
} else {
    $result["status"] = false;
    $result["message"] = "failed";
    exit(json_encode($result));
}


