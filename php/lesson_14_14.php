<?php

session_start();

$_SESSION['counter'] = (int)$_SESSION['counter'] = 0;

header("Location: /task_14.php");