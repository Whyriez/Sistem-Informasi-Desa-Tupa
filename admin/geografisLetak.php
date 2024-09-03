<?php
require('../function.php');
include('../template/admin/header.php');
include('../template/admin/sidebar.php');
?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php include('../template/admin/navbar.php') ?>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Data Geografis Letak Wilayah</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Letak Wilayah</h6>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalLetak">Tambah Letak Wilayah</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Batas</th>
                                    <th>Desa/Kelurahan</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $loop = mysqli_query($koneksi, "select * from tb_letak_wilayah");

                                while ($a = mysqli_fetch_array($loop)) { ?>
                                    <tr>
                                        <td><?= $a['batas'] ?></td>
                                        <td><?= $a['desa'] ?></td>
                                        <td><?= $a['kecamatan'] ?></td>
                                        <td><?= $a['kabupaten'] ?></td>
                                        <td>
                                            <button type="button" data-toggle="modal" data-target="#modalEdit<?= $a['id'] ?>" class="btn btn-primary btn-sm">Edit</button>
                                            <a href="../function.php?hapusLetak=<?= $a['id'] ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Batas</th>
                                    <th>Desa/Kelurahan</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
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
    <div class="modal fade" id="modalLetak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Letak Wilayah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="batas">Batas</label>
                            <input type="text" name="batas" class="form-control" id="batas" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="desa">Desa/Kelurahan</label>
                            <input type="text" name="desa" class="form-control" id="desa" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" id="kecamatan" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="kabupaten">Kabupaten</label>
                            <input type="text" name="kabupaten" class="form-control" id="kabupaten" aria-describedby="emailHelp" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="tambahLetak" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Modal Edit-->
    <?php $loop = mysqli_query($koneksi, "select * from tb_letak_wilayah");

    while ($a = mysqli_fetch_array($loop)) { ?>
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
                                <label for="batas">Batas</label>
                                <input type="text" name="batas" class="form-control" id="batas" value="<?= $a['batas'] ?>" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="desa">Desa/Kelurahan</label>
                                <input type="text" name="desa" class="form-control" id="desa" value="<?= $a['desa'] ?>" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" value="<?= $a['kecamatan'] ?>" id="kecamatan" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="kabupaten">Kabupaten</label>
                                <input type="text" name="kabupaten" class="form-control" value="<?= $a['kabupaten'] ?>" id="kabupaten" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" name="ubahLetak" class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>


</div>



<?php include('../template/admin/footer.php') ?>