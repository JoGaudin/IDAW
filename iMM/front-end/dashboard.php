<?php
require_once('template_header.php');
require_once('template_menu.php');

// require_once ('jpgraph-4.3.5/src/jpgraph.php');
// require_once ('jpgraph-4.3.5/src/jpgraph_pie.php');
// require_once ('jpgraph-4.3.5/src/jpgraph_pie3d.php');

// echo '<h1> Voici vos statistiques </h1>';

// $donnees = array(12,23,9,58,23,26,57,48,12);

// $largeur = 250;
// $hauteur = 200;

// // Initialisation du graphique
// $graphe = new PieGraph($largeur, $hauteur);

// // Creation du camembert
// $camembert = new PiePlot($donnees);
// // Ajout du camembert au graphique
// $graphe->add($camembert);

// // Ajout du titre du graphique
// $graphe->title->set("Camembert");

// // Affichage du graphique
// $graphe->stroke();

?>

<script>
    values: [],
    labels: [],
function maFonction(){
    alert('testFct');

    varJq.ajax({
      url: "back-end/dashboard.php",
        method: "POST",
        data :'action=recuperation&idSession=<%=session.getId()%>',

    }

}
maFonction();</script>
	
<script src='js/plotly-2.9.0.min.js'></script>
<div id='myDiv' ></div>

<script>
var data = [{
  values: [19, 26, 55],
  labels: ['Residential', 'Non-Residential', 'Utility'],
  type: 'pie'
}];

var layout = {
  height: 400,
  width: 500
};

Plotly.newPlot('myDiv', data, layout);

</script>

