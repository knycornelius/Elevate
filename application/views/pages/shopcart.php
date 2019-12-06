<!DOCTYPE html>
<html>
<?= $header;
	$css ?>


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
	<div class="container">
		<form method="post" action="<?= base_url('index.php/checkout'); ?>">
			<div class="check-out">
				<h2>Shopping Cart</h2>
				<table>
					<tr>
						<th>Item</th>
						<th>Qty</th>
						<th>Prices</th>
						<th>Delivery details</th>
						<th>Sub total</th>
						<th> Remove Item</th>
					</tr>
					<?php
					if ($cart = $this->cart->contents()) {
						if (!empty($cart)) {
							foreach ($cart as $row) {
								?>
								<tr>
									<td class="ring-in"><a href="<?= base_url('index.php/' . $row['category']); ?>" class="at-in"><img src="<?php echo base_url('assets/images/e_' . $row['category'] . '/' . $row['image1']); ?>" class="img-responsive" alt=""></a>
										<div class="sed">
											<h5><?= $row['name'] ?></h5>
											<h6>Size : <?= $row['size'] ?></h6>
										</div>
										<div class="clearfix"> </div>
									</td>
									<td class="check">
										<p class="pt-3"><?php echo $row['qty']; ?></p>
									</td>
									<td><?= "Rp." . number_format($row['price'] * $row['qty'], 0, ",", "."); ?></td>
									<td>FREE SHIPPING</td>
									<td><?= "Rp." . number_format($row['price'] * $row['qty'], 0, ",", "."); ?></td>
									<td>
										<div class="cartData text-center"><a href="shopcart/remove_item/<?php echo $row['rowid']; ?>">X</a></div>
									</td>
								</tr>
					<?php	}
						}
					} else {
						echo "<tr class='col-12' style='color: grey'><b>No item ordered</b></tr>";
					} ?>
				</table>

				<input type="submit" class="col-sm-2" value="PROCEED TO BUY">

				<div class="clearfix"> </div>
			</div>
	</div>
	</form>
	<!--footer-->
	<?= $footer; ?>
	<!--footer-->
</body>

</html>