<form method="post" action="">
    <input type="text" name="getal1"> Getal 1
    <br>
    <input type="radio" name="som" value="Optellen"> Optellen
    <input type="radio" name="som" value="Aftrekken"> Aftrekken
    <input type="radio" name="som" value="Verminigvuldigen"> Vermenigvuldigen
    <input type="radio" name="som" value="Delen"> Delen
    <br>
    <input type="text" name="getal2"> Getal 2
    <br>
    <input type="submit" name="bereken" value="Bereken">
</form>

<?php
    if (isset($_POST['bereken'])) {
        $getal1 = $_POST['getal1'];
        $getal2 = $_POST['getal2'];
        $som = $_POST['som'];
        switch ($som) {
            case 'Optellen':
                echo $getal1 + $getal2;
                break;
            case 'Aftrekken':
                echo $getal1 - $getal2;
                break;
            
            case 'Verminigvuldigen':
                echo $getal1 * $getal2;
                break;
            
            case 'Delen':
                echo $getal1 / $getal2;
                break;
              
            default:
                echo "Error";
                break;
        }
    }