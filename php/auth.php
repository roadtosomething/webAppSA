<?php
include("db.php");

$login = $_POST['login'];
$pass = $_POST['pass'];

$pass = md5($pass.$securityStringPSW);
$userResult = checkUser($login, $pass);
if (is_object($userResult) ) {
    setcookie('user', $userResult->login, time() + 3600, '/');
    setcookie('id', $userResult->id, time() +3600,'/');
    header("Location: /");
}


