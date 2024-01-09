<?php
session_start();
$_SESSION['plussto'] = (int)$_SESSION['plussto'] + 100;
header("Location: /task_14.php");