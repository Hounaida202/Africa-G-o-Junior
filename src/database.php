<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$db = "ville_pays"; 
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}