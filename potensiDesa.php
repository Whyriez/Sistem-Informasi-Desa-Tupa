<?php
$title = "Potensi Desa";
include("template/user/header.php");
include("template/user/navbar.php");
require('function.php');

?>

<div class="">
    <div class="container">
        <h2 class="text-right text-primary mb-2">Potensi Desa</h2>
        <div class="border-bottom border-primary border-1 mb-3"></div>
        <?php $loop = mysqli_query($koneksi, "select * from potensi_desa ORDER BY tanggal DESC");

        while ($a = mysqli_fetch_array($loop)) { ?>
            <div class="d-flex flex-column flex-md-row mb-4">
                <img src="assets/gambar/<?= $a['gambar'] ?>" alt="Gambar" class="responsive-img">
                <div class="m-left">
                    <h5 class="text-primary mb-2"><a href="detail.php?detailPotensi=<?= $a['id'] ?>" style="text-decoration: none;"><?= $a['judul'] ?></a></h5>
                    <div class="d-flex justify-content-between mb-3 mx-auto">
                        <div style="margin-right: 8px;" class="d-flex">
                            <i style="margin-right: 8px;" class="fa fa-calendar text-primary" aria-hidden="true"></i>
                            <h6 class="text-primary mb-0"><?= $a['tanggal'] ?></h6>
                        </div>
                        <div class="d-flex">
                            <i style="margin-right: 8px;" class="fa fa-tags text-primary" aria-hidden="true"></i>
                            <h6 class="text-primary mb-0 ml-2"><?= $a['kategori'] ?></h6>
                        </div>
                    </div>


                    <p>
                        <?= substr($a['deskripsi'], 0, 400); ?>
                        <a href="detail.php?detailPotensi=<?= $a['id'] ?>" style="font-size: 11px; font-weight: 500; padding: 3px 8px; " class=" btn btn-primary"> selengkapnya <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include("template/user/footer.php") ?>