<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?php echo base_url(); ?>dist/img/user_administrator.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Kader</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-header">Kader</li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-user-friends"></i>
                    <p>
                        Data Orang Tua
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>kader/orangtua/add" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>kader/orangtua/list" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Orang Tua</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>
                        Informasi Posyandu
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>kader/berita/list" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Berita</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>kader/berita/add" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Berita</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-child"></i>
                    <p>
                        Data KMS
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>kms/list" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data KMS</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>kader/berat_badan/add" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Berat Badan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>kader/data_imunisasi/add" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data Imunisasi</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>
                        Kelola Data Imunisasi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>kader/imunisasi/list" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lihat Data Imunisasi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>kader/imunisasi/add" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Imunisasi</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->