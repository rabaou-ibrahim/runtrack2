<!DOCTYPE html>
<html lang="fr">      
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour08/job02</title>
    </head>

<body>

<input type="text" value="Appuyez ici pour reset: " />
<input type="submit" value="OK" />

<?php
if(isset($_POST['OK'])){
        session_reset();
    }
?>

<?php
    session_start();
    $_COOKIE["nb_visites"];

    if (isset($_COOKIE["nb_visites"])) {
        echo "Le nombre de visites est de " . $_COOKIE["nb_visites"];
        $_COOKIE["nb_visites"]++;
    }
    else  {
       echo $_COOKIE["nb_visites"];
    }
?>