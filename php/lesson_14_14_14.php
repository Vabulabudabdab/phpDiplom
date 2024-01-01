<?php

session_start();

$_SESSION['counter'] = (int)$_SESSION['counter'] += 10;

header("Location: /task_14.php");