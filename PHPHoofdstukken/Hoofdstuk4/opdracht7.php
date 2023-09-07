<?php
    $spaargeld = 800;
    $iphone = 1000;

    if ($spaargeld < 750) {
        echo "Zoek een baantje";
    } else if ($spaargeld > 750 && $spaargeld < 1000) {
        echo "Je hebt te weinig geld, je hebt nog ";
        echo ($iphone - $spaargeld);
        echo " nodig.";
    } else {
        echo "Je kan de IPhone kopen! En je houdt nog ";
        echo ($spaargeld - $iphone);
        echo " over";
    }