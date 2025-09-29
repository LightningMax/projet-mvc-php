
  <h1>Nos vélos</h1>
  <div style="display:flex; gap:16px; flex-wrap:wrap">
    <?php foreach($products as $p): ?>
      <article style="border:1px solid #ddd; padding:12px; width:220px">
        <img src="<?= $p['image'] ?>" alt="<?= $p['name'] ?>" style="width:100%; height:140px; object-fit:cover">
        <h2><?= $p['name'] ?></h2>
        <p>Prix : <?= $p['price'] ?> €</p>
        <p>
          <a href="index.php?page=velo&id=<?= $p['id'] ?>">Plus d'infos</a>
        </p>
      </article>
    <?php endforeach; ?>
  </div>
