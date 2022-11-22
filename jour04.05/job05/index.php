<!DOCTYPE html>
<html>
<head>
<title><?php echo "job01" ?></title>
</head>
 
<body>
<form action="" method="get" class="formCol">
        <p>
        <label for="argument">Ajouter ici un ou des arguments: </label>
        <br/>
        <br/>
        <text>Username :</text>
        <input type="text" name="username"/>
        <br/>
        <br/>
        <text>Password :</text>
        <input type="text" name="password"/>
        <input type="submit" value="OK" />
        </p>
</form>
<?php
    
        if (($_GET["username"])=="John" && $_GET["password"]=="Rambo") {
            echo ("C'est pas ma guerre");
        }

        else  {
            echo ("Votre pire cauchemar");
        } 
?>