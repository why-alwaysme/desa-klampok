        <!-- Sidebar -->
        <ul class="navbar-nav adminbar2 sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin/Dashboard2') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-hand-holding-water"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Air Klampok</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('Admin/Dashboard2') ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Admin/Informasi_air') ?>">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Informasi Penjualan</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Admin/Data_air') ?>">
                    <i class="fas fa-fw fa-list-ul"></i>
                    <span>Data Pemesanan Air</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->