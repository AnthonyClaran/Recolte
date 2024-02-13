<?php
    require('../../inc/Function.php');
    $taille = getparcelle();
    if (count($taille) == 0) {
        $id = 1; 
    } else {
        $id = count($taille) + 1;
    }

    $num = $_GET['num'];
    $surface =$_GET['surface'];
    $idvar = $_GET['variete'];

    setparcelle($id,$num,$surface,$idvar);

    header('location:../template.php?page=saison');
?>