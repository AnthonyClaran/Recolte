<?php
    include("connect.php");
    
    function checkAdmine($pseudo,$mdp)
    {
        $sql="SELECT * FROM admine Where %s,%s";
        $sql=sprintf($sql,$pseudo,$mdp);
        $resultat=mysqli_query(dbconnect(),$sql);
        $nombre=mysqli_num_rows($resultat);
        if ($nombre==1) {
            while($donne=mysqli_fetch_assoc($resultat)){
                $id=$donne['id_admin'];
            }
            return $id;
        }
        else {
            return $nombre;
        }
    }
        
    function setadmine($id,$Email,$mdp,$nom,$date)
    {
        $sql="INSERT INTO admine VALUES (%d,%d,%s,%s,%d)";
        $sql=sprintf($sql,$id,$Email,$mdp,$nom,$date);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }
?>