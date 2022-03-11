<h3><u><a href="index.php?page=login&lang=en">Anglais</a></u></h3>

<form id="login_form" action="fr/connected.php" method="POST">
    <table>
        <tr>
            <th>Login :</th>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <th>Mot de passe :</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Se connecter..." /></td>
        </tr>
    </table>
</form>


<form id="style_form" action="index.php" method="GET">
    <input name="page" type="hidden" value="login"> 
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>

    <input type="submit" value="Appliquer" />
</form>

<?php
    setcookie("style_css", $_GET['css'], time()+3600);
?>