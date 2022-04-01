<?php
require_once('template_header.php');
require_once('template_menu.php');
echo '<h1> Voici vos statistiques </h1>';

require_once("include_path_inc.php");

require_once("jpgraph.php");
require_once("jpgraph_pie.php");

$donnees = array(12,23,9,58,23,26,57,48,12);

$largeur = 250;
$hauteur = 200;

// Initialisation du graphique
$graphe = new PieGraph($largeur, $hauteur);

// Creation du camembert
$camembert = new PiePlot($donnees);
// Ajout du camembert au graphique
$graphe->add($camembert);

// Ajout du titre du graphique
$graphe->title->set("Camembert");

// Affichage du graphique
$graphe->stroke();

?>

