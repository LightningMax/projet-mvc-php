<?php
$selectedId = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : '';
?>

<h1>Commander un produit</h1>
<form action="" method="post">
    <select name="product_id" id="velo" required>
        <option value="">Sélectionnez un vélo</option>
        <option value="4" <?= $selectedId == 1 ? 'selected' : '' ?>>Bike 5</option>
        <option value="1" <?= $selectedId == 2 ? 'selected' : '' ?>>Bike One</option>
        <option value="2" <?= $selectedId == 3 ? 'selected' : '' ?>>Bike 22</option>
        <option value="3" <?= $selectedId == 4 ? 'selected' : '' ?>>Bike First</option>
    </select> <br>
    <input type="text" name="nom" placeholder="Nom" required> <br>
    <input type="text" name="prenom" placeholder="Prénom" required> <br>
    <input type="email" name="email" placeholder="Email@email.mail" required> <br>
    <textarea name="message" placeholder="Message"></textarea> <br>
    <button type="submit">Submit</button>
</form>
