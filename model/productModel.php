<?php

include 'bdd.php';

function getAllProducts() {
    $pdo = Bdd();
    $stmt = $pdo->query("SELECT * FROM product");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getOneProduct($id) {
    $pdo = Bdd();
    return $pdo->query("SELECT * FROM product WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
}