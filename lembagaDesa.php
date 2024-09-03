<?php
$title = "Lembaga Desa";
require('function.php');
include("template/user/header.php");
include("template/user/navbar.php"); ?>

<div class="container">

    <h4 class="mb-3">Lembaga Desa</h4>
    <div class="text-left">
        <table class="table table-striped">
            <thead>
                <th>Nama Lembaga</th>
                <th>Alamat Kantor</th>
            </thead>

            <?php $loop = mysqli_query($koneksi, "select * from tb_lembaga");


            while ($a = mysqli_fetch_array($loop)) { ?>
                <tbody>
                    <tr>

                        <td><?= $a['nama_lembaga'] ?><br> <span class="badge bg-primary"><?= $a['singkatan_nama'] ?></span></td>
                        <td><?= $a['alamat_kantor'] ?><img src="assets/gambar/<?= $a['gambar'] ?>" class="float-end" width="40" alt=""></td>

                    </tr>
                </tbody>
            <?php } ?>

        </table>
    </div>
</div>



<?php include("template/user/footer.php") ?>