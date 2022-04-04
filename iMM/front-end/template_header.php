<!DOCTYPE html>
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>  
    <script type="text/javascript" src="https://cdn.plot.ly/plotly-2.9.0.min.js?_ga=2.171258467.2116708617.1648730459-65969814.1648730459"></script>
    
</head>
<body>
    <div class="col-sm-6">
    <?php 
        $user = $_SESSION['PRENOM'];
        $login = $_SESSION['LOGIN'];
    ?>
    <script type =  "text/javascript"> login = '<?php echo "$login" ?>';</script>
        <h4>Bienvenue <?php echo $user?>!</h4>