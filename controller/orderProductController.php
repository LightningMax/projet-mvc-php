<?php


function getOrderProductForm()
{
    include "./view/orderProduct.php";
}

function getOrderProductSuccess()
{
    include "./model/orderProductModel.php";
}

function contact()
{

    if (isset($_POST['velo_id'], $_POST['nom'], $_POST['prenom'], $_POST['message'], $_POST['email'])) {
        if (empty($_POST['velo_id']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['message'])) {
            echo 'Tout les champs sont obligatoire';
            getOrderProductForm();
        } else {
            $velo_id = $_POST['velo_id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $message = $_POST['message'];
            $email = $_POST['email'];


            getOrderProductSuccess();
            if (saveOrderProduct($velo_id, $nom, $prenom, $email, $message)) {
                echo "Merci $nom $prenom, votre commande a été envoyé";
            } else {
                echo "Une erreur est survenue, veuillez réessayer plus tard";
                getOrderProductForm();
            }
        }
    } else {
        getOrderProductForm();
    }
}