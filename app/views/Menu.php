<header style="margin-top:55px;padding-top:10px">
  <?php foreach($data['product']['menu'] as $row) : ?>
  <ul>
    <li><?= $row['nama']; ?></li>
    <li><?= $row['harga']; ?></li>
    <li><?= $row['deskripsi']; ?></li>
  </ul>
  <?php endforeach; ?>
</header>