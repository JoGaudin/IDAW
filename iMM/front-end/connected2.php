<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=favreau_gaudin;charset=utf8", "root", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        //Sélectionne toutes les valeurs dans la table consommer et les affiche
        $sql = "SELECT NOM, PRENOM FROM PROFIL WHERE LOGIN = '$_POST[login]'";
        // $res['req']=$sql;
        
        $result = $conn->query($sql);
        $rows = $result->fetchAll();
        
        if (!$rows)
            $rows['status'] = 'Fail';
    
        // echo json_encode($rows);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    session_start();
    $_SESSION['LOGIN']=$rows[0];
    $_SESSION['PRENOM']=$rows[1];

    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='css/crud2.css' type='text/css' media='screen' title='default' charset='utf-8' />
        <title>Connected</title>
    </head>
    <body>";
    
    echo "<h1>Bienvenue sur l'application iMangerMieux".$rows[1]."!</h1>
    
    </body>
    </html>";
    require_once('template_menu.php');
?>