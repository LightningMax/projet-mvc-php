<?php


function getOrderProductForm()
{
    include "./view/orderProduct.php";
}

function getOrderProductSuccess()
{
    include "./model/orderProductModel.php";
}

function orderProduct()
{

    if (isset($_POST['product_id'], $_POST['nom'], $_POST['prenom'], $_POST['message'], $_POST['email'])) {
        if (empty($_POST['product_id']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['message'])) {
            echo 'Tout les champs sont obligatoire';
            getOrderProductForm();
        } else {
            $product_id = $_POST['product_id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $message = $_POST['message'];
            $email = $_POST['email'];


            getOrderProductSuccess();
            if (saveOrderProduct($product_id, $nom, $prenom, $email, $message)) {
                echo "<h1>Merci $nom $prenom, votre commande a bien été envoyé </h1><br>";
                header("Refresh:3; url=index.php?page=orderProduct");
                echo "Redirection vers la liste des produits dans 3 secondes...";
            } else {
                echo "Une erreur est survenue, veuillez réessayer plus tard";
                getOrderProductForm();
            }
        }
    } else {
        getOrderProductForm();
    }
}