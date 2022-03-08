<?php
    function renderMenuToHTML($currentPageId) {
    // un tableau qui definit la structure du site
    $mymenu = array(
        // idPage titre
        'cv' => array( 'Informations générles' ),
        'Expérience' => array( 'Expériences Professionnelles' ),
        'Associatif' => array('Expériences Associatives'),
        'Hobbies' => array('Hobbies'),
        'infos-technique' => array('Infos technique')
    );

    echo "<nav>";
    echo "<ul>";

    foreach($mymenu as $pageId => $pageParameters){
        echo "<li>";
        if($pageId == $currentPageId){
            echo '<a id="currentpage" href="'.$pageId.'.php">'.$pageParameters[0];
        }else{
            echo '<a href="'.$pageId.'.php">'.$pageParameters[0];
        }
        echo "</a></li>";
    }
    
    echo "</ul>";
    echo "</nav>";

    }
?>