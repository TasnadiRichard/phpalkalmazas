<?php
//-- osszes ugyfel adatai JSON-ben
if (count($kereSzoveg) >1) {
    if (is_int($kereSzoveg[1])) {
    $sql ='SELECT * FROM ugyfel WHERE azon=' . $kereSzoveg[1];
    } else {
    http_response_code(404);
    echo 'Nem létező ügyfél';
    }
} else {
    $sql = 'SELECT * FROM ugyfel WHERE 1';
}
require_once './databaseconnect.php';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $ugyfelek = array();
    while ($row = $result->fetch_assoc()) {
        $ugyfelek[] = $row;
    }
    echo json_encode($ugyfelek);
} else {
    http_response_code(404);
    echo 'Nincs egy ügyfél sem';
}