<?php 
	session_start();
	include_once('config.php');
	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $username = $_POST['username'];       
        $email = $_POST['email']; 
        $password = $_POST['password']; 
        $password = $_POST['confirm_password']; 
        $is_admin = $_POST['is_admin']; 
		
		if (empty($username) || empty($password)) {
			echo "Please fill in all fields";
		}
		else{
            $sql = "INSERT INTO users (name, username, email, password, confirm_password, is_admin) VALUES (:name, :username, :email, :password, :confirm_password, :is_admin)";
			$selectUser = $conn->prepare($sql); 
            $selectUser->bindParam(":name", $name);
			$selectUser->bindParam(":username", $username);
            $selectUser->bindParam(":email", $email);
            $selectUser->bindParam(":password", $password);
            $selectUser->bindParam(":confirm_password", $confirm_password);
            $selectUser->bindParam(":is_admin", $is_admin);
			$selectUser->execute();
			$data = $selectUser->fetch();
			if ($data == false) {
				echo '<script>alert("The user does not exist");</script>';
			}else{
				if (password_verify($password, $data['password'])) {
					$_SESSION['id'] = $data['id'];
                    $_SESSION['name'] = $data['name'];
					$_SESSION['username'] = $data['username'];
					$_SESSION['email'] = $data['email'];
					$_SESSION['password'] = $data['password'];
                    $_SESSION['confirm_password'] = $data['confirm_password'];
					$_SESSION['is_admin'] = $data['is_admin'];
					header('Location: ../client/index.php');
				}
				else{
                    echo '<script>alert("The password is not valid");</script>';
				}
			}
		}
	}
 ?>