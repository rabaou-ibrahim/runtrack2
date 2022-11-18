<!DOCTYPE html>
<html>
<head>
<title><?php echo "job02" ?></title>
</head>
 
<body>
<?php

$str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';

$length = strlen($str);
$result = '';
for ($i = 0; $i < $length; $i = $i + 2) {
    $result .= $str[$i];
}
echo ($result);

?>
</body>
</html>