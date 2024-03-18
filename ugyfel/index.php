<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (count($kereSzoveg)>1) {
            $sql='SELECT * FROM ugyfel WHERE azon='.$kereSzoveg[1];
        }
        
        require_once '';

        break;

        default:
        break;
}