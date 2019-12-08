<?= $header; ?>
<style>
	.vertical-alignment-helper {
		display: table;
		height: 100%;
		width: 100%;
	}

	.vertical-align-center {
		/* To center vertically */
		display: table-cell;
		vertical-align: middle;
	}

	.modal-content {
		/* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
		width: inherit;
		height: inherit;
		/* To center horizontally */
		margin: 0 auto;
	}
</style>


<body>
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="<?php echo base_url(''); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Detail</li>
			</ol>
		</div>
	</div>
	<div class="single">

		<div class="container">
			<div class="col-md-9">
				<form method="post" action="detail/add_to_cart">
					<?php foreach ($item as $row) {

						?>
						<div class="col-md-5 grid">
							<div>
								<div class="flex-viewport" style="overflow:hidden; position: relative;">
									<ul class="slides" style="width:1000%; transition-duration: 0.6s; ">
										<li data-thumb="<?= base_url('assets/images/e_' . $itemcategory . '/' . $row['image1']); ?>" class aria-hidden="true" style="width: 63px; float:left; display:block;">
											<div class="thumb-image"> <img src="<?= base_url('assets/images/e_' . $itemcategory . '/' . $row['image1']); ?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
										</li>

									</ul>
								</div>


							</div>
							<ol class="flex-control-nav flex-control-thumbs">
								<li data-thumb="<?= base_url('assets/images/e_' . $itemcategory . '/' . $row['image1']); ?>">
									<img src="<?= base_url('assets/images/e_' . $itemcategory . '/' . $row['image1']); ?>" class="" draggable="false">
								</li>
								<li data-thumb="<?= base_url('assets/images/e_' . $itemcategory . '/' . $row['image2']); ?>">
									<img src="<?= base_url('assets/images/e_' . $itemcategory . '/' . $row['image2']); ?>" class="" draggable="false">
								</li>
								<li data-thumb="<?= base_url('assets/images/e_' . $itemcategory . '/' . $row['image3']); ?>">
									<img src="<?= base_url('assets/images/e_' . $itemcategory . '/' . $row['image3']); ?>" class="" draggable="false">
								</li>
							</ol>
							<ul class="flex-direction-nav">
								<li class="flex-nav-prev">
									<a class="flex-prev" href="#"> Previous </a>
								</li>
								<li class="flex-nav-next">
									<a class="flex-next" href="#"> Next </a>
								</li>
							</ul>
						</div>
						<div class="col-md-7 single-top-in">
							<div class="single-para simpleCart_shelfItem">
								<h2><?= $row['item_name']; ?></h2>

								<label class="add-to item_price">
									<h4 style="font-weight: normal; color: black;"><?= "Rp." . number_format($row['price'], 0, ",", ".") ?></h4>
								</label>

								<div class="available">
									<h6>Available Options :</h6>
									<ul>

										<li>Size:<select class="form-control" name="size" onchange="location=this.value">
												<option value="detail?category=<?= $itemcategory ?>&id=<?php echo $row['id_item'] ?>&size=S" <?php echo ($row['size'] == 'S') ? 'selected' : '' ?>>S</option>
												<option value="detail?category=<?= $itemcategory ?>&id=<?php echo $row['id_item'] ?>&size=M" <?php echo ($row['size'] == 'M') ? 'selected' : '' ?>>M</option>
												<option value="detail?category=<?= $itemcategory ?>&id=<?php echo $row['id_item'] ?>&size=L" <?php echo ($row['size'] == 'L') ? 'selected' : '' ?>>L</option>
												<option value="detail?category=<?= $itemcategory ?>&id=<?php echo $row['id_item'] ?>&size=XL" <?php echo ($row['size'] == 'XL') ? 'selected' : '' ?>>XL</option>

											</select></li>
										<li>Quantity:
											<select class="form-control" name="stock">
												<option <?php echo ($row['stock'] == '1') ? 'selected' : '' ?> value="1">1</option>
												<option <?php echo ($row['stock'] == '2') ? 'selected' : '' ?> value="2">2</option>
												<option <?php echo ($row['stock'] == '3') ? 'selected' : '' ?> value="3">3</option>
												<option <?php echo ($row['stock'] == '4') ? 'selected' : '' ?> value="4">4</option>
												<option <?php echo ($row['stock'] == '5') ? 'selected' : '' ?> value="5">5</option>

											</select></li>
									</ul>
								</div>
								<div>
									<input type="hidden" name="id" value="<?php echo $row['id_item']; ?>">
									<input type="hidden" name="name" value="<?php echo $row['item_name']; ?>">
									<input type="hidden" name="prices" value="<?php echo $row['price']; ?>">
									<input type="hidden" name="images1" value="<?php echo $row['image1']; ?>">
									<input type="hidden" name="itemcategory" value="<?php echo $itemcategory; ?>">
									<input type="hidden" name="size" value=<?php echo $row['size']; ?>>

								</div>

								<a data-toggle="modal" data-target="#myModal" id="addcart" name="addcart" class="cart" value="Add to">
									<font color="#FFF">Add to Cart</font>
								</a>
								<input type="submit" id="buynow" name="buynow" class="cart" value="Buy Now">

							</div>
						</div>
						<div class="clearfix"> </div>
					<?php } ?>
					<br>
					<br>
					<br>
					<br>
					<div class="product-bottom">
						<h3 class="cate">Related</h3>
					</div>

					<div class="content-top1">

						<?php

						$x = 0;
						for ($i = 0; $i < 3; $i++) {

							?>
							<div class="col-md-4 col-md4">
								<div class="col-md1 simpleCart_shelfItem">
									<a href="detail?category=<?= $itemcategory; ?>&id=<?php echo $cat[$x]['id_item']; ?>&size=M">
										<img class="img-responsive" src="<?= base_url('assets/images/e_' . $itemcategory . '/' . $cat[$x]['image1']);
																				?>" alt="" />
									</a>
									<h3><a href="detail?category=<?= $itemcategory; ?>&id=<?php echo $cat[$x]['id_item']; ?>&size=M"><?php echo $cat[$x]['item_name']; ?></a></h3>
									<div class="price">
										<h5 class="item_price"><?php echo "Rp." . number_format($cat[$x]['price'], 0, ",", "."); ?></h5>

										<div class="clearfix"> </div>
									</div>
									<div class="text-right">
										<a style="color:grey;" href="detail?category=<?= $itemcategory; ?>&id=<?php echo $cat[$x]['id_item']; ?>&size=M"><span class="glyphicon glyphicon-search text-right"> </span> </a>
									</div>

								</div>
							</div><?php $x++;
									} ?>


						<div class="clearfix"> </div>
					</div>

					<div class="modal fade" id="myModal" role="dialog" tabindex="-1">
						<div class="vertical-alignment-helper">
							<div class="modal-dialog modal-sm vertical-align-center">

								<div class="modal-content">
									<form method="post" action="<?php echo base_url('index.php/detail/add_to_cart') ?>">

										<div class="modal-body">
											<font color="$28a745">
												Product added to cart</font>
										</div>
										<div class="modal-footer">


											<button type="submit" name="addcart" class="btn btn-sm bg-success"><span class="glyphicon glyphicon-ok bg-success"></span>OK</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!----->
			<div class="col-md-3 product-bottom">
				<!--categories-->
				<?= $categories; ?>
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
								<a href="detail?category=<?= $itemcategory; ?>&id=<?php echo $cat[$x]['id_item']; ?>&size=M"><img class="img-responsive " src="<?= base_url('assets/images/e_' . $itemcategory . '/' . $cat[$x]['image1']);
																																									?>" alt=""></a>
							</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="detail?category=<?= $itemcategory; ?>&id=<?php echo $cat[$x]['id_item']; ?>&size=M"><?= $cat[$x]['item_name']; ?> </a></h6>
								<h5 class="item_price"> <?= "Rp." . number_format($cat[$x]['price'], 0, ",", "."); ?></h5>
							</div>
							<div class="clearfix"> </div>
						</div><?php $x++;
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
	<!--footer-->
	<?= $footer; ?>
	<!--footer-->
	<!-- slide -->
	<script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/imagezoom.js"></script>
	<!-- start menu -->
	<script type="text/javascript" src="<?= base_url('assets/'); ?>js/memenu.js"></script>
	<script>
		$(document).ready(function() {
			$(".memenu").memenu();
		});
	</script>
	<script src="<?= base_url('assets/'); ?>js/simpleCart.min.js"> </script>
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
	<!-- FlexSlider -->
	<script defer src="<?= base_url('assets/'); ?>js/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script>
		// Can also be used with $(document).ready()
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!---pop-up-box---->
	<link href="<?= base_url('assets/'); ?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="<?= base_url('assets/'); ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->
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
</body>

</html>