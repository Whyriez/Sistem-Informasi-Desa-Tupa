<?php
require('function.php');
if (isset($_GET['detail'])) {
    $title = "Detail Berita";
    $idBerita = $_GET['detail'];
    $query = mysqli_query($koneksi, "SELECT * FROM berita WHERE id = $idBerita");
    $berita = mysqli_fetch_assoc($query);
} else if (isset($_GET['detailPotensi'])) {
    $title = "Detail Potensi Desa";
    $idPotensi = $_GET['detailPotensi'];
    $query = mysqli_query($koneksi, "SELECT * FROM potensi_desa WHERE id = $idPotensi");
    $potensi = mysqli_fetch_assoc($query);
} else if (isset($_GET['pengumuman'])) {
    $title = "Detail Pengumuman";
    $idPengumuman = $_GET['pengumuman'];
    $query = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id = $idPengumuman");
    $pengumuman = mysqli_fetch_assoc($query);
}


include("template/user/header.php");
include("template/user/navbar.php");



?>

<div class="container">
    <?php if (isset($_GET['detail'])) : ?>
        <h4 class="mb-3"><?= $berita['judul']; ?></h4>
        <img src="assets/gambar/<?= $berita['gambar']; ?>" class="w-100 mb-3" alt="">
        <p><?= $berita['deskripsi']; ?></p>
    <?php elseif (isset($_GET['detailPotensi'])) : ?>
        <h4 class="mb-3"><?= $potensi['judul']; ?></h4>
        <div class="d-flex w-25 justify-content-between mb-3">
            <div class="d-flex align-items-center">
                <i style="margin-right: 8px;" class="fa fa-calendar text-primary" aria-hidden="true"></i>
                <h6 class="text-primary mb-0"><?= $potensi['tanggal'] ?></h6>
            </div>
            <div class="d-flex align-items-center">
                <i style="margin-right: 8px;" class="fa fa-tags text-primary" aria-hidden="true"></i>
                <h6 class="text-primary mb-0 ml-2"><?= $potensi['kategori'] ?></h6>
            </div>
        </div>
        <!-- <div class=" d-none d-lg-inline">
            <img src="assets/gambar/<?= $potensi['gambar']; ?>" class="w-50 mb-3" alt="">
        </div> -->
        <!-- <img src="assets/gambar/<?= $potensi['gambar']; ?>" class="w-100 mb-3 d-lg-none" alt="">
        <div class="d-flex justify-content-center d-none d-lg-inline">
            <img src="assets/gambar/<?= $potensi['gambar']; ?>" class="w-50 mb-3 " alt="">
        </div> -->
        <p><?= $potensi['deskripsi']; ?></p>
    <?php elseif (isset($_GET['pengumuman'])) : ?>
        <h4 class="mb-3"><?= $pengumuman['judul']; ?></h4>
        <img src="assets/gambar/<?= $pengumuman['gambar']; ?>" class="w-100 mb-3" alt="">
        <p><?= $pengumuman['deskripsi']; ?></p>
    <?php else : ?>
        <h2 class="text-left text-primary mb-2">Halaman Tidak Ditemukan</h2>
    <?php endif; ?>
</div>



<?php include("template/user/footer.php") ?>