<?php
    $uur = date(format: "G");

    if ($uur < 6) {
        echo "Het is nacht";
    } else if ($uur < 12) {
        echo "Het is ochtend";
    } else if ($uur < 18) {
        echo "Het is middag";
    } else if ($uur < 23) {
        echo "Het is avond";
    }