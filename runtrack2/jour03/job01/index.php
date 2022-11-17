<!DOCTYPE html>
<html>
<head>
<title><?php echo "job04" ?></title>
</head>
 
<body>
<?php

$tab=array();

$tab[0]=200;
$tab[1]=204;
$tab[2]=173;
$tab[3]=98;
$tab[4]=171;
$tab[5]=404;
$tab[6]=459;

// Notre boucle permettant d'afficher la 2ème ligne du tableau ci-dessus
for ($i=0;$i<count($tab);$i++){
    echo $tab[$i];
    echo (" | ");
}

echo ("<br/>");

for ($i=0;$i<count($tab);$i++){

    if ($tab[$i]%2 == 0) {
        echo "$tab[$i] est paire";
        echo ("<br/>");
    }
    else if ($tab[$i]%2 != 0) {
        echo "$tab[$i] est impaire";
        echo ("<br/>");
    }
}

?>
</body>
</html>