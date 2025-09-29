<h1>Accueil</h1>

<h2>Dernier produit</h2>

<h3><?= $lastProduct['name']?></h3>

<div>
    <p><?= $lastProduct['description']?></p>
    <p><?= $lastProduct['price']?></p>
    <img src='<?= $lastProduct['image']?>' style="width:300px" alt="">
</div>