<?php
require('../function.php');
include('../template/admin/header.php');
include('../template/admin/sidebar.php');

//surat
$sql = "SELECT COUNT(*) as total_surat FROM pelayanan_surat";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalSurat = $row["total_surat"];
    }
} else {
    $totalSurat = 0;
}

//pengunguman
$sql = "SELECT COUNT(*) as total_pengumuman FROM pengumuman";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalPengumuman = $row["total_pengumuman"];
    }
} else {
    $totalPengumuman = 0;
}

//berita
$sql = "SELECT COUNT(*) as total_berita FROM berita";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalBerita = $row["total_berita"];
    }
} else {
    $totalBerita = 0;
}


//potensiDesa
$sql = "SELECT COUNT(*) as total_potensi FROM potensi_desa";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalPotensi = $row["total_potensi"];
    }
} else {
    $totalPotensi = 0;
}


?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php include('../template/admin/navbar.php') ?>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Data Surat</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalSurat ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Total Data Pengunguman</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalPengumuman ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Data Berita</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalBerita ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-newspaper fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Total Data Potensi Desa</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalPotensi ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-house-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
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