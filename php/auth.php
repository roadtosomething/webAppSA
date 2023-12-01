<?php
include("db.php");
include("functions.php");

$login = $_POST['login'];
$pass = $_POST['pass'];

$pass = md5($pass.$securityStringPSW);
$userResult = checkUser($login, $pass);
if (is_object($userResult) ) {
    setcookie('user', $userResult->login, time() + 3600*24, '/');
    setcookie('id', $userResult->id, time() +3600*24,'/');
    GoBack();
}


