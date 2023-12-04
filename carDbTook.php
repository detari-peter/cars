<?php
use Exception;

class MakersDbTools {
    const DBTABLE = 'makers';
    private $mysqli;

    function __construct($host = 'localhost', $user = 'root', $password = null, $db = 'cars'){
        $this->myqli = new mysqli($host, $user, $password, $db);
        if ($this->mysqli->connect_errno){
            throw new Exception($this->mysqli->connect_errno);
        }
    }
    function __destruct(){
        $this->mysqli->close();
    }
    function getMaker($mysqli, $id){
        $result = $mysqli-> $query("SELECT * FROM makers WHERE id=$id");
        $maker = $result->fetch_assoc();
        return $makers;
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
}