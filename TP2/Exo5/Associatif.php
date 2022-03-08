    <?php
        require_once('template_header.php');
    ?>

        <!-- Header -->

        <img class="photoJo" src="images/JOhan 4.0.png" alt="Image de Johan"/> 

        <h1 id="titre"><a href="index.php">Expériences Associatives</a></h1>
        
        
        <?php
            require_once('template_menu.php');
            renderMenuToHTML('Associatif');
        ?>

        <!-- Body -->
        <div id="contenu">           
            
            <h2><u>Président</u></h2>
            <p><strong>Sépia(club photo),</strong> <em>IMT Nord Europe</em><br>
                Depuis avril 2021
            </p>

            <h2><u>Trésorier</u></h2>
            <p><strong>Club vidéo,</strong> <em>IMT Nord Europe</em><br>
                Depuis avril 2021
            </p>

            <h2><u>Pôle Communication</u></h2>
            <p><strong>Bureau des sports,</strong> <em>IMT Nord Europe</em><br>
                Depuis avril 2021
            </p>
            
        </div>
        

        <!-- Footer -->
        <?php
            require_once('template_footer.php');
        ?>
</html>