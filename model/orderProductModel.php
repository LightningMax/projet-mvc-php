<?php
include './model/bdd.php';

function saveOrderProduct($velo_id, $nom, $prenom, $email, $message)
{
    $bdd = Bdd();
    $stmt = $bdd->prepare("INSERT INTO contact ($velo_id, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$velo_id, $nom, $prenom, $email, $message]);
}