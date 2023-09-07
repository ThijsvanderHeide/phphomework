<?php
    $artikel = 180;

    if ($artikel > 150) {
        $artikel = $artikel * 1.19;
    } else if ($artikel < 55) {
        $artikel = $artikel * 1.11;
    } else {
        $artikel = $artikel * 1.16;
    }

    echo $artikel;