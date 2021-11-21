<?php

require_once('../model/productsModel.php');
$result = getAllProducts();
$count = mysqli_num_rows($result);

/*for($i=1; $i<=$count; $i++){
		$data = mysqli_fetch_assoc($result);
		print_r($data);
		echo "<br>";
	}*/

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Product List</title>
</head>

<body>

    <table border="1" align="center">
        <tr>
            <th>NAME</th>
            <th>PROFIT</th>
           
        </tr>

        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <tr>

                <td><?= $data['name'] ?></td>
                <td><?= ((int)$data['sellingPrice'] - (int)$data['buyingPrice']); ?></td>

                <td>
                    <a href="edit.php?ID=<?php echo $data['ID']; ?>"> EDIT </a> |
                    <a href="delete.php?ID=<?php echo $data['ID']; ?>"> DELETE</a>
                </td>
            </tr>

        <?php } ?>
    </table>
</body>

</html>