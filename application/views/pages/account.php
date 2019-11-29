<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<?= $header ?>

<body>
	<!--//header-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="<?php echo base_url('');?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Account</li>
			</ol>
		</div>
	</div>
	<div class="account">
		<div class="container">
			<h2>Account</h2>
			<div class="account_grid">
				<div class="col-md-6 login-right">
					<?php echo $this->session->flashdata('message'); ?>
					<form class="user" method="post" action="<?php echo base_url('login'); ?>">

						<span>Email Address</span>
						<input type="text" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?php set_value('email'); ?>">
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

						<span>Password</span>
						<input type="password" id="password" name="password" placeholder="Password">
						<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
						<div class="word-in">

							<input type="submit" value="Login">
						</div>
					</form>
				</div>
				<div class="col-md-6 login-left">
					<h4>NEW CUSTOMERS</h4>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<a class="acount-btn" href="<?php echo base_url('login/registration'); ?>">Create an Account</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!--footer-->
	
	<?= $footer;?>
	<!--footer-->
</body>

</html>