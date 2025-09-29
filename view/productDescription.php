<div>
    <h1><?= $product['name']?></h1>
    <div>
        <p><?= $product['description']?></p>
        <p><?= $product['price']?></p>
        <img src='<?= $product['image']?>' style="width:300px" alt="">
    </div>
    <a href="index.php?page=orderProduct&id=<?=$product['id']?>">Commander</a>
</div>