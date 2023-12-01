<?php
setcookie('user', $userResult->login, time() - 3600*24, '/');
setcookie('id', $userResult->id, time() -3600*24,'/');
header('Location: /');
?>