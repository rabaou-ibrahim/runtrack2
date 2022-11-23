<!DOCTYPE html>
<html>
<head>
<title><?php echo "job02" ?></title>
</head>
 
<body>
<form action="" method="get" class="formCol">
        <p>
        <label for="argument">Tapez une chaine de caractère: </label>
        <br/>
        <br/>
        <input type="text" name="str"/>
        <br/>
        <br/>
    <select name="fonction" id="pet-select">
        <option value="">--Choisissez une option--</option>
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
        <input type="submit" value="OK" />
        </p>
        <br/>
<?php
    function plateforme($str) {
        for (isset($str); $i>+0; $i--) {
            if ('e' == $str[$i] && 'm' == $str[$i-1]) {
                echo("Oui");
            }
            else {
                echo("Non");
            }
        }
    }

    plateforme("raba");
?>
</form>
</body>
</html>