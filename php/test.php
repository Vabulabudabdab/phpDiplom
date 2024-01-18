<?php
$email = $_POST['email'];

$pdo = new PDO("mysql:host=localhost;dbname=task10;", "root", "");
$sql = "INSERT INTO register (email) VALUES (:email)";
$statement = $pdo->prepare($sql);
$statement -> execute(['email' => $email]);

header("Location: /task_12.php");
