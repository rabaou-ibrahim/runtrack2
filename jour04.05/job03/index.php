<!DOCTYPE html>
<html>
<head>
<title><?php echo "job03" ?></title>
</head>
 
<body>
<form action="" method="post" class="formCol">
        <p>
        <label for="argument">Ajouter ici un ou des arguments: </label>
        <br/>
        <br/>
        <input type="text" name="prenom1"/>
        <br/>
        <br/>
        <input type="text" name="prenom2"/>
        <input type="submit" name="Envoyer" value="OK">
        </p>
</form>
        <?php
            $count = 0;
            var_dump($_POST);
            foreach($_POST as $_i) {
                $count++;
            }
            echo ("<br>Le nombre d’arguments GET envoyé est de : $count");
        ?>
   
</body>
</html>