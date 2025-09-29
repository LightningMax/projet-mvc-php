<?php
include './model/bdd.php';

function saveOrderProduct($product_id, $nom, $prenom, $email, $message)
{
    $bdd = Bdd();
    $stmt = $bdd->prepare(
        "INSERT INTO orderProduct (product_id, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)"
    );
    return $stmt->execute([$product_id, $nom, $prenom, $email, $message]);
}
