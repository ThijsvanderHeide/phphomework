<?php
    // $uur = date(format: "G");
    $uur = 12;
    $time = match($uur) {
        0, 1, 2, 3, 4, 5, 6 => "Het is Nacht",
        7, 8, 9, 10, 11 => "Het is Ochtend",
        12, 13, 14, 15, 16, 17 => "Het is Middag",
        18, 19, 20, 21, 22, 23 => "Het is Avond",
        default => "Unknown",
    };
    echo $time;