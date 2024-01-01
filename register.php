<?php
session_start();

$emailverify = $_POST['emailverify'];

$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=DiplomDB;", "root", "");


$sql = "SELECT * FROM registerUser WHERE emailverify=:emailverify";

$statement = $pdo->prepare($sql);

$statement->execute(['emailverify'=>$emailverify]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($user)) {
    $_SESSION['error'] = "Пользователь с таким email уже существует";
    header("Location: /page_register.php");
    exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO registerUser (emailverify,password) VALUES (:emailverify, :password)";

$statement = $pdo->prepare($sql);

$statement-> execute(['emailverify' => $emailverify, 'password' => $hashed_password]);

header("Location: /page_login.php");