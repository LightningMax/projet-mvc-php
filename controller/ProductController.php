<?php
include_once 'model/productModel.php';

function afficherProduits() {
    $products = getAllProducts();
    include './view/product.php';
}