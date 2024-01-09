<?php

$name = $_POST['name'];

$workplace = $_POST['workplace'];

$telephone = $_POST['telephone'];

$adress = $_POST['adress'];


$pdo = new PDO("mysql:host=localhost; dbname=DiplomDB;", "root", "");

$sql = "SELECT * FROM addUser WHERE name = :name";

$statement = $pdo->prepare($sql);

$statement->execute(['name' => $name]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

echo $name;