<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <?= $header; ?>

    <div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="<?= base_url('index.php/home'); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">FAQ</li>
			</ol>
		</div>
	</div>

    <div class="faq">
        <div class="container">
            <h3>Frequently Asked Question</h3>
            <hr>
            <div>
                <h2> How to shop at Elevate </h2>
                <h4> The orders can be done in the following steps : </h4>
                <li> Register / Log into your account. </li>
                <li> Pick some products that you want to order. </li>
                <li> Open the shopping cart. </li>
                <li> Confirm your orders by clicking Proceed to buy. </li>
                <li> Then your orders will be placed. </li>
            </div>
            <hr>
            <div>
                <h2> How to contact us </h2>
                <h4> Contact us by following these steps : </h4>
                <li> Open the Contact tab on the navigation bar. </li>
                <li> Fill your data for getting our replies. </li>
                <li> Fill the message. </li>
                <li> Click the Send button to send the message. </li>
                <li> We will reply in 2-4 days. </li>
            </div>
            <hr>
            <div>
                <h2> How to connect with us </h2>
                <h4> Connect with us by follow us on : </h4>
                <li> Facebook : <a href="https://www.facebook.com/"> www.facebook.com/ElevateIndonesia </a> </li>
                <li> Twitter : <a href="https://www.twitter.com/"> www.twitter.com/ElevateIndonesia </a> </li>
                <li> Email : <a href="https://mail.google.com/"> cs@elevateid.com </a> </li>
                <li> Instagram : <a href="https://www.instagram.com"> @ElevateIndonesia </a> </li>
            </div>
        </div>
    </div>
    
    <div>
        <?php echo $footer; ?>
     </div>
</body>