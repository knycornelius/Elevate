<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<?= $header; ?>

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
		<form method="post" action="<?= base_url('checkout'); ?>">
			<div class="check-out">
				<h2>Checkout</h2>
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
									<td class="ring-in"><a href="<?= base_url('men'); ?>" class="at-in"><img src="<?php echo base_url('assets/images/' . $row['category'] . '/' . $row['image1']); ?>" class="img-responsive" alt=""></a>
										<div class="sed">
											<h5><?= $row['name'] ?></h5>

										</div>
										<div class="clearfix"> </div>
									</td>
									<td class="check"><input type="text" value="<?php echo $row['qty']; ?>" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>
									<td><?= "Rp." . number_format($row['price'] * $row['qty'], 0, ",", "."); ?></td>
									<td>FREE SHIPPING</td>
									<td><?= "Rp." . number_format($row['price'] * $row['qty'], 0, ",", "."); ?></td>
									<td>
										<div class="cartData"><a href="shopcart/remove_item/<?php echo $row['rowid']; ?>">X</a></div>
									</td>
								</tr>
								<input type="hidden" name="cart[<?php echo $row['category']; ?>][category]" value="<?php echo $row['category']; ?>">
					<?php	}
						}
					} else {
						echo "<tr class='col-12' style='color: grey'><b>No item ordered</b></tr>";
					} ?>
				</table>

				<button type="submit" class="btn btn-dark ">PROCEED TO BUY</a>
					<div class="clearfix"> </div>
			</div>
	</div>
	</form>
	<!--footer-->
	<?= $footer; ?>
	<!--footer-->
</body>

</html>