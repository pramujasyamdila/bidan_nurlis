<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style=" background-image: linear-gradient(to right, rgb(43, 191, 254), rgb(105, 105, 105));">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url() ?>assets/admin/assets/dist/img/bidan.png" alt="bidan" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BIDAN NURLIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="<?= base_url('homeadmin/index') ?>" class="nav-link">
                        <i></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('bidan/index') ?>" class="nav-link">
                        <i class="fas fa-user-nurse"></i>
                        <p>
                            Bidan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pasien/index') ?>" class="nav-link">
                        <i class="fas fa-procedures"></i>
                        <p>
                            Pasien
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('jadwalbidan/index') ?>" class="nav-link">
                        <i class="far fa-calendar-alt"></i>
                        <p>
                            Jadwal Bidan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('laporanpersalinan/index') ?>" class="nav-link">
                        <i class="far fa-calendar-alt"></i>
                        <p>
                            Laporan Persalinan
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Pelayanan Lainnya
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>KB Andalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cek Kolestrol</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cek Asam Urat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/boxed.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cek Gula Darah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tindik Bayi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                        <i class="far fa-calendar-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>