<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mt-3" href="<?php echo base_url('welcome') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
            </a>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome') ?>">
                <div class="sidebar-brand-text mx-3">Lauren's Clothes</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('welcome') ?>">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                CATEGORIES
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/top') ?>">
                    <i class="fas fa-tshirt"></i>
                    <span>Top</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/bottom') ?>">
                    <i class="fas fa-tshirt"></i>
                    <span>Bottom</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/dress') ?>">
                    <i class="fas fa-tshirt"></i>
                    <span>Dress</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/set') ?>">
                    <i class="fas fa-tshirt"></i>
                    <span>Set</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/jumpsuit') ?>">
                    <i class="fas fa-tshirt"></i>
                    <span>Jumpsuit</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/outer') ?>">
                    <i class="fas fa-tshirt"></i>
                    <span>Outer</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/skirt') ?>">
                    <i class="fas fa-tshirt"></i>
                    <span>Skirt</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/accessories') ?>">
                    <i class="far fa-gem"></i>
                    <span>Accessories</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card">
                <img class="sidebar-card-illustration" src="img/undraw_rocket.svg" alt="">
                <h5>Contact Us</h5>
                <p class="text-center mb-3"><strong>Lauren's Clothes</strong> memiliki Admin yang siap melayani, Instagram dan Marketplace lain juga loh!</p>
                <a class="btn btn-success btn-sm mb-5" href="https://l.instagram.com/?u=https%3A%2F%2Fmsha.ke%2Flaurensclothes.id&e=ATMz4GZKhOG0xffpmUzWBf5A3AvD5eWF6ezcskblKt6Jd-KLfrdZ2sgMeAfmkhZLZ6duCk3bN-WbQ4RAkibY1A&s=1">Click Here!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <?php echo form_open('admin/data_barang/search') ?>
                            <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for...">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                            <?php echo form_close() ?>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </li>

                        <div class="navbar">
                            <div class="navbar">
                                <li class="dropdown ">
                                    <div class="dropdown">
                                        <a class="btn btn-success btn-sm" href="<?php echo base_url('ahp/tambah_ahp') ?>"> Confuse ?</a>
                                    </div>
                                </li>
                            </div>
                            <li class="dropdown ">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Choose Color
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="nav-link" href="<?php echo base_url('warna/white') ?>">
                                            <span style="color: lightgray;">
                                                <i class="fas fa-palette mr-2"></i>
                                            </span>White</a>
                                        <a class="nav-link" href="<?php echo base_url('warna/black') ?>">
                                            <i class="fas fa-palette mr-2"></i>Black</a>
                                        <a class="nav-link" href="<?php echo base_url('warna/pink') ?>">
                                            <span style="color: pink;">
                                                <i class="fas fa-palette mr-2"></i>
                                            </span></i>Pink</a>
                                        <a class="nav-link" href="<?php echo base_url('warna/red') ?>">
                                            <span style="color: red;">
                                                <i class="fas fa-palette mr-2"></i>
                                            </span></i>Red</a>
                                        <a class="nav-link" href="<?php echo base_url('warna/brown') ?>">
                                            <span style="color: brown;">
                                                <i class="fas fa-palette mr-2"></i>
                                            </span></i></i>Brown</a>
                                        <a class="nav-link" href="<?php echo base_url('warna/cream') ?>">
                                            <span style="color: #EEE1B1;">
                                                <i class="fas fa-palette mr-2"></i>
                                            </span></i></i>Cream</a>
                                        <a class="nav-link" href="<?php echo base_url('warna/green') ?>">
                                            <span style="color: green;">
                                                <i class="fas fa-palette mr-2"></i>
                                            </span></i></i>Green</a>
                                        <a class="nav-link" href="<?php echo base_url('warna/blue') ?>">
                                            <span style="color: lightblue;">
                                                <i class="fas fa-palette mr-2"></i>
                                            </span></i></i>Blue</a>
                                    </div>
                                </div>
                            </li>
                        </div>

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php $keranjang = '<i class="fas fa-shopping-cart"></i> : ' . $this->cart->total_items() . ' items' ?>
                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <ul class="na navbar-nav navbar-right">
                                <?php if ($this->session->userdata('username')) { ?>
                                    <li>
                                        <div><i class="fas fa-user mr-2"></i><?php echo $this->session->userdata('username') ?>
                                        </div>
                                    </li>
                                    <li class="ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
                                <?php } else { ?>
                                    <li><?php echo anchor('auth/login', 'Login'); ?></li>
                                <?php } ?>
                            </ul>
                        </div>

                    </ul>

                </nav>
                <!-- End of Topbar -->