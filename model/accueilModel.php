<?php

include 'bdd.php';

function getLastProduct(){
    $bdd = Bdd();
    return $bdd->query('SELECT * FROM product ORDER BY id DESC')->fetch(PDO::FETCH_ASSOC);
}
