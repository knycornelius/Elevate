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
    <form class="user" method="post" action="<?php echo base_url('login/forgotpass'); ?>">
        <div class="account">
            <div class="container">
                <h2>Forgot your password?</h2>
                <div class="account_grid">
                    <div class="col-md-6 login-right">


                        <div class="form-group">
                            <span>Email Address</span>
                            <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?php set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row">
                            <div class="word-in ml-2">

                                <input type="submit" value="Reset Password ">

                            </div>
                            <div class="word-in ml-4">

                                <a class="acount-btn" href="<?php echo base_url('index.php/login'); ?>">Back to Login</a>
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