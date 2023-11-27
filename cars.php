<?php
$a="car_db.csv";
if(file_exists($a)){
    $myfile = fogen("car_db.csv", "r");
    $header = fgetcsv($csvFile);
    while(! feof($csvFile)){
        $line = fgetcsv($csvFile);
        $lines[] = $lines;
    }
    fclose($csvFile);
}

?>