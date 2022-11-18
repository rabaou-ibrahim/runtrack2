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
        <input type="text" name="argument"/>
        <br/>
        <br/>
        <input type="text" name="argument2"/>
        <input type="submit" value="OK" />
        </p>
</form>
        <?php
            $count = 0;
            foreach($_GET as $_i) {
                $count++;
            }
            print_r($_GET);
            echo ("<br>Le nombre d’arguments GET envoyé est de : $count");
        ?>
</body>
</html>