<?php
    require('../inc/Function.php');
    header("Content-Type: application/json");
    $taille = gethisto_cuiellet ();
    $j=0;
    if (count($taille) == 0) {
        $idH = 1; 
    } else {
        $idH = count($taille) + 1;
    }

    if(isset($_POST['cueilleur']) && $j==1) {
        $dateD = $_POST['dateD'];
        $dateF = $_POST['dateF'];
        $id = $_POST['cueilleur'];
        $num = $_POST['Parcelle'];
        $poid = $_POST['poid'];
    
        sethisto_cuiellet ($idH,$id,$num,$poid,$dateD,$dateF);

        $response = array(
            'success' => "true",
            'message' => 'success'
        );

        echo json_encode($response);
    } else {
        $response = array(
            'success' => "false",
            'message' => 'Données manquantes'
        );

        echo json_encode($response);
    }

?>
