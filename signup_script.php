<?php
require "includes/common.php";
session_start();

$firstname = $_POST['firstname'];
$firstname = mysqli_real_escape_string($con, $firstname);

$lastname = $_POST['lastname'];
$lastname = mysqli_real_escape_string($con, $lastname);

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$password = $_POST['password'];
$password = md5($password);

$query = "SELECT * from users where Email='$email'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);

if($password != $repassword){
    $msg = "Password Incorrect";
}
if ($num != 0) {
    $m = "Email Already Exists";
    header('location:signup.php?error=' . $m);

} else {
    $query = "INSERT INTO users(FirstName , LastName , Email , Password) VALUES ('$firstname' , '$lastname' , '$email' , '$password')";

    mysqli_query($con, $query);
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location:index.php');
}
?>
