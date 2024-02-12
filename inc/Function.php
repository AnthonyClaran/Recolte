<?php
    include("connect.php");
    
    function getContent($request)
	{
		$i=0;
		$content=array();
		while ($donnees=mysqli_fetch_assoc($request))
		{
			$content[$i]=$donnees;
			$i++;
		}
		mysqli_free_result($request);
		return $content;
	}
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

    function checkuser($pseudo,$mdp)
    {
        $sql="SELECT * FROM user Where %s,%s";
        $sql=sprintf($sql,$pseudo,$mdp);
        $resultat=mysqli_query(dbconnect(),$sql);
        $nombre=mysqli_num_rows($resultat);
        if ($nombre==1) {
            while($donne=mysqli_fetch_assoc($resultat)){
                $id=$donne['id_user'];
            }
            return $id;
        }
        else {
            return $nombre;
        }
    }
        
    function setuser($id,$Email,$mdp,$nom,$date)
    {
        $sql="INSERT INTO user VALUES (%d,%d,%s,%s,%d)";
        $sql=sprintf($sql,$id,$Email,$mdp,$nom,$date);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function setdu_the($id,$nom,$occup,$rende)
    {
        $sql="INSERT INTO du_the VALUES (%d,%s,%d,%d)";
        $sql=sprintf($sql,$id,$nom,$occup,$rende);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function setpartielle($num,$surface,$idvar)
    {
        $sql="INSERT INTO partielle VALUES (%d,%d,%d)";
        $sql=sprintf($sql,$id,$nom,$occup,$rende);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function getPartielle()
    {
        $sql="SELECT * FROM partielle";
        $resultat=mysqli_query(dbconnect(),$sql);
        return getContent($resultat);
    }

    function getdu_the()
    {
        $sql="SELECT * FROM du_the";
        $resultat=mysqli_query(dbconnect(),$sql);
        return getContent($resultat);
    }
?>