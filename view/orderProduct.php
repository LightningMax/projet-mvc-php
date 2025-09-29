<h1>Commander un produit</h1>
<form action="submit_order.php" method="post">
    <select name="product_id" id="velo" required>
        <option value="">Sélectionnez un vélo</option>
        <option value="1">Bike One</option>
        <option value="2">Bike 22</option>
        <option value="3">Bike First</option>
        <option value="4">Bike 5</option>
    </select> <br>
    <input type="text" name="nom" placeholder="Nom" required> <br>
    <input type="text" name="prenom" placeholder="Prénom" required> <br>
    <input type="email" name="email" placeholder="Email@email.mail" required> <br>
    <textarea name="message" placeholder="Message"></textarea> <br>
    <button type="submit">Submit</button>
</form>
