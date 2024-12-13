<?php
include("../database.php");

if (isset($_POST['delete'])) {
    $pays_id = $_POST['pays_id']; 
    
    $sqlDeleteVilles = "DELETE FROM ville WHERE pays_id = $pays_id";
    if (mysqli_query($conn, $sqlDeleteVilles)) {
    $sqlDeletePays = "DELETE FROM pays WHERE pays_id = $pays_id";
    if (mysqli_query($conn, $sqlDeletePays)) {
            header("Location: ../index.php"); 
            exit;
        } else {
            echo "Erreur " . mysqli_error($conn);
        }
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}
?>
