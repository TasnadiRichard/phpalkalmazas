<?php
$azon = $_POST ["azon"];
$nev = $_POST ["nev"];
$szulev = $_POST ["szulev"];
$irszam = $_POST ["irszam"];
$orszag = $_POST ["orsz"];
require_once './databaseconnect.php';
$sql = "DELETE FROM `ugyfel` WHERE `azon`='?'";
$stmt->$connection->prepare($sql);
$stml->bind_param("isiis", $azon, $nev, $szulev, $irszam, $orsz);
if($stmt->execute()){
    http_response_code(201);
    echo 'Sikeresen lett törölve.';
}else{
    http_response_code(404);
    echo 'Nem sikerült törölni még.';
}