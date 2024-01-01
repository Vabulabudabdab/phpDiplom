<?php

require_once('db_One.php');

$emailverify = $_POST['emailverify'];

$password = $_POST['password'];

$sql = "INSERT INTO registerUser (emailverify,password) VALUES ('$emailverify', '$password')";

$conn -> query($sql);

