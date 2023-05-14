<?php
require_once 'header.php';
?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Produk</h3>
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
                    $_id = $_GET['id'];
                    $sql = "SELECT * FROM produk WHERE id=?";
                    $st = $dbh->prepare($sql);
                    $st->execute([$_id]);
                    $row = $st->fetch();
                    ?>
                    <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td><?= $row['id'] ?></td>
                            </tr>
                            <tr>
                                <td>Kode</td>
                                <td><?= $row['kode'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Produk</td>
                                <td><?= $row['nama'] ?></td>
                            </tr>
                            <tr>
                                <td>Harga Jual</td>
                                <td><?= $row['harga_jual'] ?></td>
                            </tr>
                            <tr>
                                <td>Harga Beli</td>
                                <td><?= $row['harga_beli'] ?></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><?= $row['stok'] ?></td>
                            </tr>
                            <tr>
                                <td>Minimum Stok</td>
                                <td><?= $row['min_stok'] ?></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td><?= $row['deskripsi'] ?></td>
                            </tr>
                            <tr>
                                <td>Kategori Produk</td>
                                <td><?= $row['kategori_produk_id'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <?php
require_once 'footder.php';
?>