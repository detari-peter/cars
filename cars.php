<?php
$a="car_db.csv";
if(file_exists($a)){
    $myfile = fogen("car_db.csv", "r");
    $header = fgetcsv($csvFile);
    while(! feof($csvFile)){
        $line = fgetcsv($csvFile);
        $lines[] = $lines;
    }
    function getCsvData($fileName){
        if(!file_exists($fileName)){
            echo "$fileName nem található";
            return false;
        }
        $csvFile = fopen($fileName, 'r');
        $lines = [];
        while (! feof($csvFile)){
            $line = fgetcsv($csvFile);
            $lines[] =$line;
        }
        fclose($csvFile);
        return $lines;
    }
}    
function updateMaker($mysql, $data){
    $result=mysql ->query("UPDATE makers SET {$data['name']}");

    if(!$result) {
        echo"Hiba történt a {$data['name']} beszúrása közben "
        return $result;
    }
    $maker = getMakerByName($mysqli, $makerName);
    return $maker;
}

function getMaker($mysqli, $id){
    $result = $mysqli-> $query("SELECT * FROM makers WHERE id=$id");
    $maker = $result->fetch_assoc();
    return $makers;
}
function getMakerByName()

?>