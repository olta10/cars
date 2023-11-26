<?php 
	session_start();
	include_once('config.php');	
	
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username) || empty($password)) {
			echo "Please fill in all fields";
			header("Refresh:1; url= ../client/login.php");
		}
		else{
			$sql = "SELECT id,username, password, is_admin FROM users WHERE username=:username";
			$selectUser = $conn->prepare($sql);
			$selectUser->bindParam(":username", $username);
			$selectUser->execute();
			$data = $selectUser->fetch();

			if ($data == false) {
				echo "The user does not exist";
				header("Refresh:1; url= ../client/login.php");
			}else{
				if ( $data['password']==$password) {
					$_SESSION['id'] = $data['id'];
					$_SESSION['username'] = $data['username'];
					$_SESSION['is_admin'] = $data['is_admin'];
					header('Location: ../../php/client/admin.php');
				}
				else{
					echo "The password is not valid";
					header("Refresh:1; url= ../client/login.php");
				}
			}
		}
	}
?>

