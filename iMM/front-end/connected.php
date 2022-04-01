<?php

$config = include('config.php');
$conn= mysqli_connect($config['database'], $config['username'], $config['password'], $config['dbname']);

$sql="SELECT LOGIN, PRENOM FROM profil";
$result=$conn->query($sql);



$errorText="";
$successfullyLogged=false;

if(isset($_POST['login'])){
    $tryLogin=$_POST['login'];
    while($data=mysqli_fetch_array($result)){
        if($data['LOGIN']==$tryLogin){
            $login=$tryLogin;
            $name=$data['PRENOM'];
            $successfullyLogged=true;
            
        }
    }
}


else{
    $errorText="Merci d'utiliser le formulaire de login";
}

if(!$successfullyLogged){
    echo $errorText;
}
else{
    session_start();
    $_SESSION['LOGIN']=$login;
    $_SESSION['PRENOM']=$name;

    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='css/crud2.css' type='text/css' media='screen' title='default' charset='utf-8' />
        <title>Connected</title>
    </head>
    <body>";
    
    echo "<h1>Bienvenue sur l'application iMangerMieux $name !</h1>
    
    </body>
    </html>";
    require_once('template_menu.php');
}

?>