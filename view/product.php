
  <h1>Nos vélos</h1>
  <div style="display:flex;gap:16px;flex-wrap:wrap">
    <?php foreach($products as $p): ?>
      <article style="border:1px solid #ddd;padding:12px;width:220px">
        <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['name']) ?>" style="width:100%;height:140px;object-fit:cover">
        <h2><?= htmlspecialchars($p['name']) ?></h2>
        <p>Prix : <?= number_format($p['price'],2,',',' ') ?> €</p>
        <p>
          <a href="?page=produits&velo=<?= $p['id'] ?>">Plus d'infos</a>
        </p>
      </article>
    <?php endforeach; ?>
  </div>
