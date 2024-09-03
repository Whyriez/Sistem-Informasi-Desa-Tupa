<?php
$title = "Demografi Desa";
require('function.php');
include("template/user/header.php");
include("template/user/navbar.php");


$sql = "SELECT * FROM tb_penduduk";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $jumlahLaki = $row["jumlah_laki"];
        $jumlahPerempuan = $row["jumlah_perempuan"];
        $totalPenduduk = $row["total_penduduk"];
        $jumlahKepala = $row["jumlah_kepala"];
    }
} else {
    $id = 0;
    $jumlahLaki = 0;
    $jumlahPerempuan = 0;
    $totalPenduduk = 0;
    $jumlahKepala = 0;
}

?>

<div class="container">

    <h4 class="mb-3">Demografi Desa Tupa</h4>
    <div class=" d-flex justify-content-center">
        <img src="assets/img/KantorDesa.jpg" class="w-100 mb-3" alt="">
    </div>
    <div class="text-left">
        <h6 class="text-uppercase">JUMLAH PENDUDUK DESA TUPA TAHUN 2021</h6>


        <table class="table table-bordered">
            <thead>
                <th colspan="2">A. Jumlah</th>
            </thead>
            <tbody>
                <?php $loop = mysqli_query($koneksi, "SELECT * from tb_penduduk");
                $id = 1;

                while ($a = mysqli_fetch_array($loop)) { ?>
                    <tr>
                        <td>Jumlah laki-laki</td>
                        <td><?= $a['jumlah_laki'] ?> orang</td>
                    </tr>
                    <tr>
                        <td>Jumlah perempuan</td>
                        <td><?= $a['jumlah_perempuan'] ?> orang</td>
                    </tr>
                    <tr>
                        <td>Jumlah total</td>
                        <td><?= $a['total_penduduk'] ?> orang</td>
                    </tr>
                    <tr>
                        <td>Jumlah kepala keluarga</td>
                        <td><?= $a['jumlah_kepala'] ?> KK</td>
                    </tr>
                <?php $id++;
                } ?>
            </tbody>
        </table>
    </div>
</div>



<?php include("template/user/footer.php") ?>