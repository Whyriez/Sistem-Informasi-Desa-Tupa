<?php
$title = "Pengumuman";
require('function.php');
include("template/user/header.php");
include("template/user/navbar.php");
?>

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-right text-primary mb-2" style="font-size:25px;">Pengumuman</h2>

                <div class="border-bottom border-primary border-1 mb-3"></div>
                <?php
                $loop = mysqli_query($koneksi, "SELECT * FROM pengumuman");
                while ($a = mysqli_fetch_array($loop)) { ?>
                    <div class="d-flex flex-column flex-md-row mb-4">
                        <img src="assets/gambar/<?= $a['gambar'] ?>" alt="Gambar" class="responsive-img mr-3">

                        <div class="m-left">
                            <h5 class="text-primary mb-1" style="font-size: 18px; font-weight:bold;"> <a style="text-decoration: none;" href="detail.php?pengumuman=<?= $a['id'] ?>"><?= $a['judul'] ?></a></h5>
                            <i class=" fa fa-calendar text-primary" aria-hidden="true" style="font-size: 14px;"></i>
                            <i class="text-primary " style="font-size: 14px;"><?= $a['tanggal'] ?></h3></i>
                            <i class="fa fa-user text-primary ms-2" aria-hidden=" true" style="font-size: 14px;"></i>
                            <i class="text-primary" style=" font-size: 14px;">Admin Desa Keru</i>


                            <p><?= substr($a['deskripsi'], 0, 200); ?> <a href="detail.php?pengumuman=<?= $a['id'] ?>" style="font-size: 11px; font-weight: 500; padding: 3px 8px; " class=" btn btn-primary"> selengkapnya <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                <?php } ?>






            </div>
        </div>
    </div>
</div>


<?php include("template/user/footer.php") ?>