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
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            bottom: 0;
            width: 100%;
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
        <h1>Content Management System - Transaction History</h1>
    </div>
    <div class="row" style="margin-top: 100px;">
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Transaction Date</th>
                    <th>Name</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($output as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
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