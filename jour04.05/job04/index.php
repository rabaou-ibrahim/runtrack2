<!DOCTYPE html>
<html>
<head>
<title><?php echo "job04" ?></title>
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


    <tr>
        <td><b>Argument<b></td>
        <td><b>Valeur<b></td>
    </tr>
    <br/>
    <tr>
        <td>prenom</td>
    </tr>
    <tr> 
        <td>
    <?php
            echo $_POST['prenom1'];       
    ?>    
        </td>
        <br/>
        <td>nom</td>
    </tr>
        <td>
        <?php
            echo $_POST['prenom2'];       
        ?>
        </td>
</body>
</html>