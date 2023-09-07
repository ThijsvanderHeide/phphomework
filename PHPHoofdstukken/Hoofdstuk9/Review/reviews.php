<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="post" action="">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Naam</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="name" name="name" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="message" class="col-4 col-form-label">Bericht</label> 
    <div class="col-8">
      <textarea id="message" name="message" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
include_once("Review.php");
if (isset($_POST['submit'])) {
    $naam = $_POST['name'];
    $message = $_POST['message'];
    $db = new PDO("mysql:host=localhost;dbname=berichten", "root", "");
    $query = $db->prepare("INSERT INTO berichten (id, naam, bericht, datumtijd) VALUES (NULL, '$naam', '$message', current_timestamp());");
    $query->execute();
    
    $fietsen = $db->prepare("SELECT * FROM berichten");
    $fietsen->execute();
    $result = $fietsen->fetchAll(PDO::FETCH_CLASS, "Review");
    echo "<table>";
    foreach($result as &$data) {
        echo "<tr>";
            echo "<td>" . $data->naam . "</td>";
            echo "<td>" . $data->bericht . "</td>";
            echo "<td>" . $data->datumtijd . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>