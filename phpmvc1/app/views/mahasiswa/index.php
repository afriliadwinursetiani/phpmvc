<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="..views/home/index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="..views/about/index.php">About</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" href="..views/mahasiswa/index.php">Mahasiswa</a>
  </li>

</ul>
<h1><?= $judul; ?></h1>

<ul>
<?php foreach($mhs as $row) : ?>
    <li>
        ID: <?= $row['id']; ?><br>
        Nama: <?= $row['nama']; ?><br>
        NIM: <?= $row['nim']; ?><br>
        Jurusan: <?= $row['jurusan']; ?>
    </li>
    <hr>
<?php endforeach; ?>
</ul>
