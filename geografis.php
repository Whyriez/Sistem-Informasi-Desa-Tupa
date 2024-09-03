<?php
$title = "Geografis";
require('function.php');
include("template/user/header.php");
include("template/user/navbar.php"); ?>

<div class="container">

    <h4 class="mb-3">Geografis Desa Tupa</h4>
    <div class=" d-flex justify-content-center">
        <img src="assets/img/Peta Desa Tupa.jpg" class="w-100 mb-3" alt="">
    </div>
    <div class="text-left">
        <h6 class="text-uppercase">Letak Wilayah</h6>
        <p>Tupa adalah sebuah desa, atau wilayah administratif tingkat IV setingkat desa di Kecamatan Bulango Utara, Kabupaten Bone Bolango, Provinsi Gorontalo :</p>

        <table class="table table-bordered">
            <thead>
                <th>Batas</th>
                <th>Desa/Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
            </thead>
            <?php $loop = mysqli_query($koneksi, "SELECT * from tb_letak_wilayah");
            $id = 1;

            while ($a = mysqli_fetch_array($loop)) { ?>
                <tbody>
                    <tr>
                        <td><?= $a['batas'] ?></td>
                        <td><?= $a['desa'] ?></td>
                        <td><?= $a['kecamatan'] ?></td>
                        <td><?= $a['kabupaten'] ?></td>
                    </tr>
                <?php $id++;
            } ?>
                </tbody>
        </table>
    </div>
    <div class="text-left">
        <h6 class="text-uppercase">Luas Wilayah</h6>


        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Peruntukan</th>
                <th>Luas ( H a )</th>
                <th>Keterangan</th>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                </tr>
                <?php $loop = mysqli_query($koneksi, "SELECT * from tb_luas_wilayah");
                $id = 1;

                while ($a = mysqli_fetch_array($loop)) { ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $a['peruntukan'] ?></td>
                        <td><?= $a['luas'] ?></td>
                        <td><?= $a['keterangan'] ?></td>
                        <td></td>
                    </tr>
                <?php $id++;
                } ?>
            </tbody>
        </table>


    </div>
</div>



<?php include("template/user/footer.php") ?>