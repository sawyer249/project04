<<?php
include_once 'dbc.php';
// Get form data
$email = $_POST['email'];
$pass = $_POST['password'];

// Insert data into the database
$sql = "INSERT INTO userlogin ( email, password) 
VALUES ( '$email', '$pass');";

$result = mysqli_query($conn, $sql);
header("Location:login.html?signup=success");

?>
