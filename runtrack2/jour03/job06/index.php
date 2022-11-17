<!DOCTYPE html>
<html>
<head>
<title><?php echo "job06" ?></title>
</head>
 
<body>
<?php

$str= "Les choses que l'on possède finissent par nous posséder.";

$length = strlen($str);

for ($i=($length-1); $i >= 0; $i--) {
    echo $str[$i];
}

?>
</body>
</html>