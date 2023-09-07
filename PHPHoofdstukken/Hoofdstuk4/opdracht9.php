<?php
    $side1 = 1;
    $side2 = 2;
    $side3 = 1;
    
    $sides = array($side1, $side2, $side3);
    sort($sides);

    if ($sides[0] + $sides[1] > $sides[2]) {
        echo "Het kan wel";
    } else {
        echo "Het kan niet";
    }