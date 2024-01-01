<?php

require_once('login.php');

$emailverify = $_POST['emailverify'];

$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=DiplomDB;", "root", "");

$sql = "SELECT * FROM registerUser;

$statement = $pdo->prepare($sql);

$statement->execute(['emailverify'=>$emailverify]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

$_SESSION['user'] = $user;
