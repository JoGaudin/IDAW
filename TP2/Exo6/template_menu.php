<?php
    function renderMenuToHTML($currentPageId) {
    // un tableau qui definit la structure du site
    $mymenu = array(
        // idPage titre
        'accueil' => array( 'Informations générales' ),
        'Expérience' => array( 'Expériences Professionnelles' ),
        'Associatif' => array('Expériences Associatives'),
        'Hobbies' => array('Hobbies'),
        'infos-technique' => array('Infos technique'),
        'contact' => array('Me Contacter')
    );

    foreach($mymenu as $pageId => $pageParameters){
        if($pageId == $currentPageId){
            echo  '<h1 id="titre"><a href="index.php">'.$pageParameters[0].'</a></h1>'; 
        }
    }

    echo "<nav>";
    echo "<ul>";

    foreach($mymenu as $pageId => $pageParameters){
        echo "<li><a ";
        if($pageId == $currentPageId){
            echo  'id="currentpage"'; 
        }
        echo 'href="cv.php?page='.$pageId.'">'.$pageParameters[0];
        
        echo "</a></li>";
    }
    
    echo "</ul>";
    echo "</nav>";

    }
?>