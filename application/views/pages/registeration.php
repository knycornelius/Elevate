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
					<div class="form-group">
						<span>Full Name</span>
						<input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?php set_value('name'); ?>">
						<?= form_error('fname', '<small class="text-danger">', '</small>'); ?>
					</div>
					<div class="form-group">
						<span>Email Address</span>
						<input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Email Address" value="<?php set_value('email'); ?>">
						<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
					</div>
				</div>
				<div class="clearfix"> </div>
				<a class="news-letter" href="#">
					<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
				</a>
			</div>
			<div class=" col-md-6 register-bottom-grid">

				<div class="mation">
					<div class="form-group">
						<span>Password</span>
						<input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
						<?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
					</div>
					<div class="form-group">
						<span>Confirm Password</span>

						<input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Confirm Password">
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>


			<div class="register-but">


				<input type="submit" class="ml-2 mt-1 cart" value="Register">
				<div class=" ml-2 text-left">
					<a class="small" href="<?= base_url('login/forgotpass'); ?>">Forgot Password?</a>
				</div>
				<div class="text-center">
					<a class="small" href="<?php echo base_url('index.php/login'); ?>">Already have an account? Login!</a>
				</div>
				<div class="clearfix"> </div>

			</div>
		</form>
	</div>
</div>

<?= $footer; ?>

</body>

</html>