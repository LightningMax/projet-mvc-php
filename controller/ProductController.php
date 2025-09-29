<?php
include_once 'model/productModel.php';

function afficherProduits() {
    $products = getAllProducts();
    include './view/product.php';
}

function afficherProduit() {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $product = getOneProduct($id);
        include_once('view/productDescription.php');
    }
}