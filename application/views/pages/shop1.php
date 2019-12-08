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

        .cartData {
            margin: 5px;
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
        <div class="row m-5">
            <div class="col-9">
                <form method="post">
                    <table class="table">
                        <thead>
                            <tr>
                                <td style="padding-bottom: 5px !important;"> PRODUCT </td>
                                <td style="padding-bottom: 5px !important;"> TOTAL PRICE </td>
                                <td style="padding-bottom: 5px !important;"> REMOVE </td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if($cart = $this->cart->contents()){
                                if(!empty($cart))
                                {
                                    foreach($cart as $row)
                                    {
                        ?>
                            <tr>
                                <td class="row m-0">
                                    <div class="cartData">
                                        <img src="<?php echo base_url('assets/images/'.'e_women'.'/'.$row['image1']); ?>" style="width: 150px; height: 200px">
                                    </div>
                                    <div class="cartData">
                                        <div><?php echo $row['name']; ?></div>
                                        <div><?php echo $row['price']; ?></div>
                                        <div> Size: <?php echo $row['size']; ?></div> 
                                        <div> Qty: <?php echo $row['qty']; ?></div>
                                    </div>
                                </td>
                                <td><div class="cartData"><?php echo $row['price']*$row['qty']; ?></div></td>
                                <td><div class="cartData"><a href="shopcart/remove_item/<?php echo $row['rowid'];?>">X</a></div></td>
                            </tr>
                        <?php
                                    }
                                }
                            }
                            else
                            {
                                echo "<tr class='col-12' style='color: grey'><b>No item ordered</b></tr>";  
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="col-3">
                <button class="btn btn-dark btn-block " type="submit">
                    <a href=""><p style="color: white;">CHECKOUT</p></a>
                </button>
                <br>
                    <div style="background-color: #cdcdcd;">
                        <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12 text-left">
                            <h3>ORDER SUMMARY</h3>
                            <hr style="border: 1px solid black; margin-left: 2px;">
                    </div>
                        <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-6 text-left">Sub Total </div>
                                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-6 text-right"> 
                                    
                                </div>
                            </div>
                            <hr style="border-color: #aaa">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-6 text-left"> Total 
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-6 text-right"> 
                                
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <div class="col-12">
            <hr style="border: 1px solid #aaa; margin: 15px;">
                <div>
                    <h3>Related Content</h3>
                </div>  
                    
                    
                </div>
       </div>
    </div>
    <div>
        <?php echo $footer;?>
     </div>
</body>

<!-- NOTES UNTUK MODIF (DELETE SETELAH ADA FITUR DIBUAT)  -->
<!-- TAMBAHIN BUY NOW -->
<!-- GANTI SIZE DAN QTY JADI OPTION -->
<!-- ADA HANDLER KALO STOCK HABIS -->
<!-- UBAH TAMPILAN ORDER SUMMARY -->
