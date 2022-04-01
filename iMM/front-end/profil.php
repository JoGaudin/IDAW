<?php
    session_start();




    require_once('template_header.php');
    require_once('template_menu.php');
?>



    <div class="col-sm-6">
            <h4>Bienvenue <?php echo $_SESSION['PRENOM']?> ! Voici votre profil.</h4>
    </div>

    <div class="col-sm-6">
                <?php
                    $config = include('config.php');
                    $conn= mysqli_connect($config['database'], $config['username'], $config['password'], $config['dbname']);
                    if($conn == false){
                        die("Erreur de connexion " . mysqli_connect_error());
                    }
                    $login=$_SESSION['LOGIN'];
                    
                    $sql=mysqli_query($conn,"SELECT * FROM profil WHERE LOGIN='$login'");
                    $result=mysqli_fetch_all($sql);
                    $surname=$result[0][6];
                    $firstname=$result[0][7];
                    $age=$result[0][4];
                    $sexe=$result[0][3];
                    if($result[0][5]==1){
                        $sport='faible';
                    }
                    if($result[0][5]==2){
                        $sport='bon';
                    }
                    else{
                        $sport='très bon';
                    }
                    $user=$_SESSION['LOGIN'];
                    echo "<div class='espace'>Nom : $surname</div>
                    <div class='espace'>Prénom : $firstname</div>
                    <div class='espace'>e-mail : $login</div>
                    <div class='espace'>Age : $age</div>
                    <div class='espace'>Sexe : $sexe</div>
                    <div class='espace'>Niveau de pratique sportive : $sport</div>"

                    
                    ?>
    </div>                
</html>