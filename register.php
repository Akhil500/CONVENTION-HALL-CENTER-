<?php
require 'connection.php';
$conn=connect();
$registration_id = $conn->real_escape_string( $_POST['registration_id']);
$name = $conn->real_escape_string( $_POST['name']);
$email = $conn->real_escape_string( $_POST['email']);
$password = $conn->real_escape_string( $_POST['password']);
$phone = $conn->real_escape_string($_POST['phone']);


$query   = "INSERT into register (registration_id,name,email,password,phone) VALUES('" . $registration_id . "','" . $name . "','" . $email . "','" . $password . "','" . $phone . " ')";

$success = $conn->query($query);

if (!$success) 
{
    die("Couldn't enter data: ".$conn->error);
}

header("Location:login.php");
$connn->close();
?>
