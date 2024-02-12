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
        $sql="SELECT * FROM admine Where Email='%s' AND Motdepasse='%s' ";
        $sql=sprintf($sql,$pseudo,$mdp);
        echo $sql;
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
        $sql="INSERT INTO admine VALUES (%d,%d,'%s','%s',%d)";
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
        $sql="INSERT INTO user VALUES (%d,%d,'%s','%s',%d)";
        $sql=sprintf($sql,$id,$Email,$mdp,$nom,$date);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function setdu_the($id,$nom,$occup,$rende)
    {
        $sql="INSERT INTO du_the VALUES (%d,'%s',%d,%d)";
        $sql=sprintf($sql,$id,$nom,$occup,$rende);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function setpartielle($num,$surface,$idvar)
    {
        $sql="INSERT INTO partielle VALUES (%d,%d,%d)";
        $sql=sprintf($sql,$id,$nom,$occup,$rende);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function setcueilleurs($id,$nom,$genre,$date)
    {
        $sql="INSERT INTO cueilleurs VALUES (%d,'%s','%s','%s')";
        $sql=sprintf($sql,$id,$nom,$genre,$date);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function setcategorie($id,$nom)
    {
        $sql="INSERT INTO categorie VALUES (%d,'%s')";
        $sql=sprintf($sql,$id,$nom);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function setdepense($id,$idc,$montant,$date)
    {
        $sql="INSERT INTO depense VALUES (%d,%d,'%s','%s')";
        $sql=sprintf($sql,$id,$idc,$montant,$date);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function setsalaire($id,$montant)
    {
        $sql="INSERT INTO salaire VALUES (%d,'%s')";
        $sql=sprintf($sql,$id,$montant);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function setparcelle($num,$surface,$id)
    {
        $sql="INSERT INTO parcelle VALUES (%d,%d,%d)";
        $sql=sprintf($sql,$num,$surface,$id);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function setresulat($poidt,$poidr,$cout)
    {
        $sql="INSERT INTO resulat VALUES (%d,%d,'%s')";
        $sql=sprintf($sql,$poidt,$poidr,$cout);
        
        $resultat=mysqli_query(dbconnect(),$sql);
    }

    function getdu_the()
    {
        $sql="SELECT * FROM du_the";
        $resultat=mysqli_query(dbconnect(),$sql);
        return getContent($resultat);
    }

    function getcueilleurs()
    {
        $sql="SELECT * FROM cueilleurs";
        $resultat=mysqli_query(dbconnect(),$sql);
        return getContent($resultat);
    }

    function getcategorie()
    {
        $sql="SELECT * FROM categorie";
        $resultat=mysqli_query(dbconnect(),$sql);
        return getContent($resultat);
    }

    function getdepense()
    {
        $sql="SELECT * FROM depense";
        $resultat=mysqli_query(dbconnect(),$sql);
        return getContent($resultat);
    }

    function getsalaire()
    {
        $sql="SELECT * FROM salaire";
        $resultat=mysqli_query(dbconnect(),$sql);
        return getContent($resultat);
    }

    function getresulat()
    {
        $sql="SELECT * FROM resulat";
        $resultat=mysqli_query(dbconnect(),$sql);
        return getContent($resultat);
    }
?>