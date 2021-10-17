<?php 
	session_start();

	if(isset($_POST['submit'])){

		$Id 	= $_POST['ID'];
		$password 		= $_POST['password'];
		$ConfirmPassword 	= $_POST['confirm password'];
        $name 	= $_POST['name'];
        $UserType = $_POST['User'];
        $UserType = $_POST['Admin'];


		    if($Id != ""){
			if($password != ""){
                if($name != ""){
				if($UserType !=""){

					$_SESSION['Id'] = $Id;
					$_SESSION['password'] = $Password;
                    $_SESSION['confirm password'] = $ConfirmPassword;
                    $_SESSION['Name'] = $name;
					$_SESSION['User'] = $UserType;
                    $_SESSION['Admin'] = $UserType;

					setcookie('Id', $Id, time()+3600, '/');
					setcookie('password', $password, time()+3600, '/');
					setcookie('confirm password', $ConfirmPassword, time()+3600, '/');
                    setcookie('Name', $name, time()+3600, '/');

					$myfile = fopen('user.txt', 'w');
					$myuser = $Id."|".$password."|".$ConfirmPassword"|".$name"|".$UserType;
					fwrite($myfile, $myuser);
					fclose($myfile);

					$myfile = fopen('user.txt', 'a');
					$myuser = $Id."|".$password."|".$ConfirmPassword"|".$name"|".$UserType"\r\n";
					fwrite($myfile, $myuser);
					fclose($myfile);

					header('location: login.html');
				}else{
					echo "invalid email....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid userId....";
		}
	}
?>