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
    <input name="lang" type="hidden" value="fr">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>

    <input type="submit" value="Appliquer" />
</form>

<?php

    $styledef = "style1";

    echo '<link rel="stylesheet" href="'.$styledef.'.css" />';
    if(isset($_GET['css'])){
        $styledef = $_GET['css'];
        echo '<link rel="stylesheet" href="'.$styledef.'.css" />';
        echo $styledef."<br>";
    }else{
        setcookie("style_css", $styledef, time()+600);
        echo $_COOKIE["style_css"];
        echo '<link rel="stylesheet" href="'.$_COOKIE["style_css"].'.css" />';
    }


    

    
?>