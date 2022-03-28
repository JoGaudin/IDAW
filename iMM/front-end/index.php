<?php
require_once('template_header.php');
?>

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

