<?php
    //Connexion à la base de données:
    $db_user = "root";
    $db_pass= "root";
    $db_name= "openeduc";
    $db_host = "localhost";
    $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name)
    or die('could not connect to database');

    session_start();
?>