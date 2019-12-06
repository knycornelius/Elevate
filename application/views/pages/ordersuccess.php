<!DOCTYPE html>
<html>
<?= $header;
    $css ?>

        <style>
            .invoice-box {
                max-width: 800px;
                margin: auto;
                margin-bottom: 100px;
                padding: 30px;
                border: 1px solid #eee;
                box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                font-size: 16px;

                font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color: #555;
            }

            .invoice-box table {
                width: 100%;
                line-height: inherit;
                text-align: left;
            }

            .invoice-box table td {
                padding: 5px;
                vertical-align: top;
            }

            .invoice-box table tr td:nth-child(2) {
                text-align: right;
            }

            .invoice-box table tr.top table td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.top table td.title {
                font-size: 45px;
                line-height: 45px;
                color: #333;
            }

            .invoice-box table tr.information table td {
                padding-bottom: 40px;
            }

            .invoice-box table tr.heading td {
                background: #eee;
                border-bottom: 1px solid #ddd;
                font-weight: bold;
            }

            .invoice-box table tr.details td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.item td {
                border-bottom: 1px solid #eee;
            }

            .invoice-box table tr.item.last td {
                border-bottom: none;
            }

            .invoice-box table tr.total td:nth-child(2) {
                border-top: 2px solid #eee;
                font-weight: bold;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }

                .invoice-box table tr.information table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }
            }

            /** RTL **/
            .rtl {
                direction: rtl;
                font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            }

            .rtl table {
                text-align: right;
            }

            .rtl table tr td:nth-child(2) {
                text-align: left;
            }
        </style>
<body>
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="<?= base_url(' '); ?> "><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Checkout</li>
            </ol>
        </div>
    </div>
    <!---->
           <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="col-sm-4 logo">
                                    <h1>Ele<span>vate</span></h1>
                                    <h2>Proses Order Telah Berhasil</h2>
                                     Created: <?php echo date("Y-m-d");
                                                    ?><br>
                                </td>
                                    
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    <?= $user['name']; ?>
                                </td>
                                <td>
                                    <?= $user['alamat']; ?>
                                </td>


                            </tr>
                        </table>
                    </td>
                </tr>



                <tr class="heading">
                    <td>
                        Item
                    </td>

                    <td>
                        Price
                    </td>
                </tr>
                <?php foreach ($item as $trans) { ?>
                    <tr class="item">
                        <td>
                            <?=
                                    $trans['name']; ?>
                        </td>

                        <td>
                            <?= "Rp." . number_format($trans['price'], 0, ",", "."); ?>
                        </td>
                    </tr>



                    <tr class="total">
                        <td></td>

                        <td>
                        <?= "Rp." . number_format($trans['price'], 0, ",", ".");
                        } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form method="POST" action="checkout/cartDestroy">
                <input type="submit" class="cart" value="Back to Home">
            </form>
                        </td>
                    </tr>
            </table>
        </div>
    <!--footer-->
    <?= $footer; ?>
    <!--footer-->
</body>

</html>