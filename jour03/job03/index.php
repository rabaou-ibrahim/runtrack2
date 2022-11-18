<!DOCTYPE html>
<html>
<head>
<title><?php echo "job02" ?></title>
</head>
 
<body>
<?php

$str= "I'm sorry Dave I'm afraid I can't do that";

$length = strlen($str);
$result = '';
for ($i = 0; $i < $length; $i++) {
    if ($str[$i] == 'a' or $str[$i] == 'A' or $str[$i] == 'E' or $str[$i] == 'e' or $str[$i] == 'I' or $str[$i] == 'i' or $str[$i] == 'O' or $str[$i] == 'o' or $str[$i] == 'U' or $str[$i] == 'u' or $str[$i] == 'y' or $str[$i] == 'Y') {

        echo  ($str[$i]);
}

}
echo ($result);



?>
</body>
</html>