<?php
header("Location: /users.php");
session_start();

include 'users.php';


session_destroy();



