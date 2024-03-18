<?php
$azon=$_POST["azon"]; 
$nev=$_POST["nev"];
$szulev=$_POST["szulev"];
$irszam=$_POST["irszam"];
$orsz=$_POST["orsz"];
require_once "./databaseconnect.php";
$sql = "INSTERT INTO ugyfel (azon, nev, szulev, irszam, orsz)" VALUES ('$azon', '$nev', '$irszam')
$stmt = $connection->prepare($sql);
$stmt->bind_param("isiis", $azon, $nev, $irszam, $orsz);
if ($stmt->execute()) {
    http_response_code(201);
    echo 'Sikeresen hozzáadva';


