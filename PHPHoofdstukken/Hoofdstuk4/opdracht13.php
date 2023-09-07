<?php
    $number = 11;
    $kilomile = 1.609;
    $kilomiles = 0;

    echo "<table>";
    for($i=1; $i < $number; $i++) {
        $kilomiles = $kilomiles + $kilomile;
        echo "<tr>";
            echo "<td> $i Miles </td>";
            echo "<td> $kilomiles Kilometer</td>";
        echo "</tr>";
    }
    echo "</table>";
?>