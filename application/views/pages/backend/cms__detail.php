<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
    <?php 
        echo $js;
        echo $css;
    ?>
	<title>ELEVATE Indonesia : Content Management System</title>
    <style type="text/css">
    body {
        margin: 0;
    }

    .cms_nav {
        background: black;
        color: white;
        height: 70px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding-left: 20px;
        position: absolute;
        top: 0;
        width: 100%;
    }

    h1 {
        margin: 0;
    }

    .contain {
        display: flex;
        flex-direction: column;
        box-shadow: 4px 5px 5px 2px #888888;
        width: 35%;
    }

    .contain__header {
        text-align: center;
        border-bottom: 1px solid black;
    }

    .contain__header__2 {
        display: flex;
        border-bottom: 1px solid black;
    }

    .contain__header__2 > div {
        padding-left: 100px;
    }

    .contain__content {
        display: flex;
        padding: 25px 0;
    }

    .contain__content > div {
        width: 125px;
        padding-left: 110px;
    }

    .cms_footer {
        height: 30px;
        background: black;
        color: white;
        margin-top: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial,Helvetica,sans-serif;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .text {
        width: 150px;
    }

    .id {
        display: flex;
        align-items: center;
        border: 1px solid black;
        padding: 5px 15px;
        width: 100%;
    }

    body {
        overflow-x: none;
    }

    img {
        width: 40px;
        height: 50px;
    }
    .outer {
        display: flex;
    }
    .btn {
        margin-left: 25px;
    }
    </style>
    <script>
    function goTo(category) {
        window.location.href = "http://localhost/bose/index.php/cms?category=" + category;
    }
    </script>
</head>
<body>
	<div class="cms_nav">
        <h1>Content Management System</h1>
    </div>
    <div class="outer" style="padding: 0 25px;">
    <div class="contain" style="margin-top: 100px;">
    <?php
        $imagePath = "assets/images/e_" . $_GET['category'] . "/";
        foreach($output as $row) { ?>
        <div class="id">
            <div class="text">ID </div>
            <div class="content">:  <?php echo $row['id_item']; ?></div>
        </div>
        <div class="id">
            <div class="text">Name </div>
            <div class="content">:  <?php echo $row['item_name']; ?></div>
        </div>
        <div class="id">
            <div class="text">Image 1 </div>
            <div class="content">:  <?php echo "<img src = '".base_url($imagePath.$row['image1'])."'>"; ?></div>
        </div>
        <div class="id">
            <div class="text">Image 2 </div>
            <div class="content">:  <?php echo "<img src = '".base_url($imagePath.$row['image2'])."'>"; ?></div>
        </div>
        <div class="id">
            <div class="text">Image 3 </div>
            <div class="content">:  <?php echo "<img src = '".base_url($imagePath.$row['image3'])."'>"; ?></div>
        </div>
        <div class="id">
            <div class="text">Discount </div>
            <div class="content">:  <?php echo $row['discount']; ?></div>
        </div>
        <div class="id">
            <div class="text">Discount Start Date </div>
            <div class="content">:  <?php echo $row['disc_sd']; ?></div>
        </div>
        <div class="id">
            <div class="text">Discount End Date </div>
            <div class="content">:  <?php echo $row['disc_ed']; ?></div>
        </div>
    <?php } ?>
    </div>
    <div class="contain" style="margin-top: 100px; margin-left: 25px;">
        <div class="contain__header">Available Size</div>
        <div class="contain__header__2">
            <div>Size</div>
            <div>Stock</div>
            <div>Price</div>
        </div>
        <div class="contain__content">
            <div>S</div>
            <?php foreach($S as $row) { ?>
            <div><?php echo $row['Stock']; ?></div>
            <div><?php echo $row['Price']; ?></div>
            <?php } ?>
        </div>
        <div class="contain__content">
            <div>M</div>
            <?php foreach($M as $row) { ?>
            <div><?php echo $row['Stock']; ?></div>
            <div><?php echo $row['Price']; ?></div>
            <?php } ?>
        </div>
        <div class="contain__content">
            <div>L</div>
            <?php foreach($L as $row) { ?>
            <div><?php echo $row['Stock']; ?></div>
            <div><?php echo $row['Price']; ?></div>
            <?php } ?>
        </div>
        <div class="contain__content">
            <div>XL</div>
            <?php foreach($XL as $row) { ?>
            <div><?php echo $row['Stock']; ?></div>
            <div><?php echo $row['Price']; ?></div>
            <?php } ?>
        </div>
    </div>
    </div>
    <button onclick="goTo('<?php echo $_GET['category']; ?>')" class="btn  btn-primary" style="margin-top: 15px">Back</button>
    <div class="cms_footer">
        Copyright Elevate - 2019
    </div>
</body>
</html>