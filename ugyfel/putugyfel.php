<?php
$azon=$_POST["azon"]; 
$nev=$_POST["nev"];
$szulev=$_POST["szulev"];
$irszam=$_POST["irszam"];
$orsz=$_POST["orsz"];
require_once './databaseconnect.php';
$sql = "UPDATE `ugyfel` SET `azon`='?',`nev`='?',`szulev`='?',`irszam`='?',`orsz`='?' WHERE 1";
$stmt->$conn->prepare($sql);
$stml->bind_param("isiis", $azon, $nev, $szulev, $irszam, $orsz);
if($stmt->execute()){
    http_response_code(201);
    echo 'Sikeresen lett modósítva.';
}else{
    http_response_code(404);
    echo 'Hibás a módosítás';
}