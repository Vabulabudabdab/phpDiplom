<?php
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'bddd');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$db = new \PDO(DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
$data = $db->prepare("SELECT * FROM `img`");
$data->execute();
$result = $data->fetchAll();

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