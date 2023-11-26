<?php
    $user="root";
    $password="";
    $server="localhost";
    $dbname="ose";

try {
    $conn= new PDO("mysql:host=$server;dbname=$dbname",$user,$password);
} catch (PDOException $e) {
    echo "Erorr" . $e-> getMessage();
}
?>