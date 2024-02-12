<?php
    include("connect.php");
    
    function checkUtilisateur($pseudo,$mdp)
    {
        $sql="SELECT * FROM achat ";
        $sql=sprintf($sql,$pseudo,$mdp);
        $resultat=mysqli_query(dbconnect(),$sql);
        $nombre=mysqli_num_rows($resultat);
        if ($nombre==1) {
            while($donne=mysqli_fetch_assoc($resultat)){
                $id=$donne['id'];
            }
            return $id;
        }
        else {
            return $nombre;
        }
    }
        
    function setAchat($date,$id,$quant,$prix)
    {
        $sql="INSERT INTO DemandeDepot VALUES (%d,%d,%d,%d)";
        $sql=sprintf($sql,$date,$id,$quant,$prix);
        $resultat=mysqli_query(dbconnect(),$sql);
    }
?>