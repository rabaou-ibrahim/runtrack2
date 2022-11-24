<!DOCTYPE html>
<html lang="fr">      
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour08/job01</title>
    </head>

<body>

<label>Appuyer ici pour reset: </label>
<br>
<form method="get">
<input type="submit" name="button" class="button" value="OK" />

<br>
<br>

<?php

    function OK_submit() {
        
    }

    function log_count() {
        if (isset($_SESSION["nb_visites"])) {
            echo "Le nombre de visites est de " . $_SESSION["nb_visites"];
            $_SESSION["nb_visites"]++;
        }
        else  {
            $_SESSION["nb_visites"] = 1;
            echo ("La session n'existe pas");
        }
    }
?>

<?php
    session_start();
    log_count();
    if(array_key_exists('button', $_GET)) {
        session_reset();
    }
    
?>


