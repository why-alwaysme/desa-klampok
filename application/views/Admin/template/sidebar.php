        <!-- Sidebar -->
        <ul class="navbar-nav adminbar sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin/Dashboard') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fab fa-envira"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Klampok</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('Admin/Dashboard') ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Admin/Berita') ?>">
                    <i class="fas fa-bullhorn"></i>
                    <span>Berita</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Admin/Posyandu') ?>">
                    <i class="fas fa-clinic-medical"></i>
                    <span>Informasi Posyandu</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Admin/Data_posyandu') ?>">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Data Posyandu</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->