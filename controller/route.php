<?php

$page = (isset($_GET['page']) ? $_GET['page'] : 'accueil');

switch($page) {
    case 'accueil':
        include_once('view/accueil.php');
        break;
    case 'contact':
        include "./controller/contactController.php";
        contact();
        break;
}