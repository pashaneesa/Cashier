<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Koperasi</title>
     <link rel="short icon" href="<?php echo base_url().'assets2/images/logo.png'?>" type="image/png" />
        <link type="text/css" href="<?php echo base_url().'assets2/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets2/bootstrap/css/bootstrap-responsive.min.css'?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets2/css/theme.css'?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets2/images/icons/css/font-awesome.css'?>" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
</head>
<body>
    <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo base_url().'welcome'?>">Koperasi </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">             
                        <ul class="nav pull-right">
                      
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon-user"></div>
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url().'welcome/profil'?>">Your Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url().'administrator/logout'?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
    <!-- /navbar -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo base_url().'welcome'?>"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="<?php echo base_url().'admin/barang'?>"><i class="menu-icon icon-inbox"></i>Stok Barang </a>
                                </li>
                                <li><a href="<?php echo base_url().'admin/penjualan'?>"><i class="menu-icon icon-shopping-cart"></i>Transaksi </a>
                                </li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-bar-chart">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Laporan </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="<?php echo base_url().'admin/lapbarang'?>"><i class="icon-inbox"></i>Stok Barang </a></li>
                                        <li><a href="<?php echo base_url().'admin/laptransaksi'?>"><i class="icon-shopping-cart"></i>Transaksi </a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!--/.widget-nav-->
                                                       
                            <ul class="widget widget-menu unstyled">
                                <li><a href="<?php echo base_url().'welcome/profil'?>"><i class="menu-icon icon-user"></i>Profil </a></li>
                                <li><a href="<?php echo base_url().'administrator/logout'?>"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                        <h1><center>Profil</center></h1>
                        <div class="module">
                            <div class="module-body">
                                <div class="profile-head media">
                                    <img style="margin-left:auto;margin-right:auto;display:block;width:300px;" src="<?php echo base_url().'assets2/images/profil.jpeg'?>" alt="gambar"/>
                                    <br>
                                </div>
                                <br>
                                <section class="docs">
                                    <center>
                                        <p style="font-size: 17px"><b>Nama</b></p>
                                        <p style="font-size: 18px">Muhamad Esa Ardana</p>
                                        <br>
                                        <p style="font-size: 17px"><b>NIM</b></p>
                                        <p style="font-size: 18px">1830126</p>
                                        <br>
                                        <p style="font-size: 17px"><b>Prodi</b></p>
                                        <p style="font-size: 18px">Amikom</p>
                                        <br>
                                        <p style="font-size: 17px"><b>Asal</b></p>
                                        <p style="font-size: 18px">Pontianak</p>
                                    </center>
                                    
                                </section>

                            </div>
                        </div>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <div class="footer">
        <div class="container">
            <b class="copyright">&copy; 2021 </b>All rights reserved.
        </div>
    </div>
    <script src="<?php echo base_url().'assets2/scripts/jquery-1.9.1.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets2/scripts/jquery-ui-1.10.1.custom.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets2/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets2/scripts/flot/jquery.flot.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets2/scripts/flot/jquery.flot.resize.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets2/scripts/datatables/jquery.dataTables.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets2/scripts/common.js'?>" type="text/javascript"></script>
</body>
