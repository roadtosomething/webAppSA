<?php
include("./db.php");
$name = $_POST['name'];
$secondName = $_POST['secondName'];
$surName = $_POST['surName'];
$eMail = $_POST['eMail'];
$phoneNumber = $_POST['phoneNumber'];
$login = $_POST['login'];
$pass = $_POST['pass'];

if (strlen($login) < 5 || strlen($login)> 16) {
    echo 'Недопустимая длинна логина';
    exit();
}
if (strlen($pass) < 8 || strlen($pass)> 16) {
    echo 'Недопустимая длинна пароля (от 8 до 16 символов)';
    exit();
}

$pass = md5($pass.$securityStringPSW);

createPerson($name, $secondName, $surName, $eMail, $phoneNumber);
createUser($login, $pass);
header("Location: /#loginModal")
?>