<?php 

	//$email = $_GET['myemail'];
	//$email = $_POST['myemail'];
	
	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['myemail'];
		/*if($email != ""){
			echo $email;
		}else{
			echo "Null value...";
		}*/
	}

?>


<html>
<head>
	<title>email</title>
</head>
<body>
	<form method="post" >
		Username: <input type="text" name="myemail" value="<?php if(isset($email)){ echo $email; }?>"/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>