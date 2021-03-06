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
            /* box-shadow: 4px 5px 5px 2px #888888; */
            width: 35%;
        }

        .form__content {
            display: flex;
            flex-direction: column;
        }

        .form__content>div {
            display: flex;
        }

        .form__content>div .section__right {
            margin-left: 5%;
        }

        @media only screen and (max-width: 535px) {
            .form__content>div {
                display: flex;
                flex-direction: column;
            }

            .form__content>div .section__right {
                margin-left: 0;
            }

            .contain {
                width: 100%;
            }

            .button__action {
                display: flex;
                flex-direction: row !important;
            }
        }

        .cms_footer {
            height: 30px;
            background: black;
            color: white;
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            position: fixed;
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

        a {
            color: white;
        }

        a:hover {
            text-decoration: none;
            color: white;
        }

        .form-group {
            border: 1px solid rgba(0, 0, 0, .5);
            border-radius: 5px;
            padding: 7.5px;
        }

        .button__action {
            margin-bottom: 37.5px;
        }

        button {
            width: 80px;
            margin-right: 8px;
        }

        .section__right>div {
            width: 250px !important;
            margin-bottom: 27.5px;
        }

        .section__size__style {
            display: flex;
        }

        .section__size__style>div {
            padding-right: 15px;
        }
    </style>
    <script>
        function goTo(category) {
            window.location.href = "http://localhost/elevate/index.php/cms?category=" + category;
        }
    </script>
</head>

<body>
    <div class="cms_nav">
        <h1>Content Management System - Edit Item (<?php echo ucfirst($_GET['category']); ?>)</h1>
    </div>
    <div class="outer" style="padding: 0 25px;">
        <div class="contain" style="margin-top: 100px;">
            <?php
            $baseUrl = base_url();
            $imagePath = "assets/images/e_" . $_GET['category'] . "/";
            foreach ($output as $row) { ?>
                <form action="../update/<?php echo $row['id_item'] . "?category=" . $_GET['category']; ?>" method="post" class="form__content" enctype="multipart/form-data">
                    <div>
                        <div class="section__left">
                            <div class="form-group">
                                <div>ID </div>
                                <input type="text" name="Name" value="<?php echo $row['id_item']; ?>" disabled />
                            </div>
                            <div class="form-group">
                                <div>Name </div>
                                <input type="text" name="Name" value="<?php echo $row['item_name']; ?>" required />
                            </div>
                            <div class="form-group">
                                <div>Image 1 </div>
                                <input type="file" name="Image1" />
                                Current Image 1 : <img src="<?php echo $baseUrl . $imagePath . $row['image1']; ?>" />
                            </div>
                            <div class="form-group">
                                <div>Image 2 </div>
                                <input type="file" name="Image2" />
                                Current Image 2 : <img src="<?php echo $baseUrl . $imagePath . $row['image2']; ?>" />
                            </div>
                            <div class="form-group">
                                <div>Image 3 </div>
                                <input type="file" name="Image3" />
                                Current Image 3 : <img src="<?php echo $baseUrl . $imagePath . $row['image3']; ?>" />
                            </div>
                        </div>
                        <div class="section__right">
                            <div class="form-group section__size">
                                <div class="section__size__style">
                                    <?php foreach ($S as $rows) { ?>
                                        <div>
                                            <div>Price (Size S)</div>
                                            <input type="text" class="form-control" value="<?php echo $rows['Price']; ?>" name="PriceS" required />
                                        </div>
                                        <div>
                                            <div>Stock (Size S)</div>
                                            <input type="text" class="form-control" value="<?php echo $rows['Stock']; ?>" name="StockS" required />
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="section__size__style">
                                    <?php foreach ($M as $rows) { ?>
                                        <div>
                                            <div>Price (Size M)</div>
                                            <input type="text" class="form-control" value="<?php echo $rows['Price']; ?>" name="PriceM" required />
                                        </div>
                                        <div>
                                            <div>Stock (Size M)</div>
                                            <input type="text" class="form-control" value="<?php echo $rows['Stock']; ?>" name="StockM" required />
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="section__size__style">
                                    <?php foreach ($L as $rows) { ?>
                                        <div>
                                            <div>Price (Size L)</div>
                                            <input type="text" class="form-control" value="<?php echo $rows['Price']; ?>" name="PriceL" required />
                                        </div>
                                        <div>
                                            <div>Stock (Size L)</div>
                                            <input type="text" class="form-control" value="<?php echo $rows['Stock']; ?>" name="StockL" required />
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="section__size__style">
                                    <?php foreach ($XL as $rows) { ?>
                                        <div>
                                            <div>Price (Size XL)</div>
                                            <input type="text" class="form-control" value="<?php echo $rows['Price']; ?>" name="PriceXL" required />
                                        </div>
                                        <div>
                                            <div>Stock (Size XL)</div>
                                            <input type="text" class="form-control" value="<?php echo $rows['Stock']; ?>" name="StockXL" required />
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>Discount </div>
                                <input type="text" name="Discount" value="<?php echo $row['discount']; ?>" required />
                            </div>
                            <div class="form-group">
                                <div>Discount Start Date </div>
                                <input type="date" name="DiscSd" value="<?php echo $row['disc_sd']; ?>" required />
                            </div>
                            <div class="form-group">
                                <div>Discount End Date </div>
                                <input type="date" name="DiscEd" value="<?php echo $row['disc_ed']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="button__action">
                        <button type="submit" class="btn btn-primary success">Edit Item</button>
                        <button type="cancel" class="btn btn-danger"><a href="http://localhost/elevate/index.php/cms?category=<?php echo $_GET['category']; ?>">Cancel</a></button>
                    </div>
                <?php } ?>
                </form>
        </div>
    </div>
    <div class="cms_footer">
        Copyright Elevate - 2019
    </div>
</body>

</html>