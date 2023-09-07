<style type="text/css">
    body {
        background-color: white;
    }
</style>

<form method="post" action="">
    <input type="radio" name="kleur" value="Rood"> Rood
    <input type="radio" name="kleur" value="Blauw"> Blauw
    <input type="radio" name="kleur" value="Groen"> Groen
    <br>
    <input type="submit" name="button" value="Verander de Kleur">
</form>

<?php
    if (isset($_POST['button'])) {
        $kleur = $_POST['kleur'];
        switch ($kleur) {
            case 'Rood':
                    echo '<body style="background-color:red">';
                break;
            case 'Blauw':
                    echo '<body style="background-color:blue">';
                break;
            case 'Groen':
                    echo '<body style="background-color:green">';
                break;
            
            default:
                
                break;
        }
    }