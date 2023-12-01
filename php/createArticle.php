<?php
include_once("./upload.php");
include("./db.php");
$title = $_POST['title'];
$url = $_POST['url'];
$description = $_POST['description'];
$author = (int) $_COOKIE['id'];
$time = time();

if (preg_match('/^http:\/\//', $url)) {
    echo 'Некорректный url';
    exit();
}

$date = date('Y-n-d H:i:s', $time);
$filename = uploadImage();
createArticle($title, $description, $author, $date, $url, $filename);

GoBack();
