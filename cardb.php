<?php
require_once('csv-tools.php');
init_set('memory_limit', '-1');

$fileName = 'my-car-db.csv';
$csvData = getCsvData($fileName);
if(empty($csvData)){
    echo("Nem található adat a csv fajban");
    return false;
}
$con = mysqli_connect("localhost","my_user","my_password","my_db");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

mysqli_query($con, "SELECT * FROM Persons");
echo "Affected rows: " . mysqli_affected_rows($con);

mysqli_query($con, "DELETE FROM Persons WHERE Age>32");
echo "Affected rows: " . mysqli_affected_rows($con);

mysqli_close($con);