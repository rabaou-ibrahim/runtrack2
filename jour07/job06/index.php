<?php
    function leetSpeak($str) {
        $i = 0;
        for ($i=0; isset($str[$i]); $i++) {
            if ($str[$i] == 'A' or $str[$i] == 'a') {
                $str[$i] == '4'; 
            }
        elseif ('B' == $str[$i] or 'b' == $str[$i]) {
                $str[$i] == '8'; 
            }
        elseif ('E' == $str[$i] or 'e' == $str[$i]) {
                $str[$i] == '3'; 
            }
        elseif ('G' == $str[$i] or 'g' == $str[$i]) {
                $str[$i] == '6'; 
            }
        elseif ('L' == $str[$i] or 'l' == $str[$i]) {
                $str[$i] == '1'; 
            }
        elseif ('S' == $str[$i] or 's' == $str[$i]) {
                $str[$i] == '5'; 
            }
        elseif ('T' == $str[$i] or 't' == $str[$i]) {
                $str[$i] == '7'; 
            }
        }
        echo ($str);
    }
    
    leetSpeak("ABRACADABRA");
?>