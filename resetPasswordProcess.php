<?php

include_once 'users.php';
include_once 'db.php';

$con = new DBConnector();
$pdo = $con->connectToDB();

if(isset($_POST['reset'])){
    //$email = $_POST['email'];
    $newPassword = $_POST['new_password'];

    $user = new Users();
    $user->setNewPassword($newPassword);

    echo $user->changePassword($pdo);

}
