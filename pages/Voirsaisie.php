<?php
    require('../inc/Function.php');
    header("Content-Type: application/json");

    $taille = getdu_the();
    if (count($taille) == 0) {
        $idH = 1; 
    } else {
        $idH = count($taille) + 1;
    }

    $dateD = $_POST['dateD'];
    $dateF = $_POST['dateF'];
    $id = $_POST['cueilleur'];
    $num = $_POST['Parcelle'];
    $poid = $_POST['poid'];

    sethisto_cuiellet ($idH,$id,$num,$poid,$dateD,$dateF);

    $retour = array("success" => true); 

    echo json_encode($retour);
?>
