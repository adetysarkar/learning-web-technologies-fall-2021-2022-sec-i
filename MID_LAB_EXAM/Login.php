<?php 
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['userId'];
		$password 	= $_POST['password'];

		if($userId != ""){
			if($password != ""){
				
				$myfile = fopen('user.txt', 'r');
				//$data = fread($myfile, filesize('user.txt'));
				//fgets($myfile);
				//feof($myfile);
				
				while(!feof($myfile)){
					
					$data = fgets($myfile);
					$user = explode('|', $data);		
					
					if($username == trim($user[0]) && $password == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: registercheck.php');
					}
				}

				echo "invalid userId/password";

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid userId....";
		}
	}
?>

