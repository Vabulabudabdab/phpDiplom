<?php
include __DIR__.'./db_19.php';
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
for ($i=0; $i < count($_FILES['image']['name']); $i++) {
    upload_file($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
}
function upload_file($filename, $tmp_name) {
    $result = pathinfo($filename);
    $pathname = uniqid() . "." .$result['extension'];
    move_uploaded_file($tmp_name, 'uploads/' . $filename);
}

header("Location: /task_19.php");
