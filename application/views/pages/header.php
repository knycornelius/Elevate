<!DOCTYPE html>
<html>

<head>
    <title>ELEVATE Indonesia: Belanja Fashion Online Terlengkap di Indonesia</title>
    
    
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    
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

    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
    <script>
        function logout() {
            sessionStorage.clear();
            window.location.href = "<?php echo base_url()?>index.php/login/logout";
        }

        function login() {
            window.location.href = "<?php echo base_url()?>index.php/login";

        }
    </script>
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    <?php
        echo $css;
        echo $js;
    ?>
</head>


<body>
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                    <h1><a href="<?php echo base_url('home'); ?>">Ele<span>vate</span></a></h1>
                </div>
                <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
                    <div class="cart box_1">
                        <a href="<?= base_url('index.php/shopcart') ?>">
                            <h3>
                                <div class="total">
                                    <!-- <span class="simpleCart_total"></span></div> -->
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
                                <li><a href="<?php echo base_url('index.php/home'); ?>">Home</a></li>

                                <li class="dropdown mega-dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></a>
                                    <div class="dropdown-menu mega-dropdown-menu">
                                        <div class="container-fluid">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="category">
                                                    <ul class="nav-list list-inline">
                                                        <li><a href="<?= base_url('index.php/men'); ?>">Men</a></li>
                                                        <li><a href="<?= base_url('index.php/women'); ?>">Women</a></li>
                                                        <li><a href="<?= base_url('index.php/accessory'); ?>">Accessory</a></li>
                                                        <li><a href="<?= base_url('index.php/kids'); ?>">Kids</a></li>
                                                        <li><a href="<?= base_url('index.php/footwear'); ?>"></a>Footwear</li>
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
                                    <li style="text-align:right;" class="nav-item dropdown " id="dropdownMenu1"><a href="#" class="nav-link dropdown-toggle user-action" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user['name']; ?><img src="<?= base_url('assets/images/' . $user['image']); ?>" style="width:30px;height:30px;" class="img-profile rounded-circle"></a>

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