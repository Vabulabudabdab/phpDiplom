<?php
include __DIR__.'/userDB.php';

session_start();

$id = $_POST['id'];

$email = $_POST['email'];

$password = $_POST['password'];

$newPass = $_POST['newPass'];

if(isset($_GET['id'])) {
    $stmt = $db->prepare("SELECT * FROM addUser WHERE email = ?");
    $stmt->execute([$_POST['email']]);
    $em = $stmt->fetch();

    $stmt = $db->prepare("SELECT * FROM registerUser WHERE emailverify = :emailverify");

    $stmt -> execute(['emailverify' => $email]);

    $checkMail = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!empty($checkMail)) {
        header("Location:/users.php");
        exit;
    }

    $stmt = $db->prepare("SELECT * FROM addUser WHERE password = ?");
    $stmt->execute([$_POST['password']]);
    $work = $stmt->fetch();


    if($_POST['password'] == $newPass) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $db->prepare("UPDATE addUser SET email = :email, password = :password WHERE id = :id");
        $stmt->execute(['id'=> $id,'email' => $email,'password' => $hashed_password]);
   
        $stmt = $db->prepare("UPDATE registerUser SET emailverify = :emailverify, password = :password WHERE id = :id");
        $stmt->execute(['id'=> $id,'emailverify' => $email,'password' => $hashed_password]);
    }

    header("Location:/users.php");

}

$_SESSION['name'] = $email;

header("Location:/users.php");