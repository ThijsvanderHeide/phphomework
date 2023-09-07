<?php
    include_once("Fiets.php");
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");

    if (isset($_POST['inloggen'])) {
        
    }
    $password = password_hash("geheim", PASSWORD_DEFAULT);
    $query = $db->prepare("INSERT INTO userdata(username, password) VALUES('ik', '" . $password . "')");
    if ($query->execute()) {
        echo "Het is gelukt";
    } else {
        echo "Error";
    }

    $fietsen = $db->prepare("SELECT * FROM fietsen");
    $fietsen->execute();
    $result = $fietsen->fetchAll(PDO::FETCH_CLASS, "Fiets");
    echo "<table>";
    foreach($result as &$data) {
        echo "<tr>";
            echo "<td>" . $data->merk . "</td>";
            echo "<td>" . $data->type . "</td>";
            echo "<td>&euro;" . number_format($data->prijs,2,",",".") . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>

<form method="post" action="">

    <label>Username</label>
    <input type="text" name="username">

    <br>

    <label>Password</label>
    <input type="password" name="password">

    <br>

    <input type="submit" name="inloggen" value="Inloggen">
</form>

<style type"text/css">
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }
    td {
        border: 1px solid black;
        width: 100px;
    }