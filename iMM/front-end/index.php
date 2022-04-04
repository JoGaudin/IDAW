<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css.css" />  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>  
    <script type="text/javascript" src="https://cdn.plot.ly/plotly-2.9.0.min.js?_ga=2.171258467.2116708617.1648730459-65969814.1648730459"></script>
    
</head>
<body>
    <div class="row">
        <div class="col-sm-6">
            <h1>iMangerMieux</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h2>Connectez-vous</h2>
        </div>
    </div>

    <div class="container">
        <form id="login_form" action="connected.php" method="POST">
            <table>
                <tr>
                    <th>Login :</th>
                    <td><input type="text" name="login"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="connexion"/></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

