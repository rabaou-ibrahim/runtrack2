<?php
    function occurences($str, $char) {
        $i = 0;
        $count = 0;
        for ($i=0; isset($str); $i++) {
            if ($char == $str($i)) {
                $count++; 
            }
        }
        echo ("Le nombre d'occurences du caractère est de : $count");
    }
    
    occurences("abracadabra", "a");
?>