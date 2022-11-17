<!DOCTYPE html>
<html>
<head>
<title><?php echo "job01" ?></title>
</head>
 
<body>
<?php

$i = 0;

for ($i; $i <= 1337; $i++) { 
    if ($i != 42) {
        echo $i;
        echo ("<br/>");
    }
    elseif ($i = 42) {
        echo ("<u><b>$i</b></u>");
        echo ("<br/>");
    }    
}

?>
</body>
</html>








