<!DOCTYPE html>
<html>
<?= $header ?>

<body>
    <!--//header-->
    <div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="<?php echo base_url(''); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Account</li>
			</ol>
		</div>
	</div>
    <?php echo $this->session->flashdata('message'); ?>
    <form class="user" method="post" action="<?php echo base_url('login/changepassword'); ?>">
        <div class="account">
            <div class="container">
                <h2>Change your password</h2>
                <h4 class="mb-4">User Email: </h4>
                <h5 class="mb-4"><?= $this->session->userdata('reset_email'); ?></h5>
                <div class="account_grid">
                    <div class="col-md-6 login-right">


                        <div class="form-group">
                            <span>New Password</span>
                            <input type="password" class="form-control form-control-user" id="password1" name="password1" aria-describedby="passHelp" placeholder="Enter New Password...">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span>Confirm New Password</span>
                            <input type="password" class="form-control form-control-user" id="password2" name="password2" aria-describedby="passHelp" placeholder="Repeat Password...">
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row">
                            <div class="word-in ml-2">

                                <input type="submit" value="Change Password ">

                            </div>

                        </div>
    </form>
    </div>

    <div class="clearfix"> </div>
    </div>
    </div>
    </div>

    <!--footer-->

    <?= $footer; ?>
    <!--footer-->
</body>

</html>