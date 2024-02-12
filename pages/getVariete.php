<?php
    require('../inc/Function.php');
    header("Content-Type: application/json");

    $taille = getdu_the();
    if (count($taille) == 0) {
        $id = 1; 
    } else {
        $id = count($taille) + 1;
    }

    $nom = $_GET['nom'];
    $occupation = $_GET['occupation'];
    $rendement = $_GET['rendement'];

    setdu_the($id, $nom, $occupation, $rendement);
    $retour = getdu_the();

    echo json_encode($retour);
?>
