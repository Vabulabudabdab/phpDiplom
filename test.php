<?php

include __DIR__.'./dbTEST.php';

if(!empty($_FILES['file'])) {
    $file = $_FILES['file'];
    $name = $file['name'];
    $pathFile = __DIR__.'./img/'.$name;

    if(!move_uploaded_file($file['tmp_name'], $pathFile)) {
        echo 'Ошибка загрузки файла';
    }

    $data = $db->prepare("INSERT INTO `tableImg`(`image`) VALUES (?)");
    $data -> execute([$name]);

}
?>
