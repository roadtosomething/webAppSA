<?php
setcookie('user', $userResult->login, time() - 3600, '/');
setcookie('id', $userResult->id, time() -3600,'/');
header('Location: /');
?>