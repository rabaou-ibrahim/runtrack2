<!DOCTYPE html>
<html>
<head>
<title><?php echo "job03" ?></title>
</head>

<body>
<?php

$i = 0;

for ($i; $i <= 100; $i++) {
    
    if ($i <= 20) {
        echo ("<i>$i</i>");
        echo ("<br/>");
    }

    elseif ($i >= 25 & $i <= 50 & $i != 42) {
        echo ("<u>$i</u>");
        echo ("<br/>");
    }

    elseif ($i == 42) {
        echo ("La Plateforme_");
        echo ("<br/>");
    }
}

?>
</body>
</html>