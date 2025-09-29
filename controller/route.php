<?php

$page = (isset($_GET['page']) ? $_GET['page'] : 'accueil');

switch($page) {
    case 'accueil':
        include_once('view/accueil.php');
        break;
    case 'orderProduct':
        include_once('view/orderProduct.php');
        break;

    default:
        echo "<h1>Erreur 404 cette page est introuvable ou inexistante</h1>";
        echo "<strong>contactez l'administrateur du site<strong>";
        break;
}