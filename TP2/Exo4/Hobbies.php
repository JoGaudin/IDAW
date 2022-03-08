    <?php
        require_once('template_header.php');
    ?>

        <!-- Header -->

        <img class="photoJo" src="images/JOhan 4.0.png" alt="Image de Johan"/> 

        <h1 id="titre"><a href="index.php">Hobbies</a></h1>
        
        
        <?php
            require_once('template_menu.php');
        ?>

        <!-- Body -->
        <div id="contenu">           
            
            <h2><em>Photographie</em></h2>
            <p>
                J'ai découvert le plaisir de la photo à New York lors d'un voyage avec ma famille en 2016 et depuis c'est l'une de mes activités favorites surtout durant mes voyages.
            </p>
            <img class="photograph" src="images/tour.JPG" alt="Image de tour"/> 

            <h2><em>Volleyball</em></h2>
            <p>
                Depuis mon arrivée à l'IMT, je joue dans l'équipe de volley de l'école au coté de mon capitaine <a href="https://www.instagram.com/clement_d03/?hl=fr">Clément Declercq</a>.
            </p>
            <img class="volley" src="images/volley.jpg" alt="Image de tour"/>

            <h2><em>Les Voyages</em></h2>
            <p>
                J'ai beaucoup voyager durant mon adolescence notamment grâce à différentes colonies de vacances dans les capitales européennes (Rome, Madrid, Amsterdam, Prague) <br> mais aussi avec des voyages familiaux aux USA ou en Croatie.
            </p>
            <img class="avion" src="images/avion.jpg" alt="Image de tour"/>

        </div>
        

        <!-- Footer -->
        <?php
            require_once('template_footer.php');
        ?>
</html>