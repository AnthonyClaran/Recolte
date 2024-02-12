<?php
    require('../../inc/Function.php');

    $num = $_GET['num'];
    $surface =$_GET['surface'];
    $id = $_GET['variete'];

    setparcelle($num,$surface,$id);

    header('location:../template.php?page=parcelle');
?>