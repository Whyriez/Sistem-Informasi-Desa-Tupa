<?php
require('function.php');
$title = "Potensi Desa";
include("template/user/header.php");
include("template/user/navbar.php");

?>

<div class="">
    <div class="container">
        <h2 class="text-right text-primary mb-2">Form Surat Menyurat</h2>
        <div class="border-bottom border-primary border-1 mb-3"></div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenis Surat</label>
                <select class="form-select" id="jenisSurat">
                    <option selected disabled>Pilih Jenis Surat</option>
                    <option value="Surat Pindah Penduduk">Surat Pindah Penduduk</option>
                    <option value="Surat Pengantar Nikah">Surat Pengantar Nikah</option>
                    <option value="Surat Keterangan Meninggal Dunia">Surat Keterangan Meninggal Dunia</option>
                    <option value="Surat Keterangan Ahli Waris">Surat Keterangan Ahli Waris</option>
                    <option value="Surat keterangan kelahiran">Surat keterangan kelahiran</option>
                    <option value="Surat Keterangan Tanah">Surat Keterangan Tanah/ Rekomendasi Sertifikat Tanah</option>
                    <option value="Surat Kartu Keluarga (KK)">Surat Kartu Keluarga (KK)</option>
                    <option value="Surat Akta Kelahiran (AKTE)">Surat Akta Kelahiran (AKTE)</option>
                    <option value="Surat Keterangan Tidak Mampu (SKTM)">Surat Keterangan Tidak Mampu (SKTM)</option>
                    <option value="Surat Keterangan Penghasilan">Surat Keterangan Penghasilan</option>
                    <option value="Surat Pernyataan Penguasaan Bidang Tanah (SPORADIK)">Surat Pernyataan Penguasaan Bidang Tanah (SPORADIK)</option>
                </select>
            </div>

            <div id="SuratPindahPenduduk">
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Nama</label>
                    <input class="form-control" name="nama1" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">No Telepon</label>
                    <input class="form-control" name="nomor1" type="text">
                </div>
                <div class="mb-3" id="suratPernyataan">
                    <label for="suratPernyataan" class="form-label">Surat Pernyataan</label>
                    <input class="form-control" name="suratPernyataan1" type="file">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Kartu Keluarga (KK)</label>
                    <input class="form-control" name="kk1" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP)</label>
                    <input class="form-control" name="ktp1" type="file">
                </div>
                <div class="mb-3" id="bukuNikah">
                    <label for="bukuNikah" class="form-label">Buku Nikah</label>
                    <input class="form-control" name="bukuNikah1" type="file">
                </div>
                <div class="mb-3" id="selfieKtp">
                    <label for="selfieKtp" class="form-label">Selfie Dengan KTP</label>
                    <input class="form-control" name="selfieKtp1" type="file">
                </div>
                <div class="mb-3" id="selfieKtp">
                    <label for="selfieKtp" class="form-label">Ijasah</label>
                    <input class="form-control" name="ijasah1" type="file">
                </div>
                <div class="mb-3" id="alamat">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat1" rows="3"></textarea>
                </div>
                <button class="btn btn-primary w-100" name="kirimSuratPindahPenduduk" type="submit">Kirim</button>
            </div>

            <div id="SuratPengantarNikah">
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Nama</label>
                    <input class="form-control" name="nama2" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">No Telepon</label>
                    <input class="form-control" name="nomor2" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Kartu Keluarga (KK)</label>
                    <input class="form-control" name="kk2" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP)</label>
                    <input class="form-control" name="ktp2" type="file">
                </div>
                <div class="mb-3" id="bukuNikah">
                    <label for="bukuNikah" class="form-label">Buku Nikah</label>
                    <input class="form-control" name="bukuNikah2" type="file">
                </div>
                <div class="mb-3" id="Pas Foto">
                    <label for="Pas Foto" class="form-label">Pas Foto</label>
                    <input class="form-control" name="pasFoto2" type="file">
                </div>
                <div class="mb-3" id="Ijasah">
                    <label for="Ijasah" class="form-label">Ijasah</label>
                    <input class="form-control" name="ijasah2" type="file">
                </div>
                <button class="btn btn-primary w-100" name="SuratPengantarNikah" type="submit">Kirim</button>
            </div>

            <div id="SuratKeteranganMeninggal">
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Nama</label>
                    <input class="form-control" name="nama3" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">No Telepon</label>
                    <input class="form-control" name="nomor3" type="text">
                </div>
                <div class="mb-3" id="suratPernyataan">
                    <label for="suratPernyataan" class="form-label">Surat Keterangan Rumah Sakit</label>
                    <input class="form-control" name="suketRumahSakit" type="file">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Kartu Keluarga (KK)</label>
                    <input class="form-control" name="kk3" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP) Pelapor</label>
                    <input class="form-control" name="ktp3" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP) Yang Meninggal</label>
                    <input class="form-control" name="ktp3other" type="file">
                </div>
                <button class="btn btn-primary w-100" name="SuratKeteranganMeninggal" type="submit">Kirim</button>
            </div>

            <div id="SuratAhliWaris">
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Nama</label>
                    <input class="form-control" name="nama4" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">No Telepon</label>
                    <input class="form-control" name="nomor4" type="text">
                </div>
                <div class="mb-3" id="suratPernyataan">
                    <label for="suratPernyataan" class="form-label">Surat Keterangan Meninggal Dunia</label>
                    <input class="form-control" name="suketMeninggalDunia" type="file">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Kartu Keluarga (KK) Ahli Waris</label>
                    <input class="form-control" name="kk4AhliWaris" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP) Alhi Waris</label>
                    <input class="form-control" name="ktp4AhliWaris" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP) Pemohon</label>
                    <input class="form-control" name="ktp4Pemohon" type="file">
                </div>
                <button class="btn btn-primary w-100" name="SuratAhliWaris" type="submit">Kirim</button>
            </div>

            <div id="SuratKelahiran">
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Nama</label>
                    <input class="form-control" name="nama5" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">No Telepon</label>
                    <input class="form-control" name="nomor5" type="text">
                </div>
                <div class="mb-3" id="suratPernyataan">
                    <label for="suratPernyataan" class="form-label">Surat Kelahiran Dari Tempat Lahir</label>
                    <input class="form-control" name="suratKelahiran" type="file">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Kartu Keluarga (KK)</label>
                    <input class="form-control" name="kk5" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP)</label>
                    <input class="form-control" name="ktp5" type="file">
                </div>
                <div class="mb-3" id="bukuNikah">
                    <label for="bukuNikah" class="form-label">Buku Nikah Ortu</label>
                    <input class="form-control" name="bukuNikah5" type="file">
                </div>
                <button class="btn btn-primary w-100" name="SuratKelahiran" type="submit">Kirim</button>
            </div>

            <div id="SuratKeteranganTanah">
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Nama</label>
                    <input class="form-control" name="nama6" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">No Telepon</label>
                    <input class="form-control" name="nomor6" type="text">
                </div>
                <div class="mb-3" id="suratPernyataan">
                    <label for="suratPernyataan" class="form-label">Sporadik (Bukti Kepemilikan Tanah/Alas Hak)</label>
                    <input class="form-control" name="buktiKepemilikanTanah" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP)</label>
                    <input class="form-control" name="ktp6" type="file">
                </div>
                <button class="btn btn-primary w-100" name="SuratKeteranganTanah" type="submit">Kirim</button>
            </div>

            <div id="SuratKartuKeluarga">
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Nama</label>
                    <input class="form-control" name="nama7" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">No Telepon</label>
                    <input class="form-control" name="nomor7" type="text">
                </div>
                <div class="mb-3" id="suratPernyataan">
                    <label for="suratPernyataan" class="form-label">Akte Kelahiran/ Surat Keterangan Lahir</label>
                    <input class="form-control" name="akta7" type="file">
                </div>
                <div class="mb-3" id="bukuNikah">
                    <label for="bukuNikah" class="form-label">Buku Nikah</label>
                    <input class="form-control" name="bukuNikah7" type="file">
                </div>
                <div class="mb-3" id="rapor">
                    <label for="rapor" class="form-label">Rapor</label>
                    <input class="form-control" name="rapor7" type="file">
                </div>
                <div class="mb-3" id="selfieKtp">
                    <label for="selfieKtp" class="form-label">Ijasah</label>
                    <input class="form-control" name="ijasah7" type="file">
                </div>
                <button class="btn btn-primary w-100" name="SuratKartuKeluarga" type="submit">Kirim</button>
            </div>

            <div id="SuratAktaKelahiran">
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Nama</label>
                    <input class="form-control" name="nama8" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">No Telepon</label>
                    <input class="form-control" name="nomor8" type="text">
                </div>
                <div class="mb-3" id="suratPernyataan">
                    <label for="suratPernyataan" class="form-label">Surat Keterangan Lahir</label>
                    <input class="form-control" name="suketLahir" type="file">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Kartu Keluarga (KK)</label>
                    <input class="form-control" name="kk8" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP)</label>
                    <input class="form-control" name="ktp8" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP) Saksi</label>
                    <input class="form-control" name="ktp8Saksi" type="file">
                </div>
                <div class="mb-3" id="bukuNikah">
                    <label for="bukuNikah" class="form-label">Buku Nikah</label>
                    <input class="form-control" name="bukuNikah8" type="file">
                </div>
                <div class="mb-3" id="selfieKtp">
                    <label for="selfieKtp" class="form-label">Ijasah</label>
                    <input class="form-control" name="ijasah8" type="file">
                </div>
                <button class="btn btn-primary w-100" name="SuratAktaKelahiran" type="submit">Kirim</button>
            </div>

            <div id="SuketTidakMampu">
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Nama</label>
                    <input class="form-control" name="nama9" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">No Telepon</label>
                    <input class="form-control" name="nomor9" type="text">
                </div>
                <div class="mb-3" id="suratPernyataan">
                    <label for="suratPernyataan" class="form-label">Surat Pernyataan</label>
                    <input class="form-control" name="suratPernyataan" type="file">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Kartu Keluarga (KK)</label>
                    <input class="form-control" name="kk9" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP)</label>
                    <input class="form-control" name="ktp9" type="file">
                </div>
                <button class="btn btn-primary w-100" name="SuketTidakMampu" type="submit">Kirim</button>
            </div>

            <div id="SuketPenghasilan">
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Nama</label>
                    <input class="form-control" name="nama10" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">No Telepon</label>
                    <input class="form-control" name="nomor10" type="text">
                </div>
                <div class="mb-3" id="suratPernyataan">
                    <label for="suratPernyataan" class="form-label">Surat Pernyataan</label>
                    <input class="form-control" name="suratPernyataan10" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP)</label>
                    <input class="form-control" name="ktp10" type="file">
                </div>
                <button class="btn btn-primary w-100" name="SuketPenghasilan" type="submit">Kirim</button>
            </div>

            <div id="SPORADIK">
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">Nama</label>
                    <input class="form-control" name="nama11" type="text">
                </div>
                <div class="mb-3" id="kk">
                    <label for="kk" class="form-label">No Telepon</label>
                    <input class="form-control" name="nomor11" type="text">
                </div>
                <div class="mb-3" id="suratPernyataan">
                    <label for="suratPernyataan" class="form-label">Surat Jual Beli/ Hibah</label>
                    <input class="form-control" name="suratJualBeli" type="file">
                </div>
                <div class="mb-3" id="suratPernyataan">
                    <label for="suratPernyataan" class="form-label">Surat Keterangan Waris Untuk Tanah Warisan</label>
                    <input class="form-control" name="suketWaris" type="file">
                </div>
                <div class="mb-3" id="ktp">
                    <label for="ktp" class="form-label">Kartu Tanda Penduduk (KTP)</label>
                    <input class="form-control" name="ktp11" type="file">
                </div>
                <button class="btn btn-primary w-100" name="SPORADIK" type="submit">Kirim</button>
            </div>
        </form>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var jenisSuratSelect = document.getElementById('jenisSurat');

        var SuratPindahPenduduk = document.getElementById('SuratPindahPenduduk');
        var SuratPengantarNikah = document.getElementById('SuratPengantarNikah');
        var SuratKeteranganMeninggal = document.getElementById('SuratKeteranganMeninggal');
        var SuratAhliWaris = document.getElementById('SuratAhliWaris');
        var SuratKelahiran = document.getElementById('SuratKelahiran');
        var SuratKeteranganTanah = document.getElementById('SuratKeteranganTanah');
        var SuratKartuKeluarga = document.getElementById('SuratKartuKeluarga');
        var SuratAktaKelahiran = document.getElementById('SuratAktaKelahiran');
        var SuketTidakMampu = document.getElementById('SuketTidakMampu');
        var SuketPenghasilan = document.getElementById('SuketPenghasilan');
        var SPORADIK = document.getElementById('SPORADIK');

        SuratPindahPenduduk.style.display = 'none';
        SuratPengantarNikah.style.display = 'none';
        SuratKeteranganMeninggal.style.display = 'none';
        SuratAhliWaris.style.display = 'none';
        SuratKelahiran.style.display = 'none';
        SuratKeteranganTanah.style.display = 'none';
        SuratKartuKeluarga.style.display = 'none';
        SuratAktaKelahiran.style.display = 'none';
        SuketTidakMampu.style.display = 'none';
        SuketPenghasilan.style.display = 'none';
        SPORADIK.style.display = 'none';

        jenisSuratSelect.addEventListener('change', function() {
            var selectedOption = this.value;

            if (selectedOption == 'Surat Pindah Penduduk') {
                SuratPindahPenduduk.style.display = 'block';
                SuratPengantarNikah.style.display = 'none';
                SuratKeteranganMeninggal.style.display = 'none';
                SuratAhliWaris.style.display = 'none';
                SuratKelahiran.style.display = 'none';
                SuratKeteranganTanah.style.display = 'none';
                SuratKartuKeluarga.style.display = 'none';
                SuratAktaKelahiran.style.display = 'none';
                SuketTidakMampu.style.display = 'none';
                SuketPenghasilan.style.display = 'none';
                SPORADIK.style.display = 'none';
            } else if (selectedOption == 'Surat Pengantar Nikah') {
                SuratPindahPenduduk.style.display = 'none';
                SuratPengantarNikah.style.display = 'block';
                SuratKeteranganMeninggal.style.display = 'none';
                SuratAhliWaris.style.display = 'none';
                SuratKelahiran.style.display = 'none';
                SuratKeteranganTanah.style.display = 'none';
                SuratKartuKeluarga.style.display = 'none';
                SuratAktaKelahiran.style.display = 'none';
                SuketTidakMampu.style.display = 'none';
                SuketPenghasilan.style.display = 'none';
                SPORADIK.style.display = 'none';
            } else if (selectedOption == 'Surat Keterangan Meninggal Dunia') {
                SuratPindahPenduduk.style.display = 'none';
                SuratPengantarNikah.style.display = 'none';
                SuratKeteranganMeninggal.style.display = 'block';
                SuratAhliWaris.style.display = 'none';
                SuratKelahiran.style.display = 'none';
                SuratKeteranganTanah.style.display = 'none';
                SuratKartuKeluarga.style.display = 'none';
                SuratAktaKelahiran.style.display = 'none';
                SuketTidakMampu.style.display = 'none';
                SuketPenghasilan.style.display = 'none';
                SPORADIK.style.display = 'none';
            } else if (selectedOption == 'Surat Keterangan Ahli Waris') {
                SuratPindahPenduduk.style.display = 'none';
                SuratPengantarNikah.style.display = 'none';
                SuratKeteranganMeninggal.style.display = 'none';
                SuratAhliWaris.style.display = 'block';
                SuratKelahiran.style.display = 'none';
                SuratKeteranganTanah.style.display = 'none';
                SuratKartuKeluarga.style.display = 'none';
                SuratAktaKelahiran.style.display = 'none';
                SuketTidakMampu.style.display = 'none';
                SuketPenghasilan.style.display = 'none';
                SPORADIK.style.display = 'none';
            } else if (selectedOption == 'Surat keterangan kelahiran') {
                SuratPindahPenduduk.style.display = 'none';
                SuratPengantarNikah.style.display = 'none';
                SuratKeteranganMeninggal.style.display = 'none';
                SuratAhliWaris.style.display = 'none';
                SuratKelahiran.style.display = 'block';
                SuratKeteranganTanah.style.display = 'none';
                SuratKartuKeluarga.style.display = 'none';
                SuratAktaKelahiran.style.display = 'none';
                SuketTidakMampu.style.display = 'none';
                SuketPenghasilan.style.display = 'none';
                SPORADIK.style.display = 'none';
            } else if (selectedOption == 'Surat Keterangan Tanah') {
                SuratPindahPenduduk.style.display = 'none';
                SuratPengantarNikah.style.display = 'none';
                SuratKeteranganMeninggal.style.display = 'none';
                SuratAhliWaris.style.display = 'none';
                SuratKelahiran.style.display = 'none';
                SuratKeteranganTanah.style.display = 'block';
                SuratKartuKeluarga.style.display = 'none';
                SuratAktaKelahiran.style.display = 'none';
                SuketTidakMampu.style.display = 'none';
                SuketPenghasilan.style.display = 'none';
                SPORADIK.style.display = 'none';
            } else if (selectedOption == 'Surat Kartu Keluarga (KK)') {
                SuratPindahPenduduk.style.display = 'none';
                SuratPengantarNikah.style.display = 'none';
                SuratKeteranganMeninggal.style.display = 'none';
                SuratAhliWaris.style.display = 'none';
                SuratKelahiran.style.display = 'none';
                SuratKeteranganTanah.style.display = 'none';
                SuratKartuKeluarga.style.display = 'block';
                SuratAktaKelahiran.style.display = 'none';
                SuketTidakMampu.style.display = 'none';
                SuketPenghasilan.style.display = 'none';
                SPORADIK.style.display = 'none';
            } else if (selectedOption == 'Surat Akta Kelahiran (AKTE)') {
                SuratPindahPenduduk.style.display = 'none';
                SuratPengantarNikah.style.display = 'none';
                SuratKeteranganMeninggal.style.display = 'none';
                SuratAhliWaris.style.display = 'none';
                SuratKelahiran.style.display = 'none';
                SuratKeteranganTanah.style.display = 'none';
                SuratKartuKeluarga.style.display = 'none';
                SuratAktaKelahiran.style.display = 'block';
                SuketTidakMampu.style.display = 'none';
                SuketPenghasilan.style.display = 'none';
                SPORADIK.style.display = 'none';
            } else if (selectedOption == 'Surat Keterangan Tidak Mampu (SKTM)') {
                SuratPindahPenduduk.style.display = 'none';
                SuratPengantarNikah.style.display = 'none';
                SuratKeteranganMeninggal.style.display = 'none';
                SuratAhliWaris.style.display = 'none';
                SuratKelahiran.style.display = 'none';
                SuratKeteranganTanah.style.display = 'none';
                SuratKartuKeluarga.style.display = 'none';
                SuratAktaKelahiran.style.display = 'none';
                SuketTidakMampu.style.display = 'block';
                SuketPenghasilan.style.display = 'none';
                SPORADIK.style.display = 'none';
            } else if (selectedOption == 'Surat Keterangan Penghasilan') {
                SuratPindahPenduduk.style.display = 'none';
                SuratPengantarNikah.style.display = 'none';
                SuratKeteranganMeninggal.style.display = 'none';
                SuratAhliWaris.style.display = 'none';
                SuratKelahiran.style.display = 'none';
                SuratKeteranganTanah.style.display = 'none';
                SuratKartuKeluarga.style.display = 'none';
                SuratAktaKelahiran.style.display = 'none';
                SuketTidakMampu.style.display = 'none';
                SuketPenghasilan.style.display = 'block';
                SPORADIK.style.display = 'none';
            } else if (selectedOption == 'Surat Pernyataan Penguasaan Bidang Tanah (SPORADIK)') {
                SuratPindahPenduduk.style.display = 'none';
                SuratPengantarNikah.style.display = 'none';
                SuratKeteranganMeninggal.style.display = 'none';
                SuratAhliWaris.style.display = 'none';
                SuratKelahiran.style.display = 'none';
                SuratKeteranganTanah.style.display = 'none';
                SuratKartuKeluarga.style.display = 'none';
                SuratAktaKelahiran.style.display = 'none';
                SuketTidakMampu.style.display = 'none';
                SuketPenghasilan.style.display = 'none';
                SPORADIK.style.display = 'block';
            }
        });
    });
</script>


<?php include("template/user/footer.php") ?>