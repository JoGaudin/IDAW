<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $db = 'tp3';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password, $db);
            $conn->set_charset("utf8");
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie<br>';
            
            $requete = "SELECT * FROM profil ORDER BY id ASC";
            $res = $conn->query($requete);
            //print_r($res);
            $res->data_seek(0);
            while ($row = $res->fetch_assoc()) {
                echo $row['id'] . ' ' . $row['login'] . ' ' . $row['password'] . ' ' . $row['pseudo'] . '<br>';
                //print_r($row);
            }
                        
?>

<form id="login_form" action="index.php?page=testConnexion&lang=fr" method="POST">
        <table>
            <tr>
                <th>Login :</th>
                <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <th>Mot de passe :</th>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <th>Pseudo :</th>
                <td><input type="text" name="pseudo"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Se rajouter" /></td>
            </tr>
        </table>
</form>

<?php 

        $login = mysqli_real_escape_string($conn, $_POST['login']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        $pseudo = mysqli_real_escape_string($conn, $_POST['pseudo']);    
        $sql = "INSERT INTO profil (login, password, pseudo) VALUES ('$login', '$pwd', '$pseudo')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        }else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
?>