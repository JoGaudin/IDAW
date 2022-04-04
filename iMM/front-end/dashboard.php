<?php

session_start();

require_once('template_header.php');
require_once('template_menu.php');
?>

<script>

function graphe(libelle, ratios){
   
    var data = [{

  values : ratios,
  labels :libelle,


  type: 'pie',

  


}];

var layout = {
  height: 400,
  width: 500

};
Plotly.newPlot('myDiv', data, layout);
}



</script>

<script>

    libelle = new Array ();
    ratios = new Array ();
    $(document).ready( function () {
        $.ajax({
        type: 'POST',
        data : 'login=<?php echo $_SESSION['LOGIN']?>',
        url: 'http://localhost/IDAW/iMM/back-end/dashboard.php',
        Type: 'JSON',
        }).done(function(data) {
        
        data = JSON.parse(data);
        
        

        i = 0;
        
        data.forEach(row => {
            // alert (row[0]);
            libelle[i]= row[0];
            ratios[i] = row[1];
            i++;
            

                      });

    graphe(libelle, ratios);
    //                    var data = [{
    //   values: libelle,
    //   labels: ratios,
    //   type: 'pie'
    // }];

    // var layout = {
    //   height: 400,
    //   width: 500
    // };


    // Plotly.newPlot('myDiv', data, layout);

        })

    });

</script>

<script src='js/plotly-2.9.0.min.js'></script>
<div id='myDiv' ></div>





