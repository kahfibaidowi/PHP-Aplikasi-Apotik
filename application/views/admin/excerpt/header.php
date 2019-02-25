<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apotik Sifa - Administrator</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- AUTOCOMPLETE STYLES -->
    <link href="<?=base_url()?>assets/css/easy-autocomplete.min.css" rel='stylesheet'>
    <link href='<?=base_url()?>assets/css/easy-autocomplete.themes.css' rel='stylesheet'>
    <!--CUSTOM STYLES-->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" />
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="<?=base_url()?>">
                    <i class='fa fa-cubes'></i> <?=conf_setting("nama")?>
                </a>
            </div>

            <div class="notifications-wrapper">
<ul class="nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-plus"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?=base_url()?>admin/user/ubah_password"><i class="fa fa-user-plus"></i> Ubah Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?=base_url()?>login/logout/"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
               
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="<?=base_url()?>assets/img/user.png" class="img-circle" />
                            <span class='user-name'><?=get_admin("nama_lengkap")?></span>
                           
                        </div>
                    </li>

                    <?php set_menu(['administrator', 'pelayanan', 'gudang']) ?>
                    <li>
                        <a href="<?=base_url()."admin/"?>"><i class="fa fa-dashboard "></i>Beranda</a>
                    </li>
                    <?php end_set_menu() ?>

                    <?php set_menu(['administrator']) ?>
                    <li>
                        <a href="#"><i class="fa fa-user "></i>Data Pegawai <i class="fa arrow"></i></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?=base_url()."admin/pegawai/"?>">Pegawai</a>
                            </li>
                             <li>
                                <a href="<?=base_url()."admin/user/"?>">User Account</a>
                            </li>
                        </ul>
                    </li>
                    <?php end_set_menu() ?>
                    
                    <?php set_menu(['administrator', 'gudang']) ?>
                    <li>
                        <a href="<?=base_url()."admin/obat"?>"><i class="fa fa-cube "></i>Obat </a>
                        
                    </li>
                    <?php end_set_menu() ?>
                     
                    <?php set_menu(['administrator', 'pelayanan']) ?>
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart "></i>Penjualan <i class='fa arrow'></i></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?=base_url()."admin/penjualan/"?>">Data Penjualan</a>
                            </li>
                            <li>
                                <a href="<?=base_url()."admin/penjualan/tambah"?>">Input Penjualan</a>
                            </li>
                        </ul>
                    </li>
                    <?php end_set_menu() ?>
                   
                    <?php set_menu(['administrator']) ?>
                    <li>
                        <a href="#"><i class="fa fa-gear"></i>Pengaturan <i class='fa arrow'></i></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?=base_url()."admin/setting/"?>">General</a>
                            </li>
                            <li>
                                <a href="<?=base_url()."admin/setting/backup/"?>">Backup</a>
                            </li>
                            <li>
                                <a href="<?=base_url()."admin/setting/restore/"?>">Restore</a>
                            </li>
                        </ul>
                    </li>
                    <?php end_set_menu() ?>
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->