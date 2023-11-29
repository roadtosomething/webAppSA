<?php

$dbhost = "localhost";
$dbname = "neuroview";
$dbuser = "root";
$dbpass = "mysql";
$securityStringPSW = "sacacascascasc2324";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpass);

function getAuthorInfoByArticle($author)
{
    global $db;
    $sql = "SELECT * from `person` where `id`=(select `person` from `users` where `id`='$author')";
    $author = $db->query($sql);
    return $author->fetchObject();
}

function getArticles()
{
    global $db;
    return $db->query("SELECT * from articles");
}

function getModeratedArticles()
{
    global $db;
    return $db->query("SELECT * from moderated_articles");
}

function getArticlesById($id)
{
    global $db;
    $articles = $db->query("SELECT * from articles where id=$id");
    foreach ($articles as $article) {
        return $article;
    }
}

function getModeratedArticlesById($id)
{
    global $db;
    $articles = $db->query("SELECT * from moderated_articles where id=$id");
    foreach ($articles as $article) {
        return $article;
    }
}

function createArticle($title, $description, $author, $date, $url, $img_name)
{
    global $db;
    $sql = "INSERT INTO `articles` (`title`, `description`, `author`, `created_date`, `url`, `img_name`) 
    VALUES ('$title', '$description', '$author', '$date', '$url', '$img_name')";
    $result = $db->query($sql);
    if (!$result) {
        $db->errorInfo();
        exit();
    }
}

function createModeratedArticle($title, $description, $author, $date, $url, $img_name)
{
    global $db;
    $sql = "INSERT INTO `moderated_articles` (`title`, `description`, `author`, `created_date`, `url`, `img_name`) 
    VALUES ('$title', '$description', '$author', '$date', '$url', '$img_name')";
    $result = $db->query($sql);
    if (!$result) {
        $db->errorInfo();
        exit();
    }
}

function createPerson($name, $secondName, $surName, $eMail, $phoneNumber)
{
    global $db;
    $sql = "INSERT INTO `person` (`name`, `secondName`, `surName`, `eMail`, `phoneNumber`) 
Values ('$name', '$secondName', '$surName', '$eMail', '$phoneNumber')";
    $result = $db->query($sql);
    if (!$result) {
        $db->errorInfo();
        exit();
    }
}

function getPersonId()
{
    global $db;
    global $db;
    $sql = "SELECT max(`id`) FROM `person`";
    $result = $db->query($sql);
    $id = (int) $result->fetchColumn();
    return $id;
}
function createUser($login, $pass)
{
    global $db;
    $person = getPersonId();
    echo $person;
    $sql = "INSERT INTO `users` (`login`, `password`, `person`) 
values ('$login','$pass','$person')";
    $result = $db->query($sql);
    if (!$result) {
        $db->errorInfo();
        exit();
    }
}

function checkUser($login, $pass)
{
    global $db;
    $sql = "SELECT * FROM `users` where `login` = '$login' and `password` = '$pass'";
    $result = $db->query($sql);
    $user = $result->fetchObject();
    if ($user) {
        return $user;
    } else {
        echo "Пользователь не найден";
    }
}
function getNameUser($login)
{
    global $db;
    $sql = "SELECT * from `person` where `id` = (select `person` from `users` where `login`='$login')";
    $result = $db->query($sql);
    return $result->fetchObject()->name;
}

function getUserGroup($id)
{
    global $db;
    $sql = "SELECT `permissionsLevel` from `usergroups` where `id` = (
        select `group_id` from `users` where `id`='$id'
    )";
    $result = $db->query($sql);
    if (!$result) {
        $db->errorInfo();
        exit();
    }
    return $result->fetchObject()->group;
}