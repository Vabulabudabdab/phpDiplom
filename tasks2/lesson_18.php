<?php

include __DIR__.'./db.php';

if(!empty($_FILES['file'])) {
    $file = $_FILES['file'];
    $name = $file['name'];
    $pathFile = __DIR__.'/img/'.$name;

    if(!move_uploaded_file($file['tmp_name'], $pathFile)) {
        echo 'Ошибка загрузки файла';
    }

    $data = $db->prepare("INSERT INTO `img`(`imgg`) VALUES (?)");
    $data -> execute([$name]);

}
header("Location: /task_18.php");