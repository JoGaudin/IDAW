<?php
    session_start();
    require_once('template_header.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    
        
</head>
<body>
    <div class="titre">
        <h4>Bienvenue !</h4>
    </div>

    <?php
        require_once('template_menu.php');
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h2>Aliments</h2>
    </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table id="aliments" class="display table table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                            <th>Aliment</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody id ="TableAliments">
                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<script type = "text/javascript" src="js/AlimentsScript.js"></script>
<script>
    $(document).ready( function () {
    $.ajax({
    type: 'GET',
    url: 'http://localhost/IDAW/iMM/back-end/aliments.php',
    Type: 'JSON',
    }).done(function(data) {
        console.log("Success resquest");
        data = JSON.parse(data);
                
        data.forEach(row => {
        $("#aliments").append(`<tr><td><button type='button' onclick='display(this)' class='btn'><i class='fas fa-edit'/></button></td><td><button type='button'onclick='utilDelete(this);'class='btn'><i class='fas fa-trash' /></button></td><td>${row[0]}</td><td>${row[1]}</td></tr>`);
                   });

         /*DataTables instantiation.*/
         var table = $('#aliments').DataTable( {
            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
            columnDefs: [
            { width: '20%', targets: 0 }
        ],
        fixedColumns: true
        
        } );
        
    })

    .fail(function() {
        console.log("Fail resquest")
    })

    .always(function() {
        console.log("Requête done");
    })
    
    });
    
               
</script>
