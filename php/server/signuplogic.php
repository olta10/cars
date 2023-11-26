<?php 
include_once ('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password']; // Fix variable name

    if ($password !== $confirm_password) {
        echo "Password do not match.";
        header("refresh:1; url=../client/signup.php");
        exit(); // Stop execution after the header redirect
    } else {
        $sql = "INSERT INTO users (name, username, email, password, confirm_password) VALUES (:name, :username, :email, :password, :confirm_password)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':confirm_password', $confirm_password); // Fix variable name
        $stmt->execute(); 

        echo "The user has been added successfully";
        header("refresh:1; url=../client/index.php");
        exit(); // Stop execution after the header redirect
    }
} else {
    echo "Error";
}
?>
