<!DOCTYPE html>
<html>

<head>
    <title>ELEVATE Indonesia: Belanja Fashion Online Terlengkap di Indonesia</title>
    <link href="<?php echo base_url('assets/'); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/'); ?>js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href=//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href=//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- start menu -->
    <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/simpleCart.min.js"> </script>
    <!-- slide -->
    <script src="<?php echo base_url('assets/'); ?>js/responsiveslides.min.js"></script>
    <script>
        $(function() {
            $("#slider").responsiveSlides({
                auto: false,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!-- animation-effect -->
    <link href="<?php echo base_url('assets/'); ?>css/animate.min.css" rel="stylesheet">
    <script src="<?php echo base_url('assets/'); ?>js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
    <script>
        function logout() {
            sessionStorage.clear();
            window.location.href = "http://localhost/elevate/index.php/login/logout";
        }

        function login() {
            window.location.href = "http://localhost/elevate/index.php/login";

        }
    </script>
    <style>
        .navbar .nav-item i {
            font-size: 18px;
        }

        .navbar .dropdown-item i {
            font-size: 16px;
            min-width: 22px;
        }

        .navbar .nav-item.open>a {
            background: none !important;
        }

        .navbar .dropdown-menu {
            border-radius: 1px;
            border-color: #e5e5e5;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
        }

        .navbar .dropdown-menu li a {
            color: #777;
            padding: 8px 20px;
            line-height: normal;
        }

        .navbar .dropdown-menu li a:hover,
        .navbar .dropdown-menu li a:active {
            color: #333;
        }

        .navbar .dropdown-item .material-icons {
            font-size: 21px;
            line-height: 16px;
            vertical-align: middle;
            margin-top: -2px;
        }

        .navbar .badge {
            background: #f44336;
            font-size: 11px;
            border-radius: 20px;
            position: absolute;
            min-width: 10px;
            padding: 4px 6px 0;
            min-height: 18px;
            top: 5px;
        }

        .navbar ul.nav li a.notifications,
        .navbar ul.nav li a.messages {
            position: relative;
            margin-right: 10px;
        }

        .navbar ul.nav li a.messages {
            margin-right: 20px;
        }

        .navbar a.notifications .badge {
            margin-left: -8px;
        }

        .navbar a.messages .badge {
            margin-left: -4px;
        }

        .navbar .active a,
        .navbar .active a:hover,
        .navbar .active a:focus {
            background: transparent !important;
        }




        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>


<body>
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                    <h1><a href="<?php echo base_url('home'); ?>">Ele <span>vate</span></a></h1>
                </div>
                <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
                    <div class="cart box_1">
                        <a href="<?= base_url('index.php/shopcart') ?>">
                            <h3>
                                <div class="total">
                                    <span class="simpleCart_total"></span></div>
                                <img src="<?php echo base_url('assets/'); ?>images/cart.png" alt="" />
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                    </div>
                </div>
                <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                    <span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
                    <p>Call me</p>
                </div>
                <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">
                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="container">
            <div class="head-top">
                <div class="n-avigation">

                    <nav class="navbar nav_bottom" role="navigation">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse justify-content-start" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav nav_1">
                                <li><a href="<?php echo base_url('home'); ?>">Home</a></li>

                                <li class="dropdown mega-dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></a>
                                    <div class="dropdown-menu mega-dropdown-menu">
                                        <div class="container-fluid">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="category">
                                                    <ul class="nav-list list-inline">
                                                        <li><a href="<?= base_url('men'); ?>">Men</a></li>
                                                        <li><a href="<?= base_url('women'); ?>">Women</a></li>
                                                        <li><a href="<?= base_url('accessory'); ?>">Accessory</a></li>
                                                        <li><a href="<?= base_url('kids'); ?>">Kids</a></li>
                                                        <li><a href="<?= base_url('footwear'); ?>"></a>Footwear</li>

                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Nav tabs -->

                                    </div>
                                </li>
                                <li><a href="<?= base_url('products'); ?>">Products</a></li>
                                <li><a href="<?= base_url('contact'); ?>">Contact</a></li>


                                <?php if ($user) { ?>
                                    <li style="text-align:right;" class="nav-item dropdown " id="dropdownMenu1"><a href="#" class="nav-link dropdown-toggle user-action" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/images/' . $user['image']); ?>" class="img-profile rounded-circle"><?php echo $user['name']; ?></a>

                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

                                            <li><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i>
                                                    Profile</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="dropdown-item" onclick="logout()"><a href="#" class="dropdown-item">
                                                    <i class="material-icons">&#xE8AC;</i>
                                                    Logout
                                            </li>

                                            <!-- <div class="dropdown-divider"></div>
                                            <p class="dropdown-item" onclick="logout()" data-toggle="modal" data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Logout
                                            </p> -->
                                        </ul>
                                    </li><?php } ?>
                                <?php if (!$user) { ?>
                                    <li class="last"><a href="<?= base_url('login'); ?>">Sign In</a></li><?php } ?>
                            </ul>

                        </div><!-- /.navbar-collapse -->

                    </nav>
                </div>


                <div class="clearfix"> </div>
                <!---pop-up-box---->
                <link href="<?php echo base_url('assets/'); ?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                <script src="<?php echo base_url('assets/'); ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
                <!---//pop-up-box---->
                <div id="small-dialog" class="mfp-hide">
                    <div class="search-top">
                        <div class="login">
                            <form action="#" method="post">
                                <input type="submit" value="">
                                <input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">

                            </form>
                        </div>
                        <p> Shopping</p>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });

                    });
                </script>
                <!---->
            </div>
        </div>
    </div>
    <!--banner-->

</body>

</html>