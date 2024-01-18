<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=dbForCourse;", "root", "");

$sql = "SELECT * FROM registerTable WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($user)) {
    $_SESSION['error'] = "Пользователь с таким email уже существует";
    header("Location: /task_12.php");
    exit;
}
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO registerTable (email,password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement-> execute(['email' => $email, 'password' => $hashed_password]);