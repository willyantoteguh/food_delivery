<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= base_url(); ?>/images/user.png" class="img-circle" alt="Foto Profil" />
                </div>
                <div class="pull-left info">
                    <p>Food Delivery</p>
                    <a href="<?= site_url('#'); ?>">
                        <i class="fa fa-circle text-success"></i>
                        Online
                    </a>
                </div>
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>

                    <li class="<?= ($halaman == 'dashboard') ? 'active' : ''; ?>">
                        <a href="<?= site_url('dashboard');  ?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?= ($halaman == 'dashboard') ? 'active' : ''; ?>">
                        <a href="<?= site_url('dashboard');  ?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?= ($halaman == 'dashboard') ? 'active' : ''; ?>">
                        <a href="<?= site_url('dashboard');  ?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?= ($halaman == 'dashboard') ? 'active' : ''; ?>">
                        <a href="<?= site_url('dashboard');  ?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
        </div>
    </section>
</aside>