<!DOCTYPE html>
<html>
<head>
<title><?php echo "job05" ?></title>
</head>
 
<body>
<?php

$i = 1;

for ($i; $i <= 100; $i++) { 

    if ($i%$i == 0 & $i%1 == 0) {
        echo ("$i");
        echo ("<br/");
    }

}

?>
</body>
</html>
