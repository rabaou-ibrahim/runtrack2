<!DOCTYPE html>
<html>
<head>
<title><?php echo "job02" ?></title>
</head>
 
<body>
<?php

$str= "On n’est pas le meilleur quand on le croit mais quand on le sait";
$nb_consonnes = 0;
$nb_voyelles = 0;

$dic= [
    "consonnes" => $nb_consonnes,
    "voyelles" =>  $nb_voyelles,
];

$length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] == 'a' or $str[$i] == 'A' or $str[$i] == 'E' or $str[$i] == 'e' or $str[$i] == 'I' or $str[$i] == 'i' or $str[$i] == 'O' or $str[$i] == 'o' or $str[$i] == 'U' or $str[$i] == 'u' or $str[$i] == 'y' or $str[$i] == 'Y') {
            $nb_voyelles++; 
        }

        elseif ($str[$i] != 'a' or $str[$i] != 'A' or $str[$i] != 'E' or $str[$i] != 'e' or $str[$i] != 'I' or $str[$i] != 'i' or $str[$i] != 'O' or $str[$i] != 'o' or $str[$i] != 'U' or $str[$i] != 'u' or $str[$i] != 'y' or $str[$i] != 'Y') {
            $nb_consonnes++; 
        }
    }

?>

<table>
    <thead>
        <tr>
            <th scope="col">Voyelles</th>
            <th scope="col">Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"><?php echo $nb_voyelles ?></th>
            <th scope="row"><?php echo $nb_consonnes ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>