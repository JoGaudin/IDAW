    <?php
        require_once('template_header.php');
        require_once('template_menu.php');

        $currentPageId = 'accueil';

        if(isset($_GET['page'])) {
            $currentPageId = $_GET['page'];
        }
    ?>

    <header class="bandeau_haut">
        <img class="photoJo" src="images/JOhan 4.0.png" alt="Image de Johan"/> 
    </header>

    <?php
        renderMenuToHTML($currentPageId);
    ?>

    <section id="contenu">
        <?php
            $pageToInclude = $currentPageId . ".php";

            if(is_readable($pageToInclude))
                require_once($pageToInclude);
            else
                require_once("error.php");
        ?>
    </section>

    <?php
        require_once("template_footer.php");
    ?>