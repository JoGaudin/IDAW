<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=favreau_gaudin;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        if(isset($_POST['login'] )){
            $login = $_POST['login'];
        }

        $sql = "SELECT LIBELLE_ALIMENT, DATE FROM consomme INNER JOIN aliment ON consomme.ID_ALIMENT = aliment.ID_ALIMENT INNER JOIN profil ON consomme.ID_PROFILE = profil.ID_PROFILE WHERE LOGIN = 'johan.gaudin@etu.imt-lille-douai.fr' ORDER BY consomme.DATE ASC;";
        
    
        $result = $conn->query($sql);
        $rows = $result->fetchAll();
    
        if (!$rows)
            $rows['status'] = 'Fail';
    
        echo json_encode($rows);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }


   


?>