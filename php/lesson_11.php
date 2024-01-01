<?php
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=task10;", "root", "");

$sql = "SELECT * FROM my_table WHERE text=:text";

$statement = $pdo->prepare($sql);

$statement->execute(['text' => $text ]);

$task = $statement -> fetch(PDO::FETCH_ASSOC);

if(!empty($task)) {
     $message = "Введенная запись уже существует в таблице.";
     $_SESSION['danger'] = $message;

    header("Location: /task_11.php");
    exit;
}

$sql = "INSERT INTO  my_table (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

$message = "Введенная запись уже существует в таблице.";
$_SESSION['success'] = $message;


header("Location: /task_11.php");