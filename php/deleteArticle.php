<?php
include_once("db.php");
include_once("functions.php");
deleteArticle($_POST['id']);
GoBack();