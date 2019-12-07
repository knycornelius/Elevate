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

    .contain__size {
        display: flex;
        justify-content: space-between;
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
        /* padding: 15px; */
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
        <h1>Content Management System - Add Item (<?php echo ucfirst($_GET['category']); ?>)</h1>
    </div>
    <div class="outer" style="padding: 0 25px;">
    <div class="contain" style="margin-top: 100px;">
        <form action="add/<?php echo $_GET['category']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div>Name </div>
                <input type="text" class="form-control" name="Name" required />
            </div>
            <div class="form-group">
                <div>Image 1 </div>
                <input type="file" class="form-control" name="Image1" required />
            </div>
            <div class="form-group">
                <div>Image 2 </div>
                <input type="file" class="form-control" name="Image2" required />
            </div>
            <div class="form-group">
                <div>Image 3 </div>
                <input type="file" class="form-control" name="Image3" required />
            </div>
            <div class="contain__size">
                <div class="form-group">
                    <div>Stock (Size S) </div>
                    <input type="text" class="form-control" name="StockS" required />
                </div>
                <div class="form-group">
                    <div>Price (Size S)</div>
                    <input type="text" class="form-control" name="PriceS" required />
                </div>
            </div>

            <div class="contain__size">
                <div class="form-group">
                    <div>Stock (Size M) </div>
                    <input type="text" class="form-control" name="StockM" required />
                </div>
                <div class="form-group">
                    <div>Price (Size M)</div>
                    <input type="text" class="form-control" name="PriceM" required />
                </div>
            </div>

            <div class="contain__size">
                <div class="form-group">
                    <div>Stock (Size L) </div>
                    <input type="text" class="form-control" name="StockL" required />
                </div>
                <div class="form-group">
                    <div>Price (Size L)</div>
                    <input type="text" class="form-control" name="PriceL" required />
                </div>
            </div>

            <div class="contain__size">
                <div class="form-group">
                    <div>Stock (Size XL) </div>
                    <input type="text" class="form-control" name="StockXL" required />
                </div>
                <div class="form-group">
                    <div>Price (Size XL)</div>
                    <input type="text" class="form-control" name="PriceXL" required />
                </div>
            </div>

            <div class="form-group">
                <div>Discount </div>
                <input type="text" class="form-control" name="Discount" required />
            </div>
            <div class="form-group">
                <div>Discount Start Date </div>
                <input type="date" class="form-control" name="DiscSd" required />
            </div>
            <div class="form-group">
                <div>Discount End Date </div>
                <input type="date" class="form-control" name="DiscEd" required />
            </div>
            <button type="submit" class="btn btn-primary success">Add Item</button>
            <button type="cancel" class="btn btn-danger"><a href="http://localhost/bose/index.php/cms?category=<?php echo $_GET['category']; ?>">Cancel</a></button>
        </form>
    </div>
    </div>
    <div class="cms_footer">
        Copyright Elevate - 2019
    </div>
</body>
</html>