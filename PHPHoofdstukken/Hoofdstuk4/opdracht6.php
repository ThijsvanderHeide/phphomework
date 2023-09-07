<?php
    $uur = date(format: "G");
    $temparatuur = 21;
    $luchtvochtigheid = 90;
    
    if ($uur > 17 || $temparatuur < 20 && $luchtvochtigheid < 85 ) {
        echo "De Airco moet nu uit";
    }
    