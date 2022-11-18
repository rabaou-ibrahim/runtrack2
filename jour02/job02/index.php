<!DOCTYPE html>
<html>
<head>
<title><?php echo "job02" ?></title>
</head>

<body>
<?php

$i = 0;

for ($i; $i <= 1337; $i++) {
    
    if ($i != 37 or $i != 88 or $i != 1111 or $i != 3233) {
        echo ("$i");
        echo ("<br/>");
    }
    elseif ($i = 37 or $i = 88 or $i = 1111 or $i = 3233) {
        echo ("<br/>");
    } 
}

?>
</body>
</html>