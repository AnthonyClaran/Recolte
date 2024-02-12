<?php
    require('../inc/Function.php');
    $email=$_GET['email'];
    $mdp=$_GET['mdp'];
    $check=checkAdmine($email,$mdp);
    if ($check==1)
    {
        header('location:template.php');
    }
    else {
        //header('location:index.php');
    }
?>