<?php
    include('connection.php');

    function all_objet()
    {
        $sql ="SELECT * FROM v_objet_categorie";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($all_departement = mysqli_fetch_assoc($requet))
        {
            $result[] = $all_departement;
        }
        mysqli_free_result($requet);
        return $result;   
    }


    function id_membre_connecte($nom)
    {
        $sql2 ="SELECT * FROM projet_finalS2_membre WHERE nom = '%s'";
        $sql2 = sprintf($sql2,$nom);
        $requet2 = mysqli_query(dbconnect(),$sql2);
        $resultat = mysqli_fetch_assoc($requet2);
        $idmembre = $resultat['id_membre'];
        return $idmembre;
    }

    function pdp_connecte($nom)
    {
        $sql2 ="SELECT * FROM projet_finalS2_membre WHERE nom = '%s'";
        $sql2 = sprintf($sql2,$nom);
        $requet2 = mysqli_query(dbconnect(),$sql2);
        $resultat = mysqli_fetch_assoc($requet2);
        $image_profil = $resultat['image_profil'];
        return $image_profil;
    }
?>