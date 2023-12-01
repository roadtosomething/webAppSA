<?php

include("functions.php");
function uploadImage() {
    
    $target_dir = "../tmp/img/"; // ваша целевая директория
    
    $randomNumber = rand(10000, 99999); // генерируем рандомное число

    $target_file_name = $randomNumber . basename($_FILES["image"]["name"]); // целевое имя файла

    $target_file = $target_dir . $target_file_name; // полный путь к файлу
    
    // расширение файла
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Проверяем, является ли файл изображением
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check === false) {
            echo "Файл не является изображением.";
            return false;
        }
    }

    // Устанавливаем допустимый размер файла 
    if ($_FILES["image"]["size"] > 10000000) {
        echo "Извините, ваш файл слишком велик.";
        return false;
    }

    // Разрешаем определённые форматы файла
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Извините, разрешены только JPG, JPEG, PNG файлы.";
        return false;
    }
    
    // Пытаемся загрузить файл
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        return $target_file_name;
    } else {
        echo "Произошла ошибка при загрузке файла.";
    }

}
?>

