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
        <input type="submit" value="OK" />
        <br/>
        <br/>
        <input type="text" name="argument"/>
        <input type="submit" value="OK" />
        </p>
</form>
        <tr>
            <td><b>Argument<b></td>
            <td><b>Valeur<b></td>
        </tr>
        <?php $i=$_GET[$i];
        ?>
        <tr>
            <td>
                <?php 
                foreach($_GET as $_i) {
                    echo("$i");
                } 
                ?>
            </td>
            <td><?php echo ($_GET["$i"]) ?></td>
        </tr>
        <tr>
            <td><?php echo ($_GET["$i"]) ?></td>
            <td><?php echo ($_GET["$i"]) ?></td>
        </tr>
</body>
</html>