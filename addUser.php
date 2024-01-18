<?php
session_start();
//posts query

$pdo = new PDO("mysql:host=localhost;dbname=DiplomDB;", "root", "");

$name = $_POST['name'];

$workplace = $_POST['workplace'];

$telephone = $_POST['telephone'];

$adress = $_POST['adress'];

$email = $_POST['email'];

$password = $_POST['pass'];

$status = $_POST['status'];

$image = $_POST['image'];

$vk = $_POST['vk'];

$telegram = $_POST['telegram'];

$insta = $_POST['insta'];

$sql = "SELECT * FROM addUsersTb WHERE name=:name";

$statement = $pdo->prepare($sql);
    
$statement->execute(['name'=>$name]);

$user = $statement->fetchAll(PDO::FETCH_ASSOC);
 
$sql = "INSERT INTO addUsersTb (name, workplace, telephone, adress, email, password, status, image, vk, telegram, insta)
 VALUES (:name, :workplace, :telephone, :adress, :email, :password, :status, :image, :vk, :telegram, :insta )";

$statement = $pdo->prepare($sql);

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("SELECT * FROM addUsersTb WHERE password = password");

$sql = "INSERT INTO (password) VALUES (:password)";

$_SESSION['users'] = $user;

if (!empty($user)) {
    $_SESSION['error'] = "Пользователь с таким nick уже существует";
    exit;
}

$statement -> execute(['name' => $name, 'workplace' => $workplace, 'telephone' => $telephone, 
'adress' => $adress, 'email' => $email, 'password' => $hashed_password, 'status' => $status,
'img' => $image, 'vk' => $vk, 'telegram' => $telegram, 'insta' => $insta]);
    
$sql = "SELECT * FROM registerUser";

$statement = $pdo->prepare($sql);

$statement->execute();

$check = $statement->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM addUsersTb WHERE email=:email";

$statement = $pdo->prepare($sql);
    
$statement->execute(['email'=>$email]);

$userMail = $statement->fetchAll(PDO::FETCH_ASSOC);
 
if(!empty($userMail)) {
    exit;
}

if ($check['emailverify'] == $user) {
    $_SESSION['error'] = "Пользователь с таким email уже существует";
    exit;
    header("Location:/ toNull");
}


