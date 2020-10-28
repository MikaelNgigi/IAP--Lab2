<?php
include_once 'users.php';
include_once  'db.php';

$con = new DBConnector();
$pdo = $con->connectToDB();

if(isset($_POST['register'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $user_name = $_POST['username'];
    $Email = $_POST['email'];
    $City = $_POST['city'];
    $Profile = $_POST['profile'];
    $Password = $_POST['password'];

    $user = new Users();
    $user->setFirstName($first_name);
    $user->setLastName($last_name);
    $user->setUsername($user_name);
    $user->setEmail($Email);
    $user->setCity($City);
    $user->setProfile($Profile);
    $user->setPassword($Password);

    echo $user->register($pdo);

}

/*$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$user_name = $_POST['username'];
$Email = $_POST['email'];
$City = $_POST['city'];
$Profile = $_POST['profile'];
$Password = $_POST['password'];

$con = new DBConnector();
$pdo = $con->connectToDB();

$user = new Users();
$user->setFirstName($first_name);
$user->setLastName($last_name);
$user->setUsername($user_name);
$user->setEmail($Email);
$user->setCity($City);
$user->setProfile($Profile);
$user->setPassword($Password);

echo $user->register($pdo);*/


