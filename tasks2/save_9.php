<?php
session_start();    
$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=bddd;", "root", "");

$sql = "SELECT * FROM sanek WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($task)) {
    $message = "Введеная  запись уже присутствует в таблице.";
    $_SESSION['danger'] = $message;
    header("Location: /task_11.php");
    exit;
}
$sql = "INSERT INTO sanek (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement -> execute(['text' => $text]);
$message = "Введенная запись уже существует в таблице.";
$_SESSION['success'] = $message;


header("Location: /task_11.php");
