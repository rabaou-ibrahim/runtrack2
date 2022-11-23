<?php
   function plateforme($str) {
    $i = 0;
    for (isset($str)-1; $i>=0; $i--) {
        if ('e' == $str[$i] & 'm' == $str[$i-1]) {
            echo("Oui");
        }
        else {
            echo("Non");
        }
    }
}

plateforme("rabaeme");
?>