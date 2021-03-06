<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=favreau_gaudin;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        //Sélectionne toutes les valeurs dans la table consommer et les affiche
        $sql = "SELECT LIBELLE_ALIMENT, LIBELLE_TYPE FROM aliment INNER JOIN type ON aliment.ID_TYPE = type.ID_TYPE ORDER BY aliment.LIBELLE_ALIMENT ASC";
        // $res['req']=$sql;
    
        $result = $conn->query($sql);
        $rows = $result->fetchAll();
    
        if (!$rows)
            $rows['status'] = 'Fail';
    
        echo json_encode($rows);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

?>