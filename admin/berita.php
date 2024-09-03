<?php
require('../function.php');
include('../template/admin/header.php');
include('../template/admin/sidebar.php');
?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php include('../template/admin/navbar.php') ?>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Data Berita</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Berita</h6>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Berita</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $loop = mysqli_query($koneksi, "select * from berita");

                                while ($a = mysqli_fetch_array($loop)) { ?>
                                    <tr>
                                        <td> <img src="../assets/gambar/<?= $a['gambar'] ?>" width="50" height="50" alt=""></td>
                                        <td><?= $a['judul'] ?></td>
                                        <td><?= $a['deskripsi'] ?></td>
                                        <td><?= $a['tanggal'] ?></td>
                                        <td>
                                            <button type="button" data-toggle="modal" data-target="#modalEdit<?= $a['id'] ?>" class="btn btn-primary btn-sm">Edit</button>
                                            <a href="../function.php?hapus=<?= $a['id'] ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
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

    <!-- Modal Tambah-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Gambar</label>
                            <input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="tambahBerita" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal Edit-->
    <?php $loop = mysqli_query($koneksi, "select * from berita");

    while ($a = mysqli_fetch_array($loop)) {
        $deskripsi = preg_replace("/<br\s*\/?>/", " ", $a['deskripsi']);

    ?>
        <div class="modal fade" id="modalEdit<?= $a['id'] ?>" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditLabel">Perbarui Berita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="id" value="<?= $a['id'] ?>">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" value="<?= $a['judul'] ?>" id="judul" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"> <?= htmlspecialchars($deskripsi) ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Gambar</label>
                                <input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1">
                                <img src="../assets/gambar/<?= $a['gambar'] ?>" width="100" class="mt-2" height="100" alt="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" name="ubahBerita" class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>


</div>



<?php include('../template/admin/footer.php') ?>