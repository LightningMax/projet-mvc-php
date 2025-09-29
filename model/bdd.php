<?php

function Bdd(): PDO {
    $host = 'localhost';
    $db = 'smartbike';
    $user = 'test';
    $pass = 'test';
    
    return new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
}
