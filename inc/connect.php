<?php
    /*function dbconnect()
    {
        static $connect = null;
        if ($connect === null) {
            $serveur = "172.70.7.134";
            $utilisateur = "ETU002820";
            $motDePasse = "ujPbzwu7vhrW";
            $baseDeDonnees = "db_desp3_ETU002820";
    
            try {
                $connect = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasse);
                $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "La connexion a échoué : " . $e->getMessage();
            }
        }
        return $connect;
    }*/

    function dbconnect()
{
    static $connect = null;
    if ($connect === null) {
        $connect = mysqli_connect('172.70.2.135','ETU002820','ujPbzwu7vhrW','db_desp3_ETU002820');
    }
    return $connect;
}
?>