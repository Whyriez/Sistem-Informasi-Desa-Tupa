<?php
$title = "Struktur Organisasi";
include("template/user/header.php");
include("template/user/navbar.php");

$detail = isset($_GET['detail']) ? $_GET['detail'] : 'struktur_organisasi';
?>

<div class="">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4">
                <a class="dropdown-item <?php echo ($detail == 'struktur_organisasi') ? 'active' : ''; ?>" href="?detail=struktur_organisasi">Struktur Organisasi</a>
                <a class="dropdown-item <?php echo ($detail == 'kepala_desa') ? 'active' : ''; ?>" href="?detail=kepala_desa">Kepala Desa</a>
                <a class="dropdown-item <?php echo ($detail == 'sekretaris_desa') ? 'active' : ''; ?>" href="?detail=sekretaris_desa">Sekretaris Desa</a>
                <a class="dropdown-item <?php echo ($detail == 'kasi_pemerintahan') ? 'active' : ''; ?>" href="?detail=kasi_pemerintahan">Kasi Pemerintahan</a>
                <a class="dropdown-item <?php echo ($detail == 'kasi_kesejahteraan') ? 'active' : ''; ?>" href="?detail=kasi_kesejahteraan">Kasi Kesejahteraan</a>
                <a class="dropdown-item <?php echo ($detail == 'kasi_keuangan') ? 'active' : ''; ?>" href="?detail=kasi_keuangan">Kasi Keuangan</a>
                <a class="dropdown-item <?php echo ($detail == 'kaur_perencanaan') ? 'active' : ''; ?>" href="?detail=kaur_perencanaan">Kaur Perencanaan & Tata Usaha Umum</a>
                <a class="dropdown-item <?php echo ($detail == 'kepala_dusun_I') ? 'active' : ''; ?>" href="?detail=kepala_dusun_I">Kepala Dusun I Tanjakan</a>
                <a class="dropdown-item <?php echo ($detail == 'kepala_dusun_II') ? 'active' : ''; ?>" href="?detail=kepala_dusun_II">Kepala Dusun II Anggrek</a>
                <a class="dropdown-item <?php echo ($detail == 'kepala_dusun_III') ? 'active' : ''; ?>" href="?detail=kepala_dusun_III">Kepala Dusun III</a>
                <a class="dropdown-item <?php echo ($detail == 'kepala_dusun_IV') ? 'active' : ''; ?>" href="?detail=kepala_dusun_IV">Kepala Dusun IV</a>
            </div>
            <div class="col-md-8">
                <?php if ($detail == 'struktur_organisasi') : ?>
                    <h2 class="text-left text-primary mb-2">Struktur Organisasi</h2>
                    <img src="assets/img/StrukturOrganisasi.png" class="w-100" alt="">
                <?php elseif ($detail == 'kepala_desa') : ?>
                    <h2 class="text-left text-primary mb-2">Kepala Desa</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Neni Polihito, S. IP</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kepala Desa</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kepala desa adalah pemerintah desa atau yang disebut dengan nama lain yang dibantu perangkat desa sebagai unsur penyelenggara pemerintahan desa. <br> <br>

                        Kepala Desa bertugas menyelenggarakan Pemerintahan Desa, melaksanakan Pembangunan Desa, pembinaan kemasyarakatan Desa, dan pemberdayaan masyarakat Desa. <br> <br>

                        Wewenang Kepala Desa : <br> <br>

                        1. Memimpin penyelenggaraan Pemerintahan Desa; <br>
                        2. Mengangkat dan memberhentikan perangkat Desa; <br>
                        3. Memegang kekuasaan pengelolaan Keuangan dan Aset Desa; <br>
                        4. Menetapkan Peraturan Desa; <br>
                        5. Menetapkan Anggaran Pendapatan dan Belanja Desa; <br>
                        6. Membina kehidupan masyarakat Desa; <br>
                        7. Membina ketenteraman dan ketertiban masyarakat Desa; <br>
                        8. Membina dan meningkatkan perekonomian Desa serta mengintegrasikannya agar mencapai perekonomian <br>
                        9. Skala produktif untuk sebesar-besarnya kemakmuran masyarakat Desa; <br>
                        10. Mengembangkan sumber pendapatan Desa;<br>
                        11. Mengusulkan dan menerima pelimpahan sebagian kekayaan negara guna meningkatkan kesejahteraan masyarakat Desa;<br>
                        12. Mengembangkan kehidupan sosial budaya masyarakat Desa;<br>
                        13. Memanfaatkan teknologi tepat guna;<br>
                        14. Mengoordinasikan Pembangunan Desa secara partisipatif;<br>
                        15. Mewakili Desa di dalam dan di luar pengadilan atau menunjuk kuasa hukum untuk mewakilinya sesuai 
                        16. Dengan ketentuan peraturan perundang-undangan; dan<br>
                        17. Melaksanakan wewenang lain yang sesuai denganketentuan peraturan perundang-undangan.</p>
                <?php elseif ($detail == 'sekretaris_desa') : ?>
                    <h2 class="text-left text-primary mb-2">Sekretaris Desa</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Wiwin Hasan, S. Sos</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Sekretaris Desa</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Sekretaris Desa atau yang sering disingkat menjadi SEKDES adalah pembantu Kepala Desa selaku pemegang kekuasaan pengelolaan keuangan desa. Sekdes merupakan unsur Staf Pemerintah Desa dipimpin oleh seorang Sekretaris Desa yang berada dibawah dan bertanggung jawab kepada Kepala Desa.<br> <br>

                        Tugas dan Fungsi Sekretaris Desa <br>
                        Dalam rangka penyelenggaraan pemerintahan desa yang baik (good governance), Sekretaris Desa mempunyai tanggung jawab untuk membantu Kepala Desa di bidang administrasi dan memberikan pelayanan teknis administrasi kepada seluruh perangkat Pemerintah Desa dan masyarakat.<br> <br>

                        Sekretaris desa mempunyai tugas sebagai berikut: <br> <br>

                        1. Sekretaris desa/kelurahan berkedudukan sebagai unsur staff yang membantu kepala desa/lurah dalam melaksanakan tugas dan wewenangnya serta memimpin sekretariat desa/lurah. <br>
                        2. Sekretaris desa/kelurahan mempunyai tugas menjalankan fungsi administrasi kelurahan, pembangunan dan kemasyarakatan. <br> <br>

                        Selain tugas tersebut di atas, seorang Sekretaris Desa harus mampu menjalankan fungsi administrator dengan penuh tanggungjawab. Berikut ini fungsi dari Sekdes, yaitu: <br> <br>

                        1. Sebagai pelaksana urusan surat menyurat, kearsipan dan laporan. <br>
                        2. Sebagai pelaksana urusan keuangan. <br>
                        3. Sebagai pelaksana urusan administrasi pemerintahan, pembangunan, dan kemasyarakatan. <br> <br>

                        Dalam melaksanakan tugas dan fungsinya sekretaris desa/kelurahan akan dibantu oleh Kepala Urusan. Merekalah yang menangani pelayanan ketatausahaan yang baik guna membantu Sekdes, diantaranya sebagai berikut: <br><br>

                        1. Kepala Urusan Tata Usaha dan Umum <br>
                        2. Kepala Urusan Perencanaan <br>
                        3. Kepala Urusan Keuangan <br></p>
                <?php elseif ($detail == 'kasi_pemerintahan') : ?>
                    <h2 class="text-left text-primary mb-2">Kasi Pemerintahan</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Verawaty Jahya, S.Pd</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kasi Pemerintahan</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kepala Seksi Pemerintahan atau biasa disingkat Kasi Pemerintahan adalah perangkat desa yang mempunyai kedudukan sebagai unsur pelaksana teknis yang ditugaskan membantu Kepala Desa sebagai pelaksana tugas operasional dibidang pemerintahan desa.<br> <br>

                        Dalam pengelolaan keuangan desa, Kepala Seksi (Kasi) Pemerintahan Desa bertugas sebagai Pelaksana Kegiatan Anggaran (PKA) dalam struktur Pelaksana Pengelolaan Keuangan Desa (PPKD) sesuai bidang tugasnya.<br> <br>

                        Tugas Kepala Seksi (Kasi) Pemerintahan Desa : <br>
                        Disamping tugas sebagaimana tersebut di atas, Kepala Seksi (Kasi) Pemerintahan Desa juga bertugas sebagai berikut: <br><br>

                        1. melakukan tindakan yang mengakibatkan pengeluaran atas beban anggaran belanja sesuai bidang tugasnya <br>
                        2. melaksanakan anggaran kegiatan sesuai bidang tugasnya <br>
                        3. mengendalikan kegiatan sesuai bidang tugasnya <br>
                        4. menyusun DPA (Dokumen Pelaksanaan Anggaran), DPPA (Dokumen Perubahan Pelaksanaan Anggaran), dan DPAL (Dokumen Pelaksanaan Anggaran Lanjutan) sesuai bidang tugasnya <br>
                        5. menandatangani perjanjian kerja sama dengan penyedia atas pengadaan barang/jasa untuk kegiatan yang berada dalam bidang tugasnya; dan <br>
                        6. menyusun laporan pelaksanaan kegiatan sesuai bidang tugasnya untuk pertanggungjawaban pelaksanaan 8.Anggaran Pendapatan dan Belanja Desa (APBDes) <br>

                        Fungsi Kepala Seksi (Kasi) Pemerintahan Desa : <br>
                        Kepala Seksi (Kasi) Pemerintahan Desa memiliki fungsi sebagai berikut:<br> <br>

                        1. melaksanakan manajemen tata praja Pemerintahan<br>
                        2. menyusun rancangan regulasi (Aturan) desa <br>
                        3. pembinaan masalah pertanahan <br>
                        4. pembinaan ketenteraman dan ketertiban <br>
                        5. pelaksanaan upaya perlindungan masyarakat <br>
                        6. kependudukan <br>
                        7. penataan dan pengelolaan wilayah <br>
                        8. pendataan dan pengelolaan Profil Desa. <br> <br></p>
                <?php elseif ($detail == 'kasi_kesejahteraan') : ?>
                    <h2 class="text-left text-primary mb-2">Kasi Kesejahteraan</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Verawaty Jahya, S.Pd</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kasi Pemerintahan</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kepala Seksi Pemerintahan atau biasa disingkat Kasi Pemerintahan adalah perangkat desa yang mempunyai kedudukan sebagai unsur pelaksana teknis yang ditugaskan membantu Kepala Desa sebagai pelaksana tugas operasional dibidang pemerintahan desa.<br> <br>

                        Dalam pengelolaan keuangan desa, Kepala Seksi (Kasi) Pemerintahan Desa bertugas sebagai Pelaksana Kegiatan Anggaran (PKA) dalam struktur Pelaksana Pengelolaan Keuangan Desa (PPKD) sesuai bidang tugasnya.<br> <br>

                        Tugas Kepala Seksi (Kasi) Pemerintahan Desa : <br>
                        Disamping tugas sebagaimana tersebut di atas, Kepala Seksi (Kasi) Pemerintahan Desa juga bertugas sebagai berikut: <br><br>

                        1. melakukan tindakan yang mengakibatkan pengeluaran atas beban anggaran belanja sesuai bidang tugasnya <br>
                        2. melaksanakan anggaran kegiatan sesuai bidang tugasnya <br>
                        3. mengendalikan kegiatan sesuai bidang tugasnya <br>
                        4. menyusun DPA (Dokumen Pelaksanaan Anggaran), DPPA (Dokumen Perubahan Pelaksanaan Anggaran), dan DPAL (Dokumen Pelaksanaan Anggaran Lanjutan) sesuai bidang tugasnya <br>
                        5. menandatangani perjanjian kerja sama dengan penyedia atas pengadaan barang/jasa untuk kegiatan yang berada dalam bidang tugasnya; dan <br>
                        6. menyusun laporan pelaksanaan kegiatan sesuai bidang tugasnya untuk pertanggungjawaban pelaksanaan 8.Anggaran Pendapatan dan Belanja Desa (APBDes) <br>

                        Fungsi Kepala Seksi (Kasi) Pemerintahan Desa : <br>
                        Kepala Seksi (Kasi) Pemerintahan Desa memiliki fungsi sebagai berikut:<br> <br>

                        1. melaksanakan manajemen tata praja Pemerintahan<br>
                        2. menyusun rancangan regulasi (Aturan) desa <br>
                        3. pembinaan masalah pertanahan <br>
                        4. pembinaan ketenteraman dan ketertiban <br>
                        5. pelaksanaan upaya perlindungan masyarakat <br>
                        6. kependudukan <br>
                        7. penataan dan pengelolaan wilayah <br>
                        8. pendataan dan pengelolaan Profil Desa. <br> <br></p>
                <?php elseif ($detail == 'kasi_keuangan') : ?>
                    <h2 class="text-left text-primary mb-2">Kasi Keuangan</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Yusnar Palowa, SE</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kasi Keuangan</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kedudukan kasi keuangan dalam pengelolaan keuangan desa adalah sebagai Pelaksana Fungsi Kebendaharaan dalam struktur PPKD (Pelaksana Pengelolaan Keuangan Desa). PPKD merupakan perangkat desa yang dibentuk untuk melaksanakan pengelolaan keuangan desa.<br> <br>

Tugas pokok kasi keuangan meliputi: <br> <br>

Melaksanakan fungsi kebendaharaan dalam urusan pelayanan administrasi keuangan desa <br> 
Menyusun Rencana Anggaran Kas Desa (RAK Desa) <br>
Mengelola kas desa <br>
Melakukan pencatatan dan pelaporan keuangan desa <br>
Melaksanakan tugas lain yang diberikan oleh Sekretaris Desa <br>
Kasi keuangan bertanggung jawab kepada Sekretaris Desa <br>

Berikut adalah uraian tugas kasi keuangan secara lebih detail <br> <br>

Melaksanakan fungsi kebendaharaan dalam urusan pelayanan administrasi keuangan desa
Tugas ini meliputi: <br> <br>

* Menerima, menyimpan, dan menyalurkan dana desa <br>
* Membayar tagihan dan kewajiban desa <br>
* Melakukan penatausahaan keuangan desa <br>
* Menyiapkan laporan keuangan desa <br>
Menyusun Rencana Anggaran Kas Desa (RAK Desa) <br>
RAK Desa adalah rencana penerimaan dan pengeluaran kas desa dalam satu periode anggaran. RAK Desa disusun oleh kasi keuangan dengan berkoordinasi dengan Sekretaris Desa <br>

Mengelola kas desa <br> <br>
Kas desa adalah tempat penyimpanan dana desa. Kasi keuangan bertanggung jawab atas pengelolaan kas desa, termasuk: <br> <br>

* Melakukan pencatatan penerimaan dan pengeluaran kas desa <br>
* Melakukan pemeriksaan fisik kas desa secara berkala <br>
* Menjaga keamanan kas desa <br>
Melakukan pencatatan dan pelaporan keuangan desa <br>
Kasi keuangan bertanggung jawab atas pencatatan dan pelaporan keuangan desa, termasuk: <br>

* Melakukan pencatatan transaksi keuangan desa <br>
* Menyiapkan laporan keuangan desa <br>
* Menyampaikan laporan keuangan desa kepada BPD <br>
Melaksanakan tugas lain yang diberikan oleh Sekretaris Desa <br>
Tugas lain yang diberikan oleh Sekretaris Desa dapat berupa: <br>

* Menyusun laporan pertanggungjawaban keuangan desa <br>
* Melakukan pemeriksaan keuangan desa <br>
* Menyiapkan anggaran belanja desa <br>
Kasi keuangan merupakan salah satu perangkat desa yang penting. Kasi keuangan berperan penting dalam pengelolaan keuangan desa. Oleh karena itu, kasi keuangan harus memiliki pengetahuan dan keterampilan yang memadai dalam bidang keuangan.</p>
                <?php elseif ($detail == 'kaur_perencanaan') : ?>
                    <h2 class="text-left text-primary mb-2">Kaur Perencanaan</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Suleman, S.Pd</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kaur Perencanaan & Tata Usaha Umum</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kepala Urusan Perencanaan (Kaur Perencanaan) dan Kepala Urusan Tata Usaha dan Umum (Kaur TU dan Umum) merupakan unsur staf sekretariat yang berada di bawah dan bertanggung jawab kepada Sekretaris Desa.<br> <br>

Tugas dan fungsi Kaur Perencanaan <br> <br>

Kaur Perencanaan bertugas membantu Sekretaris Desa dalam urusan perencanaan pembangunan desa. Adapun tugas dan fungsi Kaur Perencanaan secara lebih rinci adalah sebagai berikut:<br> <br>

Menyusun rencana kerja tahunan perangkat desa di bidang perencanaan pembangunan desa <br>
Melaksanakan koordinasi dengan perangkat desa lainnya dalam penyusunan rencana kerja tahunan perangkat desa di bidang perencanaan pembangunan desa <br>
Melaksanakan koordinasi dengan perangkat desa lainnya dalam penyusunan rencana kerja pemerintah desa <br>
Melakukan pendataan dan analisis data potensi dan permasalahan desa <br>
Menyusun rencana pembangunan desa <br>
Menyusun anggaran pendapatan dan belanja desa <br>
Melaksanakan pengendalian dan evaluasi pelaksanaan pembangunan desa <br>
Melaksanakan penyusunan laporan pelaksanaan pembangunan desa, dan<br>
Melaksanakan tugas lain yang diberikan oleh Sekretaris Desa <br>
Tugas dan fungsi Kaur TU dan Umum <br>

Kaur TU dan Umum bertugas membantu Sekretaris Desa dalam urusan pelayanan administrasi ketatausahaan. Adapun tugas dan fungsi Kaur TU dan Umum secara lebih rinci adalah sebagai berikut: <br> <br>

Melaksanakan urusan tata naskah dinas <br>
Melaksanakan urusan administrasi surat menyurat <br>
Melaksanakan urusan arsip dan ekspedisi <br>
Melaksanakan urusan penataan administrasi perangkat desa <br>
Melaksanakan urusan penyediaan prasarana perangkat desa dan kantor <br>
Melaksanakan urusan penyiapan rapat <br>
Melaksanakan urusan pengadministrasian aset, inventarisasi, perjalanan dinas dan pelayanan umum <br>
Melaksanakan urusan pemeliharaan sarana dan prasarana kantor dan <br>
Melaksanakan tugas lain yang diberikan oleh Sekretaris Desa <br>
Hubungan antara Kaur Perencanaan dan Kaur TU dan Umum <br>

Secara umum, hubungan antara Kaur Perencanaan dan Kaur TU dan Umum adalah hubungan kerja sama. Kaur Perencanaan membutuhkan dukungan dari Kaur TU dan Umum dalam hal penyediaan data dan informasi yang diperlukan untuk menyusun rencana pembangunan desa dan anggaran pendapatan dan belanja desa. Sementara itu, Kaur TU dan Umum membutuhkan dukungan dari Kaur Perencanaan dalam hal penyusunan rencana kerja tahunan perangkat desa di bidang tata usaha dan umum.<br> <br>

Selain itu, Kaur Perencanaan dan Kaur TU dan Umum juga dapat bekerja sama dalam hal-hal lain yang terkait dengan kepentingan desa, seperti penyusunan laporan pelaksanaan pembangunan desa dan penyelenggaraan pelayanan publik.</p>
                <?php elseif ($detail == 'kepala_dusun_I') : ?>
                    <h2 class="text-left text-primary mb-2">Kepala Dusun I</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Roslinda Lihawa, A. Md, A.Pkt</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kepala Dusun I Tanjakan</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kepala dusun adalah perangkat desa yang berkedudukan sebagai unsur satuan tugas kewilayahan yang bertugas membantu kepala desa dalam pelaksanaan tugas wilayahnya. Kepala dusun bertanggung jawab kepada kepala desa.<br> <br>

Dalam struktur organisasi desa, kepala dusun berada di bawah sekretaris desa. Kepala dusun bertugas membantu kepala desa dalam melaksanakan kegiatan pemerintahan, pembangunan, pembinaan kemasyarakatan, dan pemberdayaan masyarakat di wilayahnya.<br> <br>

Berikut adalah tugas kepala dusun secara umum: <br> <br>

Membantu kepala desa dalam menyelenggarakan pemerintahan desa di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pembangunan desa di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pembinaan kemasyarakatan di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pemberdayaan masyarakat di wilayahnya <br>
Selain tugas umum tersebut, kepala dusun juga memiliki tugas khusus yang berkaitan dengan wilayahnya, seperti: <br><br>

Melakukan pendataan penduduk, rumah tangga, dan sarana prasarana di wilayahnya <br>
Melakukan pembinaan ketentraman dan ketertiban di wilayahnya <br>
Melakukan pembinaan pemberdayaan masyarakat di wilayahnya <br>
Melakukan pengelolaan wilayah di wilayahnya <br>
Kepala dusun diangkat oleh kepala desa setelah dikonsultasikan dengan camat atas nama bupati/walikota. Kepala dusun harus memenuhi persyaratan sebagai berikut:<br> <br>

Warga negara Indonesia yang bertakwa kepada Tuhan Yang Maha Esa <br>
Berpendidikan minimal Sekolah Menengah Atas (SMA) atau sederajat <br>
Berusia paling rendah 25 tahun <br>
Sehat jasmani dan rohani <br>
Berwibawa dan mampu menggerakkan masyarakat <br>
Tidak pernah dihukum penjara karena melakukan tindak pidana kejahatan dengan hukuman paling singkat lima tahun.
Kepala dusun dibantu oleh perangkat dusun, yang terdiri dari: <br> <br>

Kepala urusan pemerintahan <br>
Kepala urusan pembangunan <br>
Kepala urusan kemasyarakatan <br>
Kepala urusan pemberdayaan masyarakat <br>
Perangkat dusun diangkat oleh kepala dusun setelah dikonsultasikan dengan kepala desa dan camat <br></p>
                <?php elseif ($detail == 'kepala_dusun_II') : ?>
                    <h2 class="text-left text-primary mb-2">Kepala Dusun II</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Hardiyanti Abdullah, S.Pd</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kepala Dusun II Anggrek</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kepala dusun adalah perangkat desa yang berkedudukan sebagai unsur satuan tugas kewilayahan yang bertugas membantu kepala desa dalam pelaksanaan tugas wilayahnya. Kepala dusun bertanggung jawab kepada kepala desa.<br> <br>

Dalam struktur organisasi desa, kepala dusun berada di bawah sekretaris desa. Kepala dusun bertugas membantu kepala desa dalam melaksanakan kegiatan pemerintahan, pembangunan, pembinaan kemasyarakatan, dan pemberdayaan masyarakat di wilayahnya.<br> <br>

Berikut adalah tugas kepala dusun secara umum: <br> <br>

Membantu kepala desa dalam menyelenggarakan pemerintahan desa di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pembangunan desa di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pembinaan kemasyarakatan di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pemberdayaan masyarakat di wilayahnya <br>
Selain tugas umum tersebut, kepala dusun juga memiliki tugas khusus yang berkaitan dengan wilayahnya, seperti: <br><br>

Melakukan pendataan penduduk, rumah tangga, dan sarana prasarana di wilayahnya <br>
Melakukan pembinaan ketentraman dan ketertiban di wilayahnya <br>
Melakukan pembinaan pemberdayaan masyarakat di wilayahnya <br>
Melakukan pengelolaan wilayah di wilayahnya <br>
Kepala dusun diangkat oleh kepala desa setelah dikonsultasikan dengan camat atas nama bupati/walikota. Kepala dusun harus memenuhi persyaratan sebagai berikut:<br> <br>

Warga negara Indonesia yang bertakwa kepada Tuhan Yang Maha Esa <br>
Berpendidikan minimal Sekolah Menengah Atas (SMA) atau sederajat <br>
Berusia paling rendah 25 tahun <br>
Sehat jasmani dan rohani <br>
Berwibawa dan mampu menggerakkan masyarakat <br>
Tidak pernah dihukum penjara karena melakukan tindak pidana kejahatan dengan hukuman paling singkat lima tahun.
Kepala dusun dibantu oleh perangkat dusun, yang terdiri dari: <br> <br>

Kepala urusan pemerintahan <br>
Kepala urusan pembangunan <br>
Kepala urusan kemasyarakatan <br>
Kepala urusan pemberdayaan masyarakat <br>
Perangkat dusun diangkat oleh kepala dusun setelah dikonsultasikan dengan kepala desa dan camat <br></p>
                <?php elseif ($detail == 'kepala_dusun_III') : ?>
                    <h2 class="text-left text-primary mb-2">Kepala Dusun III</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Tribrata Harkitnas Wahidji</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kepala Dusun III</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kepala dusun adalah perangkat desa yang berkedudukan sebagai unsur satuan tugas kewilayahan yang bertugas membantu kepala desa dalam pelaksanaan tugas wilayahnya. Kepala dusun bertanggung jawab kepada kepala desa.<br> <br>

Dalam struktur organisasi desa, kepala dusun berada di bawah sekretaris desa. Kepala dusun bertugas membantu kepala desa dalam melaksanakan kegiatan pemerintahan, pembangunan, pembinaan kemasyarakatan, dan pemberdayaan masyarakat di wilayahnya.<br> <br>

Berikut adalah tugas kepala dusun secara umum: <br> <br>

Membantu kepala desa dalam menyelenggarakan pemerintahan desa di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pembangunan desa di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pembinaan kemasyarakatan di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pemberdayaan masyarakat di wilayahnya <br>
Selain tugas umum tersebut, kepala dusun juga memiliki tugas khusus yang berkaitan dengan wilayahnya, seperti: <br><br>

Melakukan pendataan penduduk, rumah tangga, dan sarana prasarana di wilayahnya <br>
Melakukan pembinaan ketentraman dan ketertiban di wilayahnya <br>
Melakukan pembinaan pemberdayaan masyarakat di wilayahnya <br>
Melakukan pengelolaan wilayah di wilayahnya <br>
Kepala dusun diangkat oleh kepala desa setelah dikonsultasikan dengan camat atas nama bupati/walikota. Kepala dusun harus memenuhi persyaratan sebagai berikut:<br> <br>

Warga negara Indonesia yang bertakwa kepada Tuhan Yang Maha Esa <br>
Berpendidikan minimal Sekolah Menengah Atas (SMA) atau sederajat <br>
Berusia paling rendah 25 tahun <br>
Sehat jasmani dan rohani <br>
Berwibawa dan mampu menggerakkan masyarakat <br>
Tidak pernah dihukum penjara karena melakukan tindak pidana kejahatan dengan hukuman paling singkat lima tahun.
Kepala dusun dibantu oleh perangkat dusun, yang terdiri dari: <br> <br>

Kepala urusan pemerintahan <br>
Kepala urusan pembangunan <br>
Kepala urusan kemasyarakatan <br>
Kepala urusan pemberdayaan masyarakat <br>
Perangkat dusun diangkat oleh kepala dusun setelah dikonsultasikan dengan kepala desa dan camat <br></p>
                <?php elseif ($detail == 'kepala_dusun_IV') : ?>
                    <h2 class="text-left text-primary mb-2">Kepala Dusun IV</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Tohiti Ramsi Damiti</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kepala Dusun IV</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kepala dusun adalah perangkat desa yang berkedudukan sebagai unsur satuan tugas kewilayahan yang bertugas membantu kepala desa dalam pelaksanaan tugas wilayahnya. Kepala dusun bertanggung jawab kepada kepala desa.<br> <br>

Dalam struktur organisasi desa, kepala dusun berada di bawah sekretaris desa. Kepala dusun bertugas membantu kepala desa dalam melaksanakan kegiatan pemerintahan, pembangunan, pembinaan kemasyarakatan, dan pemberdayaan masyarakat di wilayahnya.<br> <br>

Berikut adalah tugas kepala dusun secara umum: <br> <br>

Membantu kepala desa dalam menyelenggarakan pemerintahan desa di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pembangunan desa di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pembinaan kemasyarakatan di wilayahnya <br>
Membantu kepala desa dalam menyelenggarakan pemberdayaan masyarakat di wilayahnya <br>
Selain tugas umum tersebut, kepala dusun juga memiliki tugas khusus yang berkaitan dengan wilayahnya, seperti: <br><br>

Melakukan pendataan penduduk, rumah tangga, dan sarana prasarana di wilayahnya <br>
Melakukan pembinaan ketentraman dan ketertiban di wilayahnya <br>
Melakukan pembinaan pemberdayaan masyarakat di wilayahnya <br>
Melakukan pengelolaan wilayah di wilayahnya <br>
Kepala dusun diangkat oleh kepala desa setelah dikonsultasikan dengan camat atas nama bupati/walikota. Kepala dusun harus memenuhi persyaratan sebagai berikut:<br> <br>

Warga negara Indonesia yang bertakwa kepada Tuhan Yang Maha Esa <br>
Berpendidikan minimal Sekolah Menengah Atas (SMA) atau sederajat <br>
Berusia paling rendah 25 tahun <br>
Sehat jasmani dan rohani <br>
Berwibawa dan mampu menggerakkan masyarakat <br>
Tidak pernah dihukum penjara karena melakukan tindak pidana kejahatan dengan hukuman paling singkat lima tahun.
Kepala dusun dibantu oleh perangkat dusun, yang terdiri dari: <br> <br>

Kepala urusan pemerintahan <br>
Kepala urusan pembangunan <br>
Kepala urusan kemasyarakatan <br>
Kepala urusan pemberdayaan masyarakat <br>
Perangkat dusun diangkat oleh kepala dusun setelah dikonsultasikan dengan kepala desa dan camat <br></p>
                <?php else : ?>
                    <h2 class="text-left text-primary mb-2">Halaman Tidak Ditemukan</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include("template/user/footer.php") ?>