<?php

include 'bdd.php';
function getAllProducts() {
    $pdo = Bdd();
    $stmt = $pdo->query("SELECT * FROM product");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}