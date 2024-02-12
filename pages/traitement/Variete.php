<?php
    require('../../inc/Function.php');
    $taille = getdu_the();
    if (count($taille) == 0) {
        $id = 1; 
    } else {
        $id = count($taille) + 1;
    }

    $nom = $_GET['nom'];
    $occupation =$_GET['occupation'];
    $rendement = $_GET['rendement'];

    setdu_the($id, $nom, $occupation, $rendement);

    header('location:../template.php?page=variete');
?>