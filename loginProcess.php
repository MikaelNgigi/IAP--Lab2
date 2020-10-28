<?php
include_once 'db.php';
include_once 'users.php';

$con = new DBConnector();
$pdo = $con->connectToDB();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new Users();
    echo $user->login($pdo);
}

/*$Email = $_POST['email'];
$Password = $_POST['password'];

$con = new DBConnector();
$pdo = $con->connectToDB();

$user = new Users();
$user->setEmail($Email);
$user->setPassword($Password);

echo $user->login($pdo);*/

