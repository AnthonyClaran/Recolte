<?php
    require('../../inc/Function.php');
    $taille = getcategorie();
    if (count($taille) == 0) {
        $id = 1; 
    } else {
        $id = count($taille) + 1;
    }
    $nom = $_GET['nom'];

    setcategorie($id,$nom);

    header('location:../template.php?page=depense');
?>