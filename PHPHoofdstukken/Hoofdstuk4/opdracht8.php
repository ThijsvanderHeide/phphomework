<?php
    $leeftijd = 17;
    $stempas = false;

    if ($leeftijd > 15) {
        echo "Je mag praktijkexamen scooterrijbewijs doen. ";
    } else {
        echo "Je mag niet praktijkexamen scooterrijbewijs doen. ";
    }
    if ($leeftijd > 17) {
        echo "Je mag stemmen, ";
    } else {
        echo "Je mag niet stemmen, ";
    }
    if ($stempas == true) {
        echo "Want je hebt een stempas.";
    } else {
        echo "Want je hebt geen stempas.";
    }