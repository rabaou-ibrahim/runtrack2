<!DOCTYPE html>
<html lang="fr">      
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour08/job03</title>
    </head>

<body>

<form action="" method="get" class="formCol">

<input type="text" value="" name="prenom"/>
<input type="submit" value="Envoyer" />
<br>
<br>

<?php

session_start();

if(isset($_GET['prenom'])){
    $_GET["prenom"]=$_SESSION["prenom"];
    echo ($_SESSION["prenom"]);
}
?>

<br>
<label>Appuyez ici pour reset: </label>
<input type="submit" value="OK" />