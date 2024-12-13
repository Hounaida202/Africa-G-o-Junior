<?php
include("../database.php"); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $langue = $_POST['langue'];
    $population = $_POST['population'];

    $sql = "INSERT INTO pays (nom, langue, population) 
    VALUES ('$nom', '$langue', $population)";
    if (mysqli_query($conn, $sql)) {
        header("./src/index.php");
        exit;
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}
?>

