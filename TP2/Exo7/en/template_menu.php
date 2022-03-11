<?php
    function renderMenuToHTML($currentPageId, $langdef) {
    // un tableau qui definit la structure du site
    $mymenu = array(
        // idPage titre
        'accueil' => array( 'General information' ),
        'Expérience' => array( 'Professional Experience' ),
        'Associatif' => array('Associative Experiences'),
        'Hobbies' => array('Hobbies'),
        'infos-technique' => array('Technical info'),
        'contact' => array('Contact me')
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
        echo 'href="index.php?page='.$pageId.'&lang='.$langdef.'">'.$pageParameters[0];
        
        echo "</a></li>";
    }
    
    echo "</ul>";
    echo "</nav>";

    }
?>