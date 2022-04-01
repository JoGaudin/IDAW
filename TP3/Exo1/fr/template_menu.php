<?php
    function renderMenuToHTML($currentPageId, $langdef) {
    // un tableau qui definit la structure du site
    $mymenu = array(
        // idPage titre
        'accueil' => array( 'Informations générales' ),
        'Expérience' => array( 'Expériences Professionnelles' ),
        'Associatif' => array('Expériences Associatives'),
        'Hobbies' => array('Hobbies'),
        'infos-technique' => array('Infos technique'),
        'contact' => array('Me Contacter'),
        'login' => array('TP3_login'),
        'connected' => array('TP3_connected'),
        'testConnexion' => array('Base de donnée')

    );

    foreach($mymenu as $pageId => $pageParameters){
        if($pageId == $currentPageId){
            echo  '<h1 id="titre"><a href="index.php">'.$pageParameters[0].'</a></h1>'; 
        }
    }

    foreach($mymenu as $pageId => $pageParameters){
        if($pageId == $currentPageId){
            echo  '<title>'.$pageParameters[0].'</title>'; 
        }
    }

    echo "<nav>";
    echo "<ul>";

    foreach($mymenu as $pageId => $pageParameters){
        echo "<li><a ";
        if($pageId == $currentPageId){
            echo  'id="currentpage"'; 
        }
        echo 'href="index.php?page='.$pageId.'&lang='.$langdef.'">'.$pageParameters[0];
        
        echo "</a></li>";
    }
    
    echo "</ul>";
    echo "</nav>";


    session_start();
    if(isset($_SESSION['nom'])){
        echo "Session name : ".$_SESSION['nom'];
    }
     
            


    }
?>