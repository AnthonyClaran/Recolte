<?php
    require('../../inc/Function.php');
    $taille = getsalaire();
    if (count($taille) == 0) {
        $id = 1; 
    } else {
        $id = count($taille) + 1;
    }

    $idc = $_GET['categorie'];
    $montant = $_GET['montant'];
    $date = $_GET['date'];

    setdepense($id,$idc,$montant,$date);

    header('location:../client.php?page=front-depense');
?>