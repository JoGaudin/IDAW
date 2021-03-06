<?php
    session_start();
    require_once('template_header.php');
?>




    <?php
        require_once('template_menu.php');
    ?>
    
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h2>Repas</h2>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table id="repas" class="display table table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <!-- <th>Modifier</th> -->
                            <th>Supprimer</th>
                            <th>Nom du repas</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody id ="TableRepas">
                   
                    </tbody>
                </table>
            </div>
        </div>
        

<script>
    $(document).ready( function () {
    $.ajax({
    type: 'POST',
    url: 'http://localhost/IDAW/iMM/back-end/journal.php',
    Type: 'JSON',
    data : 'login='+login,
    }).done(function(journal) {
        console.log("Success resquest");
        journal = JSON.parse(journal);
                
        journal.forEach(row => {
        $("#repas").append(`<tr><td><button type='button'onclick='utilDelete(this);'class='btn'><i class='fas fa-trash' /></button></td><td>${row[0]}</td><td>${row[1]}</td></tr>`);
                   });

         /*DataTables instantiation.*/
         var table = $('#repas').DataTable( {
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
