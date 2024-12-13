<?php

    include("../database.php");

    $pays = $_POST["nom"];
    $langue = $_POST["langue"];
    $population = $_POST["population"];
    $id=$_POST["pays_id"];

    $sql= " UPDATE pays
    SET nom = '$pays'
    WHERE pays_id='$id';";

    $sql2= " UPDATE pays
    SET langue = '$langue'
    WHERE pays_id='$id';";

    $sql3= " UPDATE pays
    SET population = '$population'
    WHERE pays_id='$id';";

    mysqli_query($conn,$sql);
    mysqli_query($conn,$sql2);   
    mysqli_query($conn,$sql3);

    header("Location: ../index.php");