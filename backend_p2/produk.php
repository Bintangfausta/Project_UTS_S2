<?php
require_once 'header.php';
?>

<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Data Produk</h3>
        <a class="btn btn-primary" href="form_produk.php">Tambah Produk</a>
      </div>

      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Accordion
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <section class="section">
    <div class="row">

      <div class="card">
        <div class="card-header">

        </div>
        <div class="card">
          <?php
          require_once 'dbkoneksi.php';
          ?>
          <?php
          $sql = "SELECT * FROM produk";
          $rs = $dbh->query($sql);
          ?>
          <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Produk</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Minimal Stok</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $nomor  = 1;
              foreach ($rs as $row) {
              ?>
                <tr>
                  <td><?= $nomor ?></td>
                  <td><?= $row['kode'] ?></td>
                  <td><?= $row['nama'] ?></td>
                  <td><?= $row['harga_jual'] ?></td>
                  <td><?= $row['harga_beli'] ?></td>
                  <td><?= $row['stok'] ?></td>
                  <td><?= $row['min_stok'] ?></td>
                  <td><?= $row['deskripsi'] ?></td>
                  <td><?= $row['kategori_produk_id'] ?></td>
                  <td>
                    <a class="btn btn-success" href="detail_produk.php?id=<?= $row['id'] ?>">Detail</a>
                    <a class="btn btn-danger" href="edit_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-warning" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                  </td>
                </tr>
              <?php
                $nomor++;
              }
              ?>
            </tbody>

          </table>
        </div>


      </div>
    </div>



</div>
</section>
</div>

<?php
require_once 'footer.php';
?>