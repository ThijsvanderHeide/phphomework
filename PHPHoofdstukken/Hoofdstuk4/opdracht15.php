<?php
    $number = 1;

    echo "<table>";
    for($i=1; $i < 6; $i++) {
        echo "<tr>";
            echo "<td> $number </td>";
        echo "</tr>";
        $number++;
    }
    echo "</table>";
?>