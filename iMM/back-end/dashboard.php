<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=favreau_gaudin;charset=utf8", "root", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        // require_once(db_conn.php);
        $login = $_POST['login'];
        
        $sql = "SELECT LIBELLE_NUTRIMENT, SUM(RATIO) FROM constitution INNER JOIN nutriments ON constitution.ID_NUTRIMENT = nutriments.ID_NUTRIMENT INNER JOIN aliment ON constitution.ID_ALIMENT = aliment.ID_ALIMENT INNER JOIN consomme ON consomme.ID_ALIMENT = aliment.ID_ALIMENT INNER JOIN profil ON consomme.ID_PROFILE = profil.ID_PROFILE WHERE profil.LOGIN = '$login' GROUP BY profil.ID_PROFILE, nutriments.LIBELLE_NUTRIMENT";
        $result=$conn->query($sql);
        $rows = $result->fetchAll();
        echo json_encode($rows);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
     }
    
?>
