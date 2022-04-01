<?php 

echo '<nav class="menu">

<head>

<link rel="stylesheet" href="css.css">

</head>

<ul>

<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="aliments.php">Aliments</a></li>
<li><a href="profil.php">Profil</a></li>
<li><a href="journal.php">Journal</a></li>
</ul>
</nav> 

<a id= "deconn" href="fermeture_session.php">Deconnexion</a>';

function renderMenuToHTML($currentPageId) {
    // un tableau qui definit la structure du site
    $mymenu = array(
        // idPage titre
        'index' => array( 'Connexion' ),
        'connected' => array( 'Connecté' ),
        'dashboard' => array( 'Dashboard' ),
        'aliments' => array('Aliments'),
        'profil' => array('Profil'),
        'journal' => array('Journal'),
    );

    foreach($mymenu as $pageId => $pageParameters){
        if($pageId == $currentPageId){
            echo  '<title>'.$pageParameters[0].'</title>'; 
        }
    }

    // echo "<p> currentPageId = $currentPageId</p>";

    echo "<nav>";
    echo "<ul>";

    foreach($mymenu as $pageId => $pageParameters){
        echo "<li><a ";

        if($pageId == $currentPageId){
            echo  'id="currentpage"'; 
        }
        echo 'href="index.php?page='.$pageId.'.php">'.$pageParameters[0];
        
        echo "</a></li>";
    }


    
    echo "</ul>";
    echo "</nav>";
    }


?>
