<!DOCTYPE html>
<html>

<head>
    <style>
        .mottotitle {
            color: white;
            background-color: #FA03BB;
            padding: 0 15px 3px 15px;
            border-radius: 5px;
        }

        .misi {
            padding: 15px;
            background-color: #FA03BB;
            color: white;
        }

        .visi {
            padding: 15px;
            background-color: white;
            color: #FA03BB;
        }

        hr {
            border: 5px #FA03BB;
        }
    </style>
</head>

<body>
    <?= $header; ?>

    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="<?php echo base_url(''); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">About</li>
            </ol>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <div>
                <h3>About Us</h3>

                <div class="intro d-flex justify-content-center">
                    <p> Elevate is the biggest Indonesian e-commerce company in 2070. It was founded in 2019 by Alvin Julian, Alvin Valenciano, Indra Gunawan, and Kenny Cornelius. Now Elevate is standing with more than 50.000 developers with various backgrounds. Elevate provides easy, quick, and interactive shopping features.</p>
                </div>
            </div>
            <hr>
            <div class="row py-4">
                <div class="col-6 visi">
                    <h2> Our Vision </h2>
                    <li> Making Elevate as the most trusted e-commerce in Indonesia. </li>
                    <li> Making Elevate as a trendsetter in terms of fashion and style. </li>
                </div>
                <div class="col-6 misi">
                    <h2> Our Mission </h2>
                    <li> Provides High-Quality products and services to all customers. </li>
                    <li> Provides services to all regions in Indonesia. </li>
                    <li> Help to develop Indonesian economy. </li>
                </div>
            </div>
            <hr>
            <div>
                <div class="d-flex justify-content-center">
                    <h1 class="mottotitle" style="font-style: italic"> 'Elevate Your Style' </h1>
                </div>
                <div class="d-flex justify-content-center">
                    <p> This is our company motto. <b><i> 'Elevate Your Style' </i></b> means we are engaging our customers to improve their style with us. Why? Because our products is made from high-quality materials, modern-designed, and widely-shipped </p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <?php echo $footer; ?>
    </div>
</body>