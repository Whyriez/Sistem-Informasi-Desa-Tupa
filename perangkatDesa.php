<?php
$title = "Perangkat Desa";
include("template/user/header.php");
require('function.php');
include("template/user/navbar.php"); ?>

<div class="container">

    <h4 class="mb-3">Perangkat Desa</h4>
    <div class="text-left row justify-content-center gap-3 mb-5">
        <?php $loop = mysqli_query($koneksi, "select * from tb_perangkat_desa");
        while ($a = mysqli_fetch_array($loop)) { ?>
            <div class="card" style="width: 14rem;">
                <img src="assets/gambar/<?= $a['gambar'] ?>" class="card-img-top" alt="perangkat">
                <div class="card-body">
                    <a href="#" style="text-decoration: none;" class="card-title text-center text-dark">
                        <h6><?= $a['nama'] ?></h6>
                        <p><?= $a['jabatan'] ?></p>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>



<?php include("template/user/footer.php") ?>