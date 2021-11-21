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
					<td><input type="text" name="name" value="<?= $products['name'] ?>"></td>
				</tr>
				<tr>
					<td>Product Buying Price:</td>
					<td><input type="text" name="buyingPrice" value="<?= $products['buyingPrice'] ?>"></td>
				</tr>
				<tr>
					<td>Product Selling Price:</td>
					<td><input type="text" name="sellingPrice" value="<?= $products['sellingPrice'] ?>"></td>
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