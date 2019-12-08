<!D0CTYPE html>
<html>
<head>
    <?php
        echo $js;
        echo $css;
    ?>
    <style>
        .summaryBox{
            
            background: lightgrey;
            
            box-sizing: border-box;
            display: flex;
            justify-content: space-around;		
            flex-flow: wrap;
        }
        @media screen and(max-width: 1200px){
            .summaryBox{
                width: 40%;
            }

        }
        @media screen and(max-width: 600px){
            .summaryBox{
                width: 90%;
            }
            
        }
        
    #barang{
            display: flex;
            justify-content: space-around;		
            flex-flow: wrap;
        }
    
        #navBarang{
            width: 100%;
            height: 150px;
            margin : 0 auto;
            margin-top: 100px;
            overflow: hidden;
            padding : 10px 0;
            justify-content: space-around;
            display : flex;
            float : none;
        }
        .form-group {
            display: flex;
            align-items: center;
            width: 10%;
            margin-left: 0px;
            
        }

        .form-group > div {
            flex-basis: 50px;
        }

        .form-group select {
            
            border: 0;
            border-radius: 0;
            flex-basis: 60px;
        }

.form-group select:focus {
    box-shadow: 0 0 0px transparent;
}
    }
    </style>
    <script>
        $(document).ready(function() {
         $('.mdb-select').materialSelect();
        });
    </script>
</head>
<body>
    <?php echo $header; ?>
    <div class="container-fluid">
    <h2>Konfirmasi Check Out</h2>
<div>
<?php
$grand_total = 0;
if ($cart = $this->cart->contents())
    {
        foreach ($cart as $item)
            {
                $grand_total = $grand_total + $item['subtotal'];
            }
        echo "<h4>Total Belanja: Rp.".number_format($grand_total,0,",",".")."</h4>";
?>
<form class="row" action="checkout/proses_order" method="post">
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="firstName">Nama :</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="lastName">Alamat:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Telp:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="telp" id="telp" placeholder="No Telp">
            </div>
        </div>
 
 
        <div class="form-group  has-success has-feedback">
            <div class="col-xs-offset-3 col-xs-9">
                <button type="submit" class="btn btn-primary">Proses Order</button>
            </div>
        </div>
    </form>
    <?php
    }
    else
        {
            echo "<h5>Shopping Cart masih kosong</h5>";
        }
    ?>
</div>
    <div>
        <?php echo $footer;?>
     </div>
</body>