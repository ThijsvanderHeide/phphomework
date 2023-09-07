
<form method="post" action="">
    <select name="provincie">  
        <option value="Select">Selecteer een Provincië</option>}  
        <option value="NH">Noord-Holland</option>  
        <option value="ZH">Zuid-Holland</option>
    </select>
    <br>
    <input type="submit" name="button" value="Laat Steden Zien">
</form>

<?php
    include_once("Provincie.php");
    $db = new PDO("mysql:host=localhost;dbname=provincies", "root", "");
    $dbprov = $db->prepare("SELECT * FROM provincie");
    $dbprov->execute();
    $result = $dbprov->fetchAll(PDO::FETCH_CLASS, "Provincie");

    if (isset($_POST['button'])) {
        $prov = $_POST['provincie'];

        switch ($prov) {
            case 'NH':
                foreach($result as &$data) {
                echo $data->id;
                echo $data->naam;
                }
        }
    }