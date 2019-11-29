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
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1;
    }

    h1 {
        margin: 0;
    }

    .row {
        padding: 0 20px;
        width: 100%;
        margin-top: 20px !important;
        margin: auto;
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

    .aksi {
        display: flex;
    }

    img {
        width: 40px;
        height: 50px;
    }

    .addItems {
        padding: 0 20px;
        display: flex;
        justify-content: flex-end;
        margin-right: 2.25%;
        margin-top: 100px;
    }
    </style>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
</head>
<body>
	<div class="cms_nav">
        <h1>Content Management System</h1>
    </div>
    <div class="addItems">
        <a href="http://localhost/elevate/index.php/cms/addPage?category=<?php echo $_GET['category']; ?>"><button class="btn btn-primary">Add Item</button></a>
    </div>
    <div class="row" style="margin-top: 100px;">
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Image 3</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Discount Start Date</th>
                    <th>Discount End Date</th>
                    <th>Sub Category 1</th>
                    <th>Sub Category 2</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($output as $row)
                {
                    $base_url = base_url();
                    $category = $_GET['category'];
                    $imagePath = "assets/images/e_" . $_GET['category'] . "/";
                    $id = $row['id_item'];
                    echo "<tr>";
                        echo "<td>" .$row['id_item'] ."</td>";
                        echo "<td>" .$row['item_name'] ."</td>";
                        echo "<td><img src='" . base_url($imagePath.$row['image1']) . "'></td>";
                        echo "<td><img src='" . base_url($imagePath.$row['image2']) . "'></td>";
                        echo "<td><img src='" . base_url($imagePath.$row['image3']) . "'></td>";
                        echo "<td>" .$row['stock'] ."</td>";
                        echo "<td>" .$row['price'] ."</td>";
                        echo "<td>" .$row['discount'] ."</td>";
                        echo "<td>" .$row['disc_sd'] ."</td>";
                        echo "<td>" .$row['disc_ed'] ."</td>";
                        echo "<td>" .$row['sc1'] ."</td>";
                        echo "<td>" .$row['sc2'] ."</td>";
                        echo "<td class='aksi'>";
                            echo "<a href='".base_url("index.php/cms/ShowDetail?category=$category&id=$id")."'
                                    style='margin-right:10px;color:rgb(0,200,255);'>";
                                echo "<button class='btn'>";
                                    echo "<span class='glyphicon glyphicon-search'></span>";
                                echo "</button>";
                            echo "</a>";
                            echo "<a href='".base_url("index.php/cms/updatePage/$id?category=$category")."'
                                    style='margin-right:10px;color:rgb(255,215,0);'>";
                                echo "<button class='btn'>";
                                    echo "<span class='glyphicon glyphicon-edit'></span>";
                                echo "</button>";
                            echo "</a>";
                            echo "<a href='".base_url("index.php/cms/delete/$id?category=$category")."'
                                    style='margin-right:10px;color:rgb(255,215,0);'>";
                                echo "<button class='btn'>";
                                    echo "<span class='glyphicon glyphicon-remove'></span>";
                                echo "</button>";
                            echo "</a>";
                        echo "</td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
    <div class="cms_footer">
        Copyright Elevate - 2019
    </div>
</body>
</html>