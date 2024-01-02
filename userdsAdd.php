<?php 
session_start();
//posts
$name = $_POST['name'];

$workplace = $_POST['workplace'];

$telephone = $_POST['telephone'];

$adress = $_POST['adress'];

$email = $_POST['email'];

$password = $_POST['password'];

$status = $_POST['status'];

$img = $_POST['img'];

$vk = $_POST['vk'];

$telegram = $_POST['telegram'];

$instagram = $_POST['instagram'];


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

echo $checkMail;

print_r($checkMail);

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

$sql = "INSERT INTO addUser (name, workplace, telephone, adress, email, password, status, img, vk, telegram, instagram)
 VALUES (:name, :workplace, :telephone, :adress, :email, :password, :status, :img, :vk, :telegram, :instagram)";

$statement = $pdo->prepare($sql);

$statement->execute(['name' => $name, 'workplace' => $workplace, 'telephone' => $telephone, 'adress' => $adress, 'email' => $email, 'password' => $hashed_password, 'status' => $status, 'img' => $img, 'vk' => $vk, 'telegram' => $telegram, 'instagram' => $instagram]);


header("Location: /users.php");
?>