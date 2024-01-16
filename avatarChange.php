<?php
include __DIR__.'/userDB.php';

$id = $_GET['id'];

$img = $_GET['file'];

$imgName = $img;

$pathFile = __DIR__.'./img/'.$imgName;


if(isset($_GET['id'])) {

    $stmt = $db->prepare("SELECT * FROM addUser WHERE img = ?");
    $stmt->execute([$_GET['file']]);
    $nm = $stmt->fetch();

    $stmt = $db->prepare("UPDATE addUser SET img = :img WHERE id = :id");
    $stmt->execute(['id' => $id, 'img' => $imgName]);

    

    var_dump($_GET['file']);
    var_dump($imgName);
    var_dump($img);

    header("Location:/users.php");
}

