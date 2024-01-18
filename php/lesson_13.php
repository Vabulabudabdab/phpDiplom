<?php
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=task10;", "root", "");

$sql = "SELECT * FROM testText WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text'=>$text]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

header("Location: /task_13.php");


if (!empty($text)) {
    $_SESSION['text'] = "Обновите и я исчезну!";
    header("Location: /task_13.php");
    exit;
}

$sql = "INSERT INTO testText (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement -> execute(['text' => $text]);
