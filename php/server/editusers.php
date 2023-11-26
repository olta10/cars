<?php  include_once("config.php"); ?>

	<style>

		form>input {
		    margin-bottom: 10px;
		    font-size: 20px;
		    padding: 5px;
		}
		button {
		    background: none;
		    border: none;
		    border: 1px solid black;
		    padding: 10px 40px;
		    font-size: 20px;
		    cursor: pointer;
		}
    form {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  label {
    display: block;
    margin-bottom: 10px;
  }
  input[type="text"],
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #45a049;
  }
	</style>


<?php

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    include_once("config.php");

    // Prepare the SQL statement
    $sql = "SELECT * FROM users WHERE id = :id";
    $prep = $conn->prepare($sql);
    $prep->bindParam(':id', $id);

    // Execute the query
    $prep->execute();

    // Fetch the user record
    $user = $prep->fetch(PDO::FETCH_ASSOC);

    // Check if a user was found
    if ($user) {
        // The user was found, you can access the user data using $user['column_name']
        $username = $user['username'];
        $name = $user['name'];
        $email = $user['email'];
        $password = $user['password'];

    } else {
        echo "User not found.";
    }
} else {
    echo "No user ID specified in the URL.";
}

?>

<form action="updateusers.php" method="POST">

<input type="number" name="id" value="<?= $id ?>" hidden>

<label for="username">Name:</label>
  <input type="text" id="name" name="name" value="<?= $name ?>" >

  <label for="username">Username:</label>
  <input type="text" id="username" name="username" value="<?= $username ?>" >

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" value="<?= $email ?>" >

  <label for="password">New Password:</label>
  <input type="password" id="password" name="new_password" value="<?= $password ?>" placeholder="New Password">

  <input type="submit" name="update" value="Update">
</form>

    <a href="dashboard.php">Dashboard</a>
	</body>
</html>

