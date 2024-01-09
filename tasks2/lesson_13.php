<?php session_start();
$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=bddd;", "root", "");

$sql = "SELECT * FROM zxc WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($text)) {
    $_SESSION['text'] = "ya propodu esli obnovit stranicu";
    header("Location: /task_13.php");
    exit;
}
$sql = "INSERT INTO zxc (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement -> execute(['text' => $text]);


header("Location: /task_13.php");
