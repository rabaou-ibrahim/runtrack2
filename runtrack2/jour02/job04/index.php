<!DOCTYPE html>
<html>
<head>
<title><?php echo "job04" ?></title>
</head>
 
<body>
<?php

$i = 1;

for ($i; $i <= 100; $i++) { 
    if ($i%5 == 0 & $i%3 == 0){      #si je mets "(number%15 == 0)" ça marche aussi
        echo ("$i = FizzBuzz");
        echo ("<br/>");               #un multiple de 3 et 5 est un multiple de 15
    } 
    elseif ($i%5 == 0) {                    #multiple de 5 <=> n'importe quel nombre modulo 5 = 0 
        echo ("$i = Buzz");
        echo ("<br/>");  
    }       
    elseif ($i%3 == 0) {
        echo ("$i = Fizz"); 
        echo ("<br/>");   
    }
        
}

?>
</body>
</html>








