<?php
session_start();

$_SESSION['user'] = "user";
header("Location: /task_16.php");


