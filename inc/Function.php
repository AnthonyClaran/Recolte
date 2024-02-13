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
        $sql="SELECT * FROM user Where Email='%s' AND Motdepasse='%s'";
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

    function setpartielle($id,$num,$surface,$idvar)
    {
        $sql="INSERT INTO partielle VALUES (%d,%d,%d,%d)";
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

    function setparcelle($idp,$num,$surface,$id)
    {
        $sql="INSERT INTO parcelle VALUES (%d,%d,%d,%d)";
        $sql=sprintf($sql,$idp,$num,$surface,$id);
        
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

    function getparcelle()
    {
        $sql="SELECT * FROM parcelle";
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

    function gethisto_cuiellet ()
    {
        $sql="SELECT * FROM histo_cuiellet ";
        $resultat=mysqli_query(dbconnect(),$sql);
        return getContent($resultat);
    }

    function sethisto_cuiellet ($idH,$id,$num,$poid,$dateD,$dateF)
    {
        $sql="INSERT INTO histo_cuiellet VALUES (%d,%d,%d,'%s','%s','%s')";
        $sql=sprintf($sql,$idH,$id,$num,$poid,$dateD,$dateF);
        
        $resultat=mysqli_query(dbconnect(),$sql);

    }

    function Deletehisto_cuielletById($id)
    {
        $sql="Delete FROM histo_cuiellet WHERE id_histo=%d";
        $sql=sprintf($sql,$id);
        mysqli_query(dbconnect(),$sql);
    }

    function DeleteregenerationById($id)
    {
        $sql="Delete FROM regeneration WHERE id=%d";
        $sql=sprintf($sql,$id);
        mysqli_query(dbconnect(),$sql);
    }

    function DeletresulatById($id)
    {
        $sql="Delete FROM resulat WHERE Id_resultat=%d";
        $sql=sprintf($sql,$id);
        mysqli_query(dbconnect(),$sql);
    }

    function DeletparcelleById($id)
    {
        $sql="Delete FROM parcelle WHERE id_parcelle=%d";
        $sql=sprintf($sql,$id);
        mysqli_query(dbconnect(),$sql);
    }

    function DeletsalaireById($id)
    {
        $sql="Delete FROM salaire WHERE id_salaire=%d";
        $sql=sprintf($sql,$id);
        mysqli_query(dbconnect(),$sql);
    }

    function DeletdepenseById($id)
    {
        $sql="Delete FROM depense WHERE id_depense=%d";
        $sql=sprintf($sql,$id);
        mysqli_query(dbconnect(),$sql);
    }

    function DeletcategorieById($id)
    {
        $sql="Delete FROM categorie WHERE id_categorie=%d";
        $sql=sprintf($sql,$id);
        mysqli_query(dbconnect(),$sql);
    }

    function DeletcueilleursById($id)
    {
        $sql="Delete FROM cueilleurs WHERE id_cueilleurs=%d";
        $sql=sprintf($sql,$id);
        mysqli_query(dbconnect(),$sql);
    }

    function Deletdu_theById($id)
    {
        $sql="Delete FROM du_the WHERE id_variete_the=%d";
        $sql=sprintf($sql,$id);
        mysqli_query(dbconnect(),$sql);
    }

    function DeletuserById($id)
    {
        $sql="Delete FROM user WHERE id_user=%d";
        $sql=sprintf($sql,$id);
        mysqli_query(dbconnect(),$sql);
    }

    function DeletadmineById($id)
    {
        $sql="Delete FROM admine WHERE id_admin=%d";
        $sql=sprintf($sql,$id);
        mysqli_query(dbconnect(),$sql);
    }
?>