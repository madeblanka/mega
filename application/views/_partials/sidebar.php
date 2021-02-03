<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('dashboard/dashboard') ?>">
                <div class="sidebar-brand-icon ">
                    <img src="<?php echo base_url('assetsimage/a.png') ?>" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3">SI UPTD<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <div class="nav-link">
                    <span>Selamat Datang, <?php print_r($this->session->userdata['display_name']); ?></span>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('dashboard/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Grafik
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Menu Grafik</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">List :</h6>
                        <a class="collapse-item" href="<?php echo site_url('guru/grafiknegeri') ?>">Guru Negeri</a>
                        <a class="collapse-item" href="<?php echo site_url('guru/grafikswasta') ?>">Guru Swasta</a>
                        <a class="collapse-item" href="<?php echo site_url('siswa/grafikbanding') ?>">Perbandingan Siswa</a>
                        <a class="collapse-item" href="<?php echo site_url('siswa/grafikperempuan') ?>">Siswa Perempuan</a>
                        <a class="collapse-item" href="<?php echo site_url('siswa/grafikpria') ?>">Siswa Pria</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tabel
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <?php if ($this->session->userdata('role') == "kadis" || $this->session->userdata('role') == "pegawai") : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Menu Tabel</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">List :</h6>
                            <?php if ($this->session->userdata('role') == "kadis") : ?>
                                <a class="collapse-item" href="<?php echo site_url('sekolah/tk') ?>">Tabel TK</a>
                                <a class="collapse-item" href="<?php echo site_url('sekolah/sd') ?>">Tabel SD</a>
                                <a class="collapse-item" href="<?php echo site_url('guru/index') ?>">Tabel Guru</a>
                                <a class="collapse-item" href="<?php echo site_url('inventaris/index') ?>">Tabel Inventaris</a>
                                <a class="collapse-item" href="<?php echo site_url('sekolah/index') ?>">Tabel Sekolah</a>
                                <a class="collapse-item" href="<?php echo site_url('siswa/index') ?>">Tabel Siswa</a>
                                <a class="collapse-item" href="<?php echo site_url('staff/index') ?>">Tabel Staff</a>
                                <a class="collapse-item" href="<?php echo site_url('jumlahsiswa/index') ?>">Tabel Jumlah Siswa</a>
                                <a class="collapse-item" href="<?php echo site_url('mapel/index') ?>">Tabel Mapel</a>
                                <a class="collapse-item" href="<?php echo site_url('user/index') ?>">Tabel User</a>
                                <a class="collapse-item" href="<?php echo site_url('pengumuman/index') ?>">Tabel Pengumuman</a>
                            <?php endif ?>
                            <?php if ($this->session->userdata('role') == "pegawai") : ?>
                                <a class="collapse-item" href="<?php echo site_url('guru/index') ?>">Tabel Guru</a>
                                <a class="collapse-item" href="<?php echo site_url('inventaris/index') ?>">Tabel Inventaris</a>
                                <a class="collapse-item" href="<?php echo site_url('sekolah/index') ?>">Tabel Sekolah</a>
                                <a class="collapse-item" href="<?php echo site_url('siswa/index') ?>">Tabel Siswa</a>
                                <a class="collapse-item" href="<?php echo site_url('staff/index') ?>">Tabel Staff</a>
                                <a class="collapse-item" href="<?php echo site_url('jumlahsiswa/index') ?>">Tabel Jumlah Siswa</a>
                                <a class="collapse-item" href="<?php echo site_url('mapel/index') ?>">Tabel Mapel</a>
                                <a class="collapse-item" href="<?php echo site_url('user/index') ?>">Tabel User</a>
                                <a class="collapse-item" href="<?php echo site_url('pengumuman/index') ?>">Tabel Pengumuman</a>
                            <?php endif ?>
                            <div class="collapse-divider"></div>
                        </div>
                    </div>
                </li>
            <?php endif ?>
            <?php if ($this->session->userdata('role') == "TK" || $this->session->userdata('role') == "SD") : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Menu Tabel</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">List :</h6>
                            <a class="collapse-item" href="<?php echo site_url('guru/jenis') ?>">Tabel Guru</a>
                            <a class="collapse-item" href="<?php echo site_url('inventaris/jenis') ?>">Tabel Inventaris</a>
                            <a class="collapse-item" href="<?php echo site_url('sekolah/jenis') ?>">Tabel Sekolah</a>
                            <a class="collapse-item" href="<?php echo site_url('siswa/jenis') ?>">Tabel Siswa</a>
                            <a class="collapse-item" href="<?php echo site_url('staff/jenis') ?>">Tabel Staff</a>
                            <a class="collapse-item" href="<?php echo site_url('jumlahsiswa/jenis') ?>">Tabel Jumlah Siswa</a>
                            <a class="collapse-item" href="<?php echo site_url('mapel/jenis') ?>">Tabel Mapel</a>

                            <div class="collapse-divider"></div>
                        </div>
                    </div>
                </li>
            <?php endif ?>
            <hr class="sidebar-divider">
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('login/logout') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <div class="container-fluid">