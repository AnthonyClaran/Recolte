<?php
    require('../../inc/Function.php');
    $taille = getsalaire();
    if (count($taille) == 0) {
        $id = 1; 
    } else {
        $id = count($taille) + 1;
    }

    $num = $_GET['num'];
    $surface =$_GET['surface'];
    $id = $_GET['variete'];

    setparcelle($num,$surface,$id);

    header('location:../template.php?page=parcelle');
?>