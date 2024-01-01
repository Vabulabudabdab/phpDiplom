<?php

session_start();

$pdo = new PDO("mysql:host=localhost;dbname=DiplomDB;", "root", "");

$emailverify = $_POST['emailverify'];

$password = $_POST['password'];

$isAdmin = false;

$sql = "SELECT * FROM registerUser WHERE emailverify=:emailverify";

$statement = $pdo->prepare($sql);

$statement->execute(['emailverify'=>$emailverify]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

if (empty($user)) {
    $_SESSION['error'] = "Зарегестрируйтесь";
    header("Location: /page_login.php");
    exit;
}

if (isset($_SESSION['error'])) {
    session_unset();
}

$stmt = $pdo->prepare("SELECT * FROM registerUser WHERE password = password");

$stmt->execute();

$userCheck = $stmt->fetch();

$_SESSION ['name']= $emailverify;
$_SESSION ['password'] = $password;