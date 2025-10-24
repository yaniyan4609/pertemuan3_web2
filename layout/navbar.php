<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Menu Navigasi</div>

                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <a class="nav-link" href="?page=pelanggan">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Pelanggan
                    </a>

                    <a class="nav-link" href="?page=produk">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Produk
                    </a>

                    <a class="nav-link" href="?page=penjualan">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Penjualan
                    </a>

                    <a class="nav-link" href="logout.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Logout
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?= $_SESSION['tb_user']['nama']; ?>
            </div>
        </nav>
    </div>