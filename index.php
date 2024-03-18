<!DOCTYPE html>
<!----------------------------------------------------------------
Fogadja az url kéréseket és megválaszolja azokat
GET http://localhost/phpalkalmazas/index.php?ugyfel -> minden ugyfel
GET http://localhost/phpalkalmazas/index.php?ugyfel/(id) -> az adott ugyfel (id) jelenik meg
POST http://localhost/phpalkalmazas/index.php?ugyfel -> letrehoz ugyfel
PUT http://localhost/phpalkalmazas/index.php?ugyfel/(id) -> adott id megvaltoztatasa
DELETE http://localhost/phpalkalmazas/index.php?ugyfel/(id) -> adott id torlese
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tagdíj backend</title>
</head>
<body>
    <pre>
    <?php
//    var_dump($_SERVER['REQUEST_METHOD']);
//    var_dump($_SERVER['QUERY_STRING']);
    $kereSzoveg = explode('/', $_SERVER['QUERY_STRING']);
    if ($kereSzoveg[0]=== "ugyfel") {
        require_once 'ugyfel/index.php';
    } else {
        http_response_code(404);
        echo 'Nincs ilyen API';
    }
    ?>
    </pre> 
</body>
</html>