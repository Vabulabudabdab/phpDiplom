<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DiplomDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ( !$conn ) {
    die("Connection fialed". mysqli_connect_error());
}
?>