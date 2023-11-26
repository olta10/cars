<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['new_password'];

    $sql = "UPDATE users SET username=:username, name=:name, email=:email, password=:password WHERE id=:id";
    $prep = $conn->prepare($sql);
    $prep->bindParam(':id', $id);
    $prep->bindParam(':username', $username);
    $prep->bindParam(':name', $name);
    $prep->bindParam(':email', $email);
    $prep->bindParam(':password', $password);

    $prep->execute();
    echo "User updated successfully";

    header("Location:../client/dashboard.php");
}
else{
    echo "User not updated";
}

?>