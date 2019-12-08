<script>
	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	});
</script>
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 top-footer animated wow fadeInLeft" data-wow-delay=".5s">
				<h3>Follow Us On</h3>
				<div class="social-icons">
					<ul class="social">
						<li><a href="#"><i></i></a> </li>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="google"></i> </a></li>
						<li><a href="#"><i class="linked"></i> </a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6 top-footer1 animated wow fadeInRight" data-wow-delay=".5s">
				<h3>Newsletter</h3>
				<form action="index.php/Home/subscribe" method="post">
					<input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					<input type="submit" value="SUBSCRIBE">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
				<h6>Categories</h6>
				<ul>
					<li><a href="<?= base_url('index.php/men'); ?>">Men</a></li>
					<li><a href="<?= base_url('index.php/women'); ?>">Women</a></li>
					<li><a href="<?= base_url('index.php/kids'); ?>">Kids</a></li>
					<li><a href="<?= base_url('index.php/accessory'); ?>">Accessory</a></li>
					<li><a href="<?= base_url('index.php/footwear'); ?>">Footwear</a></li>

				</ul>
			</div>
			<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">

				<h6>HELP</h6>
				<ul>
					<li><a href="products.html">Track Order</a></li>
					<li> <a href="men.html">Returns</a></li>
					<li><a href="single.html">Shipping</a> </li>
					<li><a href="men.html">FAQ</a></li>
					<li><a href="products.html">HELP</a></li>
				</ul>
			</div>

			<div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
				<h6>GET IN TOUCH</h6>
				<ul>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address :379 Hudson St, <span>New York.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:test123@gmail.com">test123@gmail.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : (+1) 96 716 6879</li>
				</ul>
			</div>

			<div class="clearfix"> </div>
			<p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2019 Elevate . All Rights Reserved | Design by <a href="<?= base_url(' '); ?>">Elevate</a> </p>
		</div>
	</div>
</div>