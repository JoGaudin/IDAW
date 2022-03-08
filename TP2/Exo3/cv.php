    <?php
        require_once('template_header.php');
    ?>

        <!-- Header -->

        <img class="photoJo" src="images/JOhan 4.0.png" alt="Image de Johan"/> 

        <h1 id="titre"><a href="index.php">Mon CV</a></h1>
        <nav>
            <ul>
                <li><a id="currentpage" href="cv.php">Informations générales</a></li>
                <li><a href="Expérience.php">Expériences Professionnelles</a></li>
                <li><a href="Associatif.php">Expériences Associatives</a></li>
                <li><a href="Hobbies.php">Hobbies</a></li>
            </ul>
        </nav>

        <!-- Body -->
        <div id="contenu">           
    
            <h1>Présentation</h1>
                <p>
                    Je m'appelle Johan Gaudin, j'ai 21 ans. Je suis né le 30 Novembre 2000 à Le Chesnay
                    Je suis titulaire du permis de conduire ainsi que d'un véhicule personnel.
                </p>
    
            <h1>Langues</h1>
                <h2>Français</h2>
                    <p>Langue Maternelle</p>
                <h2>Anglais</h2>
                    <p>Toeic : 910/990</p>
                <h2>Espagnol</h2>
                    <p>Niveau Intermédiaire</p>
    
            <h1>Compétences</h1>
                <p>Organisé, Sérieux, Créatif, Capacité d'adaptation</p>
        </div>
        

        <!-- Footer -->
        <?php
            require_once('template_footer.php');
        ?>

</html>