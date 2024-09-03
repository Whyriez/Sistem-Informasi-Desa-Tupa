<?php $page = basename($_SERVER['PHP_SELF']); ?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-text mx-3">Desa Tupa</div>
    </a>

    <!-- Divider -->

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pages
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($page == 'index.php') : echo 'active';
                        endif; ?>">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item  <?php if ($page == 'geografisLetak.php' || $page == 'geografisLuas.php') : echo 'active';
                            endif; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGeo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-map" aria-hidden="true"></i>
            <span>Data Geografis</span>
        </a>
        <div id="collapseGeo" class="collapse  <?php if ($page == 'geografisLetak.php' || $page == 'geografisLuas.php') : echo 'show';
                                                endif; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php if ($page == 'geografisLetak.php') : echo 'active';
                                        endif; ?>" href="geografisLetak.php">Data Letak Wilayah</a>
                <a class="collapse-item <?php if ($page == 'geografisLuas.php') : echo 'active';
                                        endif; ?>" href="geografisLuas.php">Data Luas Wilayah</a>
            </div>
        </div>
    </li>

    <li class="nav-item <?php if ($page == 'demografis.php') : echo 'active';
                        endif; ?>">
        <a class="nav-link" href="demografis.php">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>Data Demografis</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Informasi
    </div>


    <li class="nav-item <?php if ($page == 'berita.php') : echo 'active';
                        endif; ?>">
        <a class="nav-link" href="berita.php">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span></a>
    </li>
    <li class="nav-item <?php if ($page == 'pengumuman.php') : echo 'active';
                        endif; ?>">
        <a class="nav-link" href="pengumuman.php">
            <i class="fas fa-fw fa-info"></i>
            <span>Pengumuman</span></a>
    </li>
    <li class="nav-item <?php if ($page == 'potensiDesa.php') : echo 'active';
                        endif; ?>">
        <a class="nav-link" href="potensiDesa.php">
            <i class="fas fa-fw fa-landmark"></i>
            <span>Potensi Desa</span></a>
    </li>
    <li class="nav-item <?php if ($page == 'perangkatDesa.php') : echo 'active';
                        endif; ?>">
        <a class="nav-link" href="perangkatDesa.php">
            <i class="fas fa-fw fa-landmark"></i>
            <span>Perangkat Desa</span></a>
    </li>
    <li class="nav-item <?php if ($page == 'lembagatDesa.php') : echo 'active';
                        endif; ?>">
        <a class="nav-link" href="lembagaDesa.php">
            <i class="fas fa-fw fa-landmark"></i>
            <span>Lembaga Desa</span></a>
    </li>

    <li class="nav-item  <?php if ($page == 'suratPindahPenduduk.php' || $page == 'suratPengantarNikah.php' || $page == 'suratMeninggalDunia.php' || $page == 'suketAhliWaris.php' || $page == 'suketKelahiran.php' || $page == 'suketTanah.php' || $page == 'suratKK.php' || $page == 'suratAkta.php' || $page == 'suratTidakMampu.php' || $page == 'suketPenghasilan.php' || $page == 'sppbd.php') : echo 'active';
                            endif; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pelayanan Surat</span>
        </a>
        <div id="collapseTwo" class="collapse  <?php if ($page == 'suratPindahPenduduk.php' || $page == 'suratPengantarNikah.php' || $page == 'suratMeninggalDunia.php' || $page == 'suketAhliWaris.php' || $page == 'suketKelahiran.php' || $page == 'suketTanah.php' || $page == 'suratKK.php' || $page == 'suratAkta.php' || $page == 'suratTidakMampu.php' || $page == 'suketPenghasilan.php' || $page == 'sppbd.php') : echo 'show';
                                                endif; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Jenis Surat :</h6>
                <a class="collapse-item <?php if ($page == 'suratPindahPenduduk.php') : echo 'active';
                                        endif; ?>" href="suratPindahPenduduk.php">Surat Pindah Penduduk</a>
                <a class="collapse-item <?php if ($page == 'suratPengantarNikah.php') : echo 'active';
                                        endif; ?>" href="suratPengantarNikah.php">Surat Pengantar Nikah</a>
                <a class="collapse-item <?php if ($page == 'suratMeninggalDunia.php') : echo 'active';
                                        endif; ?>" href="suratMeninggalDunia.php">Suket Meninggal Dunia</a>
                <a class="collapse-item <?php if ($page == 'suketAhliWaris.php') : echo 'active';
                                        endif; ?>" href="suketAhliWaris.php">Suket Ahli Waris</a>
                <a class="collapse-item <?php if ($page == 'suketKelahiran.php') : echo 'active';
                                        endif; ?>" href="suketKelahiran.php">Suket kelahiran</a>
                <a class="collapse-item <?php if ($page == 'suketTanah.php') : echo 'active';
                                        endif; ?>" href="suketTanah.php">Suket Tanah/Sertif Tanah</a>
                <a class="collapse-item <?php if ($page == 'suratKK.php') : echo 'active';
                                        endif; ?>" href="suratKK.php">Surat Kartu Keluarga</a>
                <a class="collapse-item <?php if ($page == 'suratAkta.php') : echo 'active';
                                        endif; ?>" href="suratAkta.php">Surat Akta Kelahiran</a>
                <a class="collapse-item <?php if ($page == 'suratTidakMampu.php') : echo 'active';
                                        endif; ?>" href="suratTidakMampu.php">Suket Tidak Mampu</a>
                <a class="collapse-item <?php if ($page == 'suketPenghasilan.php') : echo 'active';
                                        endif; ?>" href="suketPenghasilan.php">Suket Penghasilan</a>
                <a class="collapse-item <?php if ($page == 'sppbd.php') : echo 'active';
                                        endif; ?>" href="sppbd.php">SPPBD (SPORADIK)</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>