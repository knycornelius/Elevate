<?= $header; ?>

<body>
	<!--//header-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="<?php echo base_url(''); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Contact</li>
			</ol>
		</div>
	</div>
	<div class="contact">
		<div class="container">
			<h3>Contact</h3>

			<div class="contact-grids">
				<div class="contact-form">
					<form action="#" method="post">
						<div class="contact-bottom">
							<div class="col-md-4 in-contact">
								<span>Name</span>
								<input type="text" name="name">
							</div>
							<div class="col-md-4 in-contact">
								<span>Email</span>
								<input type="text" name="email">
							</div>
							<div class="col-md-4 in-contact">
								<span>Phonenumber</span>
								<input type="text" name="phonenumber">
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="contact-bottom-top">
							<span>Message</span>
							<textarea name="message"> </textarea>
						</div>
						<input type="submit" value="Send">
					</form>
				</div>
				<div class="address">
					<div class=" address-more">
						<h2>Address</h2>
						<div class="col-md-4 address-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="address1">
								<p>Location</p>
								<p>TL 19034-88974</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
								<p>+885699655</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-envelope"></i>
							<div class="address1">
								<p><a href="mailto:@example.com"> @example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//content-->
	<!--map-->
	<div class="map">
		<iframe src="7e18954f%3A0x5a4efce2be829534!2sVictoria%2C+Australia!5e0!3m2!1sen!2sin!4v1443674224626" width="100%" height="" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!--//map-->
	<!--footer-->
	<?= $footer; ?>
	<!--footer-->
</body>

</html>