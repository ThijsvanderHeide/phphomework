<?php
    $dag = date(format: "l");
    $datum = date(format: "d");
    $maand = date(format: "F");
    $jaar = date(format: "Y");

    $jaardag = date(format: "z");
    $weekdag = date(format: "w");
    $maanddag = date(format: "j");

    $schrikkel = date(format: "L");

    echo "Het is vandaag $dag $datum $maand $jaar <br>";
    echo "Vandaag is het de $jaardag van het jaar <br>";
    echo "$dag is het de $weekdag van de week <br>";
    echo "De maand $maand heeft in totaal $maanddag dagen <br>";

    if ($schrikkel == 1) {
        echo "Het jaar $jaar is een schrikkeljaar";
    }
    else {
        echo "Het jaar $jaar is geen schrikkeljaar";
    }