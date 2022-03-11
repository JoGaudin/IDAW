    <?php
       $langdef = 'fr';
       
       print_r($_GET);
       if(isset($_GET['lang'])){
            $langdef=$_GET['lang'];
        }
        
    
    
    
        if($_GET['lang'] == 'fr' || $_GET['lang'] == 'en'){
            $langdef=$_GET['lang'];  
        }else{
            require_once("error.php");
        }
        ?>