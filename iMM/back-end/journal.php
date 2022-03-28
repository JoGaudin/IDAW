<?php
      header('Content-Type: application/json');
      $config = include('config.php');
      $conn= mysqli_connect($config['database'], $config['username'], $config['password'], $config['dbname']);
    if($conn == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    if (!mysqli_set_charset($conn, "utf8")) {
        printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($link));
        exit();
    }
    if(isset($_POST['login'] )){
        $login = $_POST['login'];
    }
    //echo $login;
    $sql = mysqli_query($conn,"SELECT meal.MEAL_LABEL, meal.DATE, meal.ID_MEAL FROM meal WHERE meal.LOGIN = '${login}'");
    $result = mysqli_fetch_all($sql);
    $tableauAliments = array();


    for($i=2;$i<sizeof($result);$i++)
    {
        $label=$result[$i][0];
        $date=$result[$i][1];
        $id=$result[$i][2];
        $row = array();
        array_push($row,$label);array_push($row,$date);array_push($row,$id);
        array_push($tableauRepas,$row);
    }
    $json = json_encode($tableauRepas);
    //echo $json;

    $name = mysqli_real_escape_string($conn, $_POST['nomrepas']);
    $date = mysqli_real_escape_string($conn, $_POST['daterepas']);   
    $res = "INSERT INTO meal (login, date, meal_label) VALUES ('$login', '$name', '$date')";
    if ($conn->query($res) === TRUE) {
        echo "New record created successfully";
    }else {
        echo "Error: " . $res . "<br>" . $conn->error;
    }


?>