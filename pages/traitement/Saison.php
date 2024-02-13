<?php
    require('../../inc/Function.php');

    $taille = getparcelle();
    if (count($taille) == 0) {
        $id = 1; 
    } else {
        $id = count($taille) + 1;
    }
    setregeneration($id,$regeneration);
    
    header('location:../template.php?page=saison');
?>