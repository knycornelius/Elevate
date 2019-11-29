<!-- <div class="footer">
    <div>
        <h1>CATEGORIES</h1>
        <p>Women</p>
        <p>Men</p>
        <p>Accessories</p>
        <p>Footwear</p>
    </div>
    <div>
        <h1>HELP</h1>
        <p>Track Order</p>
        <p>Returns</p>
        <p>Shipping</p>
        <p>FAQ</p>
    </div>
    <div>
        <h1>GET IN TOUCH</h1>
        <p>
            Any questions? Let us know in store at 8th floor, 
            379 Hudson St, New York, NY 10018 or call us on
            (+1) 96 716 6879
        </p>
        <div class="social__media">
            <img src="
                <?php echo base_url('/assets/logo/facebook.png'); ?>
            ">
            <img src="
                <?php echo base_url('/assets/logo/insta.png'); ?>
            ">
            <img src="
                <?php echo base_url('/assets/logo/pinte.png'); ?>
            ">
        </div>
    </div>
    <div>
        <h1>NEWSLETTER</h1>
        <form action="index.php/Home/subscribe" method="post">
            <input type="text" name="email" placeholder="example@gmail.com" />
            <br/>
            <button type="submit" value="SUBSCRIBE" class="subsButton">SUBSCRIBE</button>
        </form>
    </div>
</div> -->
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
					<li><a href="<?= base_url('men'); ?>">Men</a></li>
					<li><a href="<?= base_url('women'); ?>">Women</a></li>
					<li><a href="<?= base_url('kids'); ?>">Kids</a></li>
					<li><a href="<?= base_url('accessory'); ?>">Accessory</a></li>
					<li><a href="<?= base_url('footwear'); ?>">Footwear</a></li>

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
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">test123@gmail.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : (+1) 96 716 6879</li>
				</ul>
			</div>

			<div class="clearfix"> </div>
			<p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2019 Elevate . All Rights Reserved | Design by <a href="<?= base_url(' '); ?>">Elevate</a> </p>
		</div>
	</div>
</div>