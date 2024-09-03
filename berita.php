<?php
$title = "Berita";
include("template/user/header.php");
include("template/user/navbar.php");
require('function.php');

?>

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-right text-primary mb-2" style="font-size:25px;">Berita <?php if (isset($_GET['cari'])) echo '"' . $_GET['cari'] . '"' ?></h2>
                <div class="border-bottom border-primary border-1 mb-3"></div>
                <?php $loop = mysqli_query($koneksi, "select * from berita");
                if (isset($_GET['cari'])) {
                    $keyword = $_GET['cari'];
                    $query = "SELECT * FROM berita WHERE judul LIKE '%$keyword%' OR deskripsi LIKE '%$keyword%'";
                    $loop = mysqli_query($koneksi, $query);
                }
                while ($a = mysqli_fetch_array($loop)) { ?>
                    <div class="d-flex flex-column flex-md-row mb-4">
                        <img src="assets/gambar/<?= $a['gambar'] ?>" alt="Gambar" class="responsive-img ">
                        <div class="m-left">
                            </svg>
                            <h5 class="text-primary mb-2"><a href="detail.php?detail=<?= $a['id'] ?>" style="text-decoration: none;"><?= $a['judul'] ?></a></h5>
                            <i class=" fa fa-calendar text-primary" aria-hidden="true" style="font-size: 14px;"></i>
                            <i class="text-primary" style="font-size: 14px;"><?= $a['tanggal'] ?></i>
                            <i class="fa fa-user text-primary ms-2" aria-hidden=" true" style="font-size: 14px;"></i>
                            <i class="text-primary" style=" font-size: 14px;">Admin Desa Tupa</i>

                            <p>
                                <?= substr($a['deskripsi'], 0, 300); ?> <a href="detail.php?detail=<?= $a['id'] ?>" style="font-size: 11px; font-weight: 500; padding: 3px 8px; " class=" btn btn-primary"> selengkapnya <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4">
                <form action="" method="GET">
                    <div class="input-group" style="display:flex; align-items:center;">
                        <div class="form-outline">
                            <input type="search" id="form1" value="<?php if (isset($_GET['cari'])) echo $_GET['cari'] ?>" class="form-control" name="cari" placeholder="Search" />
                        </div>
                        <button type="submit" class="btn btn-primary" style="height: 35px; width: 50px; display: flex; align-items:center; justify-content:center;">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("template/user/footer.php") ?>