    <?php
        require_once('template_header.php');
    ?>

        <!-- Header -->

        <img class="photoJo" src="images/JOhan 4.0.png" alt="Image de Johan"/> 

        <h1 id="titre"><a href="index.php">Expériences Professionnelles</a></h1>
           

        <?php
            require_once('template_menu.php');
            renderMenuToHTML('Expérience');
        ?>



        <!-- Body -->
        <div id="contenu">           
            <h2><u>Assistant ingénieur électronicien</u></h2>
            <p><strong>TE Connectivity,</strong> <em>Bâle, Suisse</em><br>
                De mai 2021 à juillet 2021 <br>
                Modification d'un programme pour un banc de test thermique. Codage en C sur microcontrôleur, utilisation de l'outil DFSS pour la création du projet.
            </p>

            <h2><u>Informaticien d'application</u></h2>
            <p><strong>Offisanté,</strong> <em>Paris, France</em><br>
                De mai 2020 à juillet 2020 <br>
                Développement d'un automate permettant d'obtenir les informations sur un produit en un simple scan. (Développement en php, htlm, css et javascript).
            </p>

            <h2><u>Stage ouvrier</u></h2>
            <p><strong>JCDecaux,</strong> <em>Maurepas, France</em><br>
                De février 2019 à avril 2019<br>
                Monteur d'ensembles électroniques dans le cadre de mon cursus d'école d'ingénieur
            </p>
            

        </div>
        

        <!-- Footer -->
        <?php
            require_once('template_footer.php');
        ?>
</html>