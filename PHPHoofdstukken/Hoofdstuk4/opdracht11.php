<?php
    $number = 3;
    $totalnumber = $number;

    for ($i=1; $i < $number; $i++) { 
        $totalnumber = $totalnumber * $i;
    }
    echo ("The factoral of $number is $totalnumber");