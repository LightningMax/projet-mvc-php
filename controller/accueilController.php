<?php

include "./model/accueilModel.php";

function accueil(){
    $lastProduct = getLastProduct();
    include_once('view/accueil.php');
} 