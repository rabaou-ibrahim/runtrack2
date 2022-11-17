<!DOCTYPE html>
<html>
<head>
<title><?php echo "job06" ?></title>
</head>
 
<body>
<?php

$str= "Certaines choses changent, et d'autres ne changeront jamais.";

$length = strlen($str);
$switch = 0;

for ($i=0; $i < $length; $i++) {
    $str[$i] = $str[$i+1];
    $str[$i+1] = $str[$switch];
    $str[$switch] = $str[$i];
    echo $str[$i];
}

?>
</body>
</html>