<?php
    session_start();
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
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <h2 >Ajouter un Aliment</h2>
                    <div class="panel-body">
                        <form id="formutil">
                            <div class="form-group">
                                <label for="label"> Aliment </label>
                                <input type="text" class="form-control" value="Banane" id="label" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Type </label>
                                <input type="text" class="form-control" value="Fruit" id="type" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Energie (kcal/100g) </label>
                                <input type="text" class="form-control" id="energie" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Eau (g/100g) </label>
                                <input type="text" class="form-control" id="eau" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Protéines (g/100g) </label>
                                <input type="text" class="form-control" id="proteines" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Glucides (g/100g) </label>
                                <input type="text" class="form-control" id="glucides" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Lipides (g/100g) </label>
                                <input type="text" class="form-control" id="lipides" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Sucres (g/100g) </label>
                                <input type="text" class="form-control" id="sucres" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Glucose (g/100g) </label>
                                <input type="text" class="form-control" id="glucose" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Fibres Alimentaires (g/100g) </label>
                                <input type="text" class="form-control" id="fibres_alimentaires" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Cholestérol (mg/100g) </label>
                                <input type="text" class="form-control" id="cholesterol" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Calcium (mg/100g) </label>
                                <input type="text" class="form-control" id="calcium" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Fer (mg/100g) </label>
                                <input type="text" class="form-control" id="fer" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Iode (µg/100g) </label>
                                <input type="text" class="form-control" id="iode" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Magnésium (mg/100g) </label>
                                <input type="text" class="form-control" id="magnesium" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Phosphore (mg/100g) </label>
                                <input type="text" class="form-control" id="phosphore" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Potassium (mg/100g) </label>
                                <input type="text" class="form-control" id="potassium" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Sodium (mg/100g) </label>
                                <input type="text" class="form-control" id="sodium" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Vitamines D (µg/100g) </label>
                                <input type="text" class="form-control" id="vitamines_d" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Vitamines E (mg/100g) </label>
                                <input type="text" class="form-control" id="vitamines_e" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Vitamines K1 (µg/100g) </label>
                                <input type="text" class="form-control" id="vitamines_k1" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Vitamines C (mg/100g) </label>
                                <input type="text" class="form-control" id="vitamines_c" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Vitamines B1 (mg/100g) </label>
                                <input type="text" class="form-control" id="vitamines_b1" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Vitamines B2 (mg/100g) </label>
                                <input type="text" class="form-control" id="vitamines_b2" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Vitamines B3 (mg/100g) </label>
                                <input type="text" class="form-control" id="vitamines_b3" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Vitamines B5 (mg/100g) </label>
                                <input type="text" class="form-control" id="vitamines_b5" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Vitamines B6 (mg/100g) </label>
                                <input type="text" class="form-control" id="vitamines_b6" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Vitamines B9 (µg/100g) </label>
                                <input type="text" class="form-control" id="vitamines_b9" />
                            </div>
                            <div class="form-group">
                                <label for="type"> Vitamines B12 (µg/100g) </label>
                                <input type="text" class="form-control" id="vitamines_b12" />
                            </div>
                            <div class="col-xs-12">
                                <input type="submit" id="updateButton" class="btn btn-primary" onclick="update();" value="Ajouter"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type = "text/javascript" src="js/AlimentsScript.js"></script>
<script>
    $.get('http://localhost/IDAW/iMM/back-end/aliments.php', function(alim) {
                console.debug(alim);
                alim = JSON.parse(alim);
                alim.forEach(row => {
                    $("#aliments").append(`<tr><td><button type='button' onclick='display(this)' class='btn'><i class='fas fa-edit'/></button></td><td><button type='button'onclick='utilDelete(this);'class='btn'><i class='fas fa-trash' /></button></td><td>${row[0]}</td><td>${row[1]}</td></tr>`);
                });
            })

            

            .done(function(alim) {
                console.log("Success resquest");
            })

            .fail(function() {
                console.log("Fail resquest")
            })

            .always(function() {
                console.log("Requête done");
            })

            $(document).ready( function () {
                $('#aliments').DataTable();
            } );

            
            
</script>
