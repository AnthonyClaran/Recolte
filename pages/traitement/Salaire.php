<?php
    require('../../inc/Function.php');
    $taille = getsalaire();
    if (count($taille) == 0) {
        $id = 1; 
    } else {
        $id = count($taille) + 1;
    }

    $montant = $_GET['salaire'];

    setsalaire($id,$montant);

    header('location:../template.php?page=salaire');
?>