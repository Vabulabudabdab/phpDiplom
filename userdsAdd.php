<?php
session_start();
error_reporting(E_ALL);
//posts

$name = $_POST['name'];

$workplace = $_POST['workplace'];

$telephone = $_POST['telephone'];

$adress = $_POST['adress'];

$email = $_POST['email'];

$password = $_POST['password'];

$status = $_POST['status'];

$img = $_FILES['file'];

$vk = $_POST['vk'];

$instagram = $_POST['instagram'];

$telegram = $_POST['telegram'];

$pdo = new PDO("mysql:host=localhost; dbname=DiplomDB;", "root", "");


//check name
$sql = "SELECT * FROM addUser WHERE name = :name";

$statement = $pdo->prepare($sql);

$statement->execute(['name' => $name]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($user)) {
    exit;
}
//test

$sql = "SELECT * FROM registerUser WHERE emailverify = :emailverify";

$stmt = $pdo->prepare($sql);

$stmt -> execute(['emailverify' => $email]);

$checkMail = $stmt->fetch(PDO::FETCH_ASSOC);


if (!empty($checkMail)) {
    exit;
}

//check email
$sql = "SELECT * FROM addUser WHERE email = :email";

$statement = $pdo->prepare($sql);

$statement->execute(['email' => $email]);

$useremail = $statement->fetchAll(PDO::FETCH_ASSOC);


if (!empty($useremail)) {
    exit;
}

if ($checkMail == $email) {
    exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO addUser (name, workplace, telephone, adress, email, password, status, img, vk, instagram, telegram)
 VALUES (:name, :workplace, :telephone, :adress, :email, :password, :status, :img, :vk, :instagram, :telegram)";

$statement = $pdo->prepare($sql);

$statement->execute(['name' => $name, 'workplace' => $workplace, 'telephone' => $telephone, 'adress' => $adress, 'email' => $email,
 'password' => $hashed_password, 'status' => $status, 'img' => $img, 'vk' => $vk,  'instagram' => $instagram, 'telegram' => $telegram,]);

//add to main

 $sql = "INSERT INTO registerUser (emailverify,password) VALUES (:emailverify, :password)";

 $statement = $pdo->prepare($sql);

 $statement-> execute(['emailverify' => $email, 'password' => $hashed_password]);

var_dump($_FILES['file']);

header("Location:/users.php");
?>