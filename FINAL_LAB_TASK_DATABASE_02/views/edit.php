<?php

require_once('../model/productsModel.php');

$id = $_REQUEST['ID'];
$product = getProductById($ID);
?>

<html>

<head>
	<title>Edit Product</title>
</head>

<body>

	<form method="post" action="../controller/updateProduct.php">
		<fieldset>
			<legend>Edit</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="product_name" value="<?= $products['product_name'] ?>"></td>
				</tr>
				<tr>
					<td>Product Buying Price:</td>
					<td><input type="text" name="product_buying_price" value="<?= $products['product_buying_price'] ?>"></td>
				</tr>
				<tr>
					<td>Product Selling Price:</td>
					<td><input type="text" name="product_selling_price" value="<?= $products['product_selling_price'] ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="ID" value="<?= $products['ID'] ?>"></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>

</html>