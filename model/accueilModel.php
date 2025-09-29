<?php

include 'bdd.php';

function getLastProduct(){
    $bdd = Bdd();
    $stmt = $bdd->prepare('SELECT * FROM product ORDER BY id DESC');
    return $stmt->execute();
}
