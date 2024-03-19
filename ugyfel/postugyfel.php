<?php
// Összes ügyfél adatai JSON
$sql = '';
if(count($kereSzoveg) > 1){
    if(is_int(intval($kereSzoveg[1]))){
        $sql = "INSERT INTO `ugyfel` (azon, nev, szulev, irszam, orsz)VALUES(?, ?, ?, ?, ?, ?)" . $kereSzoveg[1];
    }else{
        http_response_code(404);
        echo 'Nem létező ügyfél.';
    }
}else{
    $sql = "INSERT INTO `ugyfel` (azon, nev, szulev, irszam, orsz)VALUES(?, ?, ?, ?, ?, ?)";
}
require_once './databaseconnect.php';
$result = $connection->query($sql);
if($result->num_rows > 0){
    $ugyfelek = array();
    while($row = $result->fetch_assoc()){
        $ugyfelek[] = $row;
    }
    http_response_code(200);
    echo json_encode($ugyfelek);
}else{
    http_response_code(404);
    echo 'Nem létező ügyfél.';
}