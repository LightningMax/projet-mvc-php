<?php
include 'model/contactModel.php';


function getContactForm() {
    include "./view/contact.php";
}

function contact(){

    if (isset($_POST['nom'],$_POST['prenom'], $_POST['message'], $_POST['mail'])){
        if (empty($_POST['nom']) || empty($_POST['message']) || empty($_POST['mail'])){
            echo 'Tout les champs sont obligatoire';
            getContactForm();
            
        }else {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $message = $_POST['message'];
            $mail = $_POST['mail'];
            if (saveMessage($nom, $prenom, $mail, $message) === false)
            {
                echo "Erreur lors de l'enregistrement du message";
                getContactForm();
                return;
            }else{

            echo "Merci $prenom $nom, votre message est envoyé";
            }

        }
    }else {
        getContactForm();
    }
}