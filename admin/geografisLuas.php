<?php
require('../function.php');
include('../template/admin/header.php');
include('../template/admin/sidebar.php');
?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php include('../template/admin/navbar.php') ?>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Data Geografis Luas Wilayah</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Luas Wilayah</h6>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalLetak">Tambah Luas Wilayah</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Peruntukan</th>
                                    <th>Luas</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $loop = mysqli_query($koneksi, "select * from tb_luas_wilayah");

                                while ($a = mysqli_fetch_array($loop)) { ?>
                                    <tr>
                                        <td><?= $a['peruntukan'] ?></td>
                                        <td><?= $a['luas'] ?></td>
                                        <td><?= $a['keterangan'] ?></td>
                                        <td>
                                            <button type="button" data-toggle="modal" data-target="#modalEdit<?= $a['id'] ?>" class="btn btn-primary btn-sm">Edit</button>
                                            <a href="../function.php?hapusLuas=<?= $a['id'] ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Peruntukan</th>
                                    <th>Luas</th>
                                    <th>Keterangan</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Luas Wilayah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="peruntukan">Peruntukan</label>
                            <input type="text" name="peruntukan" class="form-control" id="peruntukan" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="luas">Luas</label>
                            <input type="text" name="luas" class="form-control" id="luas" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" aria-describedby="emailHelp">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="tambahLuas" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Modal Edit-->
    <?php $loop = mysqli_query($koneksi, "select * from tb_luas_wilayah");

    while ($a = mysqli_fetch_array($loop)) { ?>
        <div class="modal fade" id="modalEdit<?= $a['id'] ?>" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditLabel">Perbarui Luas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="id" value="<?= $a['id'] ?>">
                            <div class="form-group">
                                <label for="peruntukan">Peruntukan</label>
                                <input type="text" name="peruntukan" class="form-control" id="peruntukan" value="<?= $a['peruntukan'] ?>" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="luas">Luas</label>
                                <input type="text" name="luas" class="form-control" id="luas" value="<?= $a['luas'] ?>" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" value="<?= $a['keterangan'] ?>" id="keterangan" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" name="ubahLuas" class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>


</div>



<?php include('../template/admin/footer.php') ?>