<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!--<link href="css/style.css" rel="stylesheet">-->
    <!-- <link rel='stylesheet' href='css/crud2.css' type='text/css' media='screen' title='default' charset='utf-8' /> -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.24/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.24/datatables.min.js"></script>
    <script type = "text/javascript" src="js/scriptJournal.js"></script> 
    <script src="js/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="css/searchBar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>CRUD</title>
</head>
<body>
    <?php
    //require_once('navbar.php');
    ?>
    <div class="col-sm-6">
    <?php 
        $user = $_SESSION['firstname'];
        $login = $_SESSION['login'];
    ?>
    <script type =  "text/javascript"> login = '<?php echo "$login" ?>';</script>
        <h4>Bienvenue <?php echo $user?>!</h4>
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
                    <?php
                            $conn= mysqli_connect("localhost", "root", "", "imangermieux");
                            if($conn == false){
                                die("ERROR: Could not connect. " . mysqli_connect_error());
                            }
                            $sql = mysqli_query($conn,"SELECT meal.MEAL_LABEL, meal.DATE, meal.ID_MEAL FROM meal WHERE meal.LOGIN = '${login}'");
                            $result = mysqli_fetch_all($sql);
                            for($i=0;$i<sizeof($result);$i++){
                                $mealLabel = $result[$i][0];
                                $mealDate = $result[$i][1];
                                // echo "<tr><td><button type='button'
                                //         onclick='display(this)';
                                //         class='btn'
                                //         data-id=' $i '>
                                //         <i class='fas fa-edit'/>
                                // </button></td>
                                echo"<td><button type='button'
                                        onclick='utilDelete(this);'
                                        class='btn'
                                        data-id=' $i '>
                                        <i class='fas fa-trash' />
                                </button>
                                </td>
                                <td>$mealLabel</td>
                                <td>$mealDate</td>";
                                echo"</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <h2>Ajouter un repas</h2>
                    <div class="panel-body">
                        <form id="formutil" onsubmit="event.preventDefault();utilBuildTableRow();" autocomplete="on">
                            <div class="form-group">
                                <label for="label"> Repas </label>
                                <input type="text" class="form-control" id="label" placeholder="Nom du repas" name="label" required/>
                            </div>
                            <div class="form-group">
                                <label for="date"> Et c'était quand ce bon repas ? </label>
                                <input type="datetime" class="form-control"  id="date" name="date" required/>
                            </div>
                            <div class="col-xs-12">
                                <input type="submit" id="updateButton" class="btn btn-primary"  onclick="update();" value="Ajouter">
                            </div>
                            <br/>
                        </form>
                        <div class="form-group">
                                <label for="date"> Choisis tes Ingrédients </label>
                                <?php //require_once('src/jscrud.php')?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
  
</html>
<script type = "text/javascript" src="js/scriptJournal.js"></script>

<!-- Nous n'arrivons pas à récupérer un retour correct sur cette requête ci-dessous, donc obligés de communiquer avce la base dans le front. -->
<script>
    $.ajax({
        url: backendurl + "journal.php",
        type : 'POST',
        data : 'login='+login,
        //datatType = 'json'
        }).done(function(res) {
            let texte=""
            for(let i=0;i<Object.keys(res).length-1;i++){
                                texte =""
                                let mealLabel = res[$i][0]
                                let mealDate = res[$i][1]
                                let mealID  = res[$i][2]
                                texte = "<tr><td><button type='button'onclick='display(this)';class='btn'data-id='"+mealID+" '><i class='fas fa-edit'/></button><td>"
                                texte+="<button type='button'  onclick='utilDelete(this);'class='btn' data-id=' "+mealID+" '><i class='fas fa-trash' /></button></td>"
                                texte+="<td>"+$mealLabel+"</td>"
                                texte+="<td>"+$mealLabel+"</td>"
                                texte+="</tr>"
            }
            $(document).ready( function () {
            $('#repas').DataTable();
            } );
            $("#repas").append(texte);
            }
        );
</script>
