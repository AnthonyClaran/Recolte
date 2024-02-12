<?php
    require('../../inc/Function.php');
    $taille = getcueilleurs();
    if (count($taille) == 0) {
        $id = 1; 
    } else {
        $id = count($taille) + 1;
    }

    $nom = $_GET['nom'];
    $genre =$_GET['genre'];
    $date = $_GET['dtn'];

    setcueilleurs($id,$nom,$genre,$date);

    header('location:../template.php?page=cueilleur');
?>