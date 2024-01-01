<?php
session_start();

$user = $_POST['user'];

$pdo = new PDO("mysql:host=localhost; dbname=task10", "root", "");

$sql = "SELECT * FROM userTable WHERE user=:user";
$statement = $pdo->prepare($sql);
$statement->execute(['user'=>$user]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

header("Location: /task_16.php");


$sql = "INSERT INTO userTable (user) VALUES (:user)";
$statement = $pdo -> prepare($sql);
$statement->execute(['user' => $user]);

