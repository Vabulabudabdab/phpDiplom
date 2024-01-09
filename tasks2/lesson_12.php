<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=bddd;", "root", "");

$sql = "SELECT * FROM qwerty WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($user)) {
    $_SESSION['error'] = "Пользователь с таким email уже существует";
    header("Location: /task_12.php");
    exit;
}
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO qwerty (email,password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement-> execute(['email' => $email, 'password' => $hashed_password]);
header("Location: /task_12.php");