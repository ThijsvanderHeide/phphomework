<form method="post" action="">
    <input type="text" name="kosten">
    <br>
    <input type="radio" name="btw" value="9%">Laag 9%
    <input type="radio" name="btw" value="21%">Hoog 21%
    <br>
    <input type="submit" name="uitrekenen" value="Uitrekenen">
</form>

<?php
    if (isset($_POST['uitrekenen'])) {
        $kosten = $_POST['kosten'];
        $btw = $_POST['btw'];
        if ($btw == '9%') {
            echo "Met BTW is €" . $kosten * 1.09;
        };
        if ($btw == '21%') {
            echo "Met BTW is €" . $kosten * 1.21;
        };
    };