<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=imangermieux;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        //Sélectionne toutes les valeurs dans la table consommer et les affiche
        $sql = "SELECT food.FOOD_LABEL,food.TYPE_ FROM food  ORDER BY food.FOOD_LABEL ASC";
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