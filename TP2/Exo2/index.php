<!DOCTYPE html>

<html>
    <head>
        <title>Mon CV</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css.css" />
        <link rel="icon" type="image/jpg" href="images/favicon.jpg"/>
    </head>

    <body>
        <section id="index">
            <h1>Johan Gaudin</h1>
            <!-- <a href="cv.html"><button class="btn" type="button">Accéder à mon CV</button></a> -->
            <p>La date d'aujourd'hui est le : 
            <?php
            // Affichage de la date
            echo date("d/m/Y");
            ?>
            </p>

            <?php 
                function name($nom, $prenom = "Johan"){
                    echo $nom . "  " . $prenom;   
                } 

                name("Gaudin");
                echo "\n";
            ?>

            <br>

            <?php 
                $tab = [1,2,3,4,5,6,7,8,9,10];

                foreach($tab as $value){
                    echo $value."\n";
                }
            ?>

        </section>
        
        
    </body>
</html>