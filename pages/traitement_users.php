<?php
    require('../inc/Function.php');
    $email=$_GET['email'];
    $mdp=$_GET['mdp'];
    $check=checkuser($email,$mdp);
    if ($check==1)
    {
        header('location:client.php?page=saisie');
    }
    else {
        //header('location:users.php');
    }
?>