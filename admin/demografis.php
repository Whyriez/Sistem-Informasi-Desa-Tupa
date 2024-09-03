<?php
require('../function.php');
include('../template/admin/header.php');
include('../template/admin/sidebar.php');


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
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php include('../template/admin/navbar.php') ?>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Data Demografis</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Demografis</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <table class="table table-bordered" width="100%">
                                <thead>
                                    <th colspan="2">A. Jumlah</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jumlah laki-laki</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <input type="text" name="jml_laki" value="<?= $jumlahLaki ?>" class="form-control w-25 mr-2" id="jml_laki" aria-describedby="emailHelp" required>
                                                orang
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah perempuan</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <input type="text" name="jml_perempuan" class="form-control w-25 mr-2" value="<?= $jumlahPerempuan ?>" id="jml_perempuan" aria-describedby="emailHelp" required>
                                                orang
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah total</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <input type="text" name="jml_tot_penduduk" class="form-control w-25 mr-2" value="<?= $totalPenduduk ?>" id="jml_tot_penduduk" aria-describedby="emailHelp" required>
                                                orang
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah kepala keluarga</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <input type="text" name="jml_kepala" value="<?= $jumlahKepala ?>" class="form-control w-25 mr-2" id="jml_kepala" aria-describedby="emailHelp" required>
                                                KK
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                <button type="submit" name="ubahDemografis" class="btn btn-primary">Ubah Demografis</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Desa Tupa 2023</span>
            </div>
        </div>
    </footer>

</div>



<?php include('../template/admin/footer.php') ?>