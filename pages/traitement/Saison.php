<?php
    require('../../inc/Function.php');
    Deleteregeneration();
    if (isset($_GET['Janvier'])) {
        insertCheckBox($_GET['Janvier']);
    }
    if (isset($_GET['Fevrier'])) {
        insertCheckBox($_GET['Fevrier']);
    }
    if (isset($_GET['Mars'])) {
        insertCheckBox($_GET['Mars']);
    }
    if (isset($_GET['Avril'])) {
        insertCheckBox($_GET['Avril']);
    }
    if (isset($_GET['Mai'])) {
        insertCheckBox($_GET['Mai']);
    }
    if (isset($_GET['Juin'])) {
        insertCheckBox($_GET['Juin']);
    }
    if (isset($_GET['Juillet'])) {
        insertCheckBox($_GET['Juillet']);
    }
    if (isset($_GET['Aout'])) {
        insertCheckBox($_GET['Aout']);
    }
    if (isset($_GET['Septembre'])) {
        insertCheckBox($_GET['Septembre']);
    }
    if (isset($_GET['Octobre'])) {
        insertCheckBox($_GET['Octobre']);
    }
    if (isset($_GET['Novembre'])) {
        insertCheckBox($_GET['Novembre']);
    }
    if (isset($_GET['Decembre'])) {
        insertCheckBox($_GET['Decembre']);
    }
    header('location:../template.php?page=saison');
?>