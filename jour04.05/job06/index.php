<!DOCTYPE html>
<html>
<head>
<title><?php echo "job01" ?></title>
</head>
 
<body>
<form action="" method="get" class="formCol">
        <p>
        <br/>
        <text>Taper un nombre :</text>
        <input type="text" name="nombre"/>
        <input type="submit" value="OK" />
        </p>
</form>
<?php
    
        if (($_GET["nombre"])%2==0) {
            echo ("Nombre pair");
        }

        elseif (($_GET["nombre"])%2!=0){
            echo ("Nombre impair");
        } 
?>