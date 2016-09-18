<!DOCTYPE.php>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text.php;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assests/images/favicon.ico'); ?>">
                    
    <title>
        ToletRoom 
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assests/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Owl room Assests -->
    <link href="<?= base_url('assests/css/owl.room.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assests/css/owl.tolet.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assests/css/owl.transitions.css') ?>" rel="stylesheet">

    <!-- Flexslider CSS -->
    <link href="<?= base_url('assests/css/flexslider.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assests/css/main_style.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('assests/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body>

    <!-- Top Bar -->
    <section class="top_sec">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 top_lft">
                    <div class="soc_ico">
                        <ul>
                            <li class="tweet">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="fb">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="insta">
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="linkd">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="ytube">
                                <a href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="rss">
                                <a href="#">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>


                        </ul>

                    </div>
                </div>
                <!-- /.top-left -->
                <div class="col-xs-12 col-md-6 top_rgt">                  
                    
                    <div class="sig_in">
                        <p><i class="fa fa-user"></i>
                            <a href="#login_box" class="log_btn" data-toggle="modal"> Sign in </a> or <a class="reg_btn" href="#reg_box" data-toggle="modal">create account </a> </p>
                    </div>

                </div>
                <!-- /.top-right -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Navigation -->
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Logo -->
                <a class="navbar-brand" href="index.php"><img src="<?= base_url('assests/images/logo.png') ?>" alt="logo">
                </a>
            </div>
            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="" href="<?= base_url(''); ?>"> Home </a>
                    </li>
                    <li>
                        <a href="<?= base_url('index.php/Home/property') ?>">Property </a>
                    </li>
                    <li>
                        <a href="<?= base_url('index.php/Home/about') ?>">About Us</a>
                    </li>
                    <li>
                        <a class="" href="<?= base_url('index.php/Home/contact') ?>">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Stat Banner -->
    <header id="banner" class="stat_bann">
        <div class="bannr_sec">
            <img src="<?= base_url('assests/images/room.jpg') ?>" alt="Banner">
            <h1 class="main_titl">
            Best Room Provider For Rent 
        </h1>
            <h4 class="sub_titl">
            provide room service
        </h4>

        </div>
    </header>

