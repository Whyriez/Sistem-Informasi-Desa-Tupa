<?php
require('../function.php');
include('../template/admin/header.php');
include('../template/admin/sidebar.php');
?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php include('../template/admin/navbar.php') ?>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Lembaga Desa</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Lembaga Desa</h6>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data Lembaga Desa</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>Nama lembaga</th>
                                    <th>Singkatan Lembaga</th>
                                    <th>Alamat kantor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $loop = mysqli_query($koneksi, "select * from tb_lembaga");

                                while ($a = mysqli_fetch_array($loop)) { ?>
                                    <tr>
                                        <td> <img src="../assets/gambar/<?= $a['gambar'] ?>" width="50" height="50" alt=""></td>
                                        <td><?= $a['nama_lembaga'] ?></td>
                                        <td><?= $a['singkatan_nama'] ?></td>
                                        <td><?= $a['alamat_kantor'] ?></td>
                                        <td>
                                            <button type="button" data-toggle="modal" data-target="#modalEdit<?= $a['id'] ?>" class="btn btn-primary btn-sm">Edit</button>
                                            <a href="../function.php?hapusLembaga=<?= $a['id'] ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Lembaga Desa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="judul">Nama Lembaga</label>
                            <input type="text" name="nama_lembaga" class="form-control" id="judul" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Singkatan Lembaga</label>
                            <input type="text" class="form-control" name="singkatan_nama" id="exampleFormControlTextarea1" rows="3" required></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat Kantor</label>
                            <input type="text" class="form-control" name="alamat_kantor" id="exampleFormControlTextarea1" rows="3" required></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Logo Lembaga</label>
                            <input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="tambahLembaga" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal Edit-->
    <?php $loop = mysqli_query($koneksi, "select * from tb_lembaga");

    while ($a = mysqli_fetch_array($loop)) { ?>
        <div class="modal fade" id="modalEdit<?= $a['id'] ?>" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditLabel">Perbarui Data Lembaga</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="id" value="<?= $a['id'] ?>">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="nama_lembaga" class="form-control" value="<?= $a['nama_lembaga'] ?>" id="judul" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Singkatan Lembaga</label>
                                <input type="texy" class="form-control" name="singkatan_lembaga" id="exampleFormControlTextarea1" rows="3" value="<?= $a['singkatan_nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat Kantor</label>
                                <input type="texy" class="form-control" name="alamat_kantor" id="exampleFormControlTextarea1" rows="3" value="<?= $a['alamat_kantor'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Gambar Lembaga</label>
                                <input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1">
                                <img src="../assets/gambar/<?= $a['gambar'] ?>" width="100" class="mt-2" height="100" alt="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" name="ubahLembaga" class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>


</div>



<?php include('../template/admin/footer.php') ?>