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
        window.location.href = "http://localhost/elevate/index.php/cms?category=" + category;
    }
    </script>
</head>
<body>
	<div class="cms_nav">
        <h1>Content Management System</h1>
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
            <div class="form-group">
                <div>Stock </div>
                <input type="text" class="form-control" name="Stock" required />
            </div>
            <div class="form-group">
                <div>Price </div>
                <input type="text" class="form-control" name="Price" required />
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
            <div class="form-group">
                <div>Sub Category 1 </div>
                <select name="Sc1">
                <?php foreach($sub1 as $arr) {
                    echo "<option value='".$arr['sc_name']."'>".$arr['sc_name']."</option>"; } 
                ?>
                </select>
            </div>
            <div class="form-group">
                <div>Sub Category 2 </div>
                <select name="Sc2">
                <?php foreach($sub2 as $arr) {
                    echo "<option value='".$arr['sc_name2']."'>".$arr['sc_name2']."</option>"; } 
                ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary success">Add Item</button>
            <button type="cancel" class="btn btn-danger"><a href="http://localhost/elevate/index.php/cms?category=<?php echo $_GET['category']; ?>">Cancel</a></button>
        </form>
    </div>
    </div>
    <div class="cms_footer">
        Copyright Elevate - 2019
    </div>
</body>
</html>