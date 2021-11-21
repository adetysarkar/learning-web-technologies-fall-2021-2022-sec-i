<?php
require_once('../model/productsModel.php');
if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$buyingPrice = $_POST['buyingPrice'];
	$sellingPrice = $_POST['sellingPrice'];

	if ($name != "") {
		if ($buyingPrice != "") {
			if ($sellingPrice != "") {

				$products = ['name' => $name, 'buyingPrice' => $$buyingPrice, 'sellingPrice' => $sellingPrice];
				$status = addProduct($products);
				if ($status) {
					header('location: ../views/productList.php');
				}
			} else {
				echo "Invalid product selling price";
			}
		} else {
			echo "Product buying price is invalid";
		}
	} else {
		echo "Invalid product name";
	}
}
?>



















<html>

<head>
	<title>Create New Product Page</title>
</head>

<body>
	<!-- <center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center> -->

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<fieldset>
			<legend>Add Product</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><input type="text" name="buyingPrice" value=""></td>
				</tr>
				<tr>
					<td>Selling Price:</td>
					<td><input type="text" name="sellingPrice" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>

</html>