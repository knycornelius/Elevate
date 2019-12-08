<!DOCTYPE html>
<html>
<?= $header; ?>

<body>
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="<?php echo base_url(''); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Accesory</li>
            </ol>
        </div>
    </div>
    <!--content-->
    <div class="products">
        <div class="container">
            <h2>Accessory</h2>
            <div class="col-md-9">
                <?php $j = 0;
                $x = 0;
                for ($i = 0; $i < 3; $i++) {

                    ?>
                    <div class="content-top1">
                        <?php

                            for ($j = 0; $j < 3; $j++) {

                                ?>
                            <div class="col-md-4 col-md4">
                                <div class="col-md1 simpleCart_shelfItem">
                                    <a href="detail?category=accessory&id=<?php echo $accdata[$x]['id_item']; ?>&size=M">
                                        <img class="img-responsive" src="<?php echo base_url('assets/images/e_accessory/') . $accdata[$x]['image1']; ?>" style="width: 250px; height: 250px" alt="" />
                                    </a>
                                    <h3 style="height: 2.5rem"><a href="detail?category=accessory&id=<?php echo $accdata[$x]['id_item'] ?>&size=M"><?= $accdata[$x]['item_name']; ?></a></h3>
                                    <div class="price">
                                        <h5 class="item_price"><?= "Rp." . number_format($accdata[$x]['price'], 0, ",", ".") ?></h5>

                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="text-right">
                                        <a style="color:grey;" href="detail?category=accessory&id=<?php echo $accdata[$x]['id_item']; ?>&size=M"><span class="glyphicon glyphicon-search text-right"> </span> </a>
                                    </div>
                                </div>
                            </div><?php
                                            $x++;
                                        }

                                        ?>

                        <div class="clearfix"> </div>
                    </div><?php
                            } ?>

            </div>
            <div class="col-md-3 product-bottom">
                <!--categories-->
                <?php echo $categories; ?>
                <!--initiate accordion-->
                <script type="text/javascript">
                    $(function() {
                        var menu_ul = $('.menu-drop > li > ul'),
                            menu_a = $('.menu-drop > li > a');
                        menu_ul.hide();
                        menu_a.click(function(e) {
                            e.preventDefault();
                            if (!$(this).hasClass('active')) {
                                menu_a.removeClass('active');
                                menu_ul.filter(':visible').slideUp('normal');
                                $(this).addClass('active').next().stop(true, true).slideDown('normal');
                            } else {
                                $(this).removeClass('active');
                                $(this).next().stop(true, true).slideUp('normal');
                            }
                        });

                    });
                </script>
                <!--//menu-->
                <!--seller-->

                <div class="product-bottom">
                    <h3 class="cate">Best Sellers</h3>
                    <?php $x = 0;
                    for ($i = 0; $i < 4; $i++) { ?>
                        <div class="product-go">
                            <div class=" fashion-grid">
                                <a href="detail?category=accessory&id=<?php echo $accdata[$x]['id_item']; ?>&size=M"><img class="img-responsive " src="<?= base_url('assets/images/e_accessory/') . $accdata[$x]['image1']; ?>" alt=""></a>
                            </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="detail?category=accessory&id=<?php echo $accdata[$x]['id_item']; ?>&size=M"><?= $accdata[$x]['item_name']; ?> </a></h6>
                                <h5 class="item_price"> <?= "Rp." . number_format($accdata[$x]['price'], 0, ",", "."); ?></h5>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    <?php $x++;
                    } ?>
                </div>

                <!--//seller-->
                <!--tag-->
                <!-- <div class="tag">
					<h3 class="cate">Tags</h3>
					<div class="tags">
						<ul>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">design</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
							<li><a href="#">dress</a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
				</div> -->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//content-->
    <!--footer-->
    <?= $footer; ?>
    <!--footer-->
</body>

</html>