<?php

include 'bdd.php';

function saveMessage($nom, $prenom, $mail, $message){
    $bdd = Bdd();
    $stmt = $bdd->prepare('INSERT INTO contact (nom, prenom, email, message) VALUES(?, ?, ?, ?)');
    return $stmt->execute([$nom, $prenom, $mail, $message]);
}
