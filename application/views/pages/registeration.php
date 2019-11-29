<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php echo $header; ?>
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			<li><a href="<?= base_url(' '); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">Register</li>
		</ol>
	</div>
</div>
<div class="container">
	<div class="register">
		<h2>New User!</h2>
		<form class="user" method="post" action="<?php echo base_url('login/registration'); ?>">
			<div class="col-md-6  register-top-grid">

				<div class="mation">
					<span>Full Name</span>
					<input type="text" id="fullname" name="fname" placeholder="Full Name" value="<?php set_value('fname'); ?>">
					<?= form_error('fname', '<small class="text-danger pl-3">', '</small>'); ?>

					<span>Email Address</span>
					<input type="text" id="email" name="email" aria-describedby="emailHelp" placeholder="Email Address" value="<?php set_value('email'); ?>">
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="clearfix"> </div>
				<a class="news-letter" href="#">
					<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
				</a>
			</div>
			<div class=" col-md-6 register-bottom-grid">

				<div class="mation">
					<span>Password</span>
					<input type="password" id="password1" name="password1" placeholder="Password">
					<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
					<span>Confirm Password</span>
					<input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Confirm Password">
				</div>
			</div>
			<div class="clearfix"> </div>
		</form>

		<div class="register-but">
			<form class="user" method="post" action="<?php echo base_url('login/registration'); ?>">
				<input type="submit" value="submit">
				<div class="text-left">
					<a class="small" href="forgot-password.html">Forgot Password?</a>
				</div>
				<div class="text-center">
					<a class="small" href="<?php echo base_url('login'); ?>">Already have an account? Login!</a>
				</div>
				<div class="clearfix"> </div>
			</form>
		</div>
	</div>
</div>

<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 top-footer">
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
			<div class="col-md-6 top-footer1">
				<h3>Newsletter</h3>
				<form action="#" method="post">
					<input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					<input type="submit" value="SUBSCRIBE">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-3 footer-bottom-cate">
				<h6>Categories</h6>
				<ul>
					<li><a href="products.html">Curabitur sapien</a></li>
					<li><a href="single.html">Dignissim purus</a></li>
					<li><a href="men.html">Tempus pretium</a></li>
					<li><a href="products.html">Dignissim neque</a></li>
					<li><a href="single.html">Ornared id aliquet</a></li>

				</ul>
			</div>
			<div class="col-md-3 footer-bottom-cate">
				<h6>Feature Projects</h6>
				<ul>
					<li><a href="products.html">Dignissim purus</a></li>
					<li><a href="men.html">Curabitur sapien</a></li>
					<li><a href="single.html">Tempus pretium</a></li>
					<li><a href="men.html">Dignissim neque</a></li>
					<li><a href="products.html">Ornared id aliquet</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-bottom-cate">
				<h6>Top Brands</h6>
				<ul>
					<li><a href="products.html">Tempus pretium</a></li>
					<li><a href="single.html">Curabitur sapien</a></li>
					<li><a href="men.html">Dignissim purus</a></li>
					<li><a href="single.html">Dignissim neque</a></li>
					<li><a href="men.html">Ornared id aliquet</a></li>


				</ul>
			</div>
			<div class="col-md-3 footer-bottom-cate cate-bottom">
				<h6>Our Address</h6>
				<ul>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 12th Avenue, 5th block, <span>Sydney.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<p class="footer-class"> © 2016 Youth Fashion . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>
</div>
<!--footer-->
</body>

</html>