<?php
require ("includes/common.php");
session_start();

$email=$_POST['email'];
$email=mysqli_real_escape_string($con,$email);

$password=$_POST['password'];
$password=mysqli_real_escape_string($con,$password);
$password=md5($password);

$query="SELECT id,Email,password from users where Email='".$email."' and  password='".$password."'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==0){
    $m = "Please enter correct E-mail id and Password";
    header('location: login.php?error='.$m);
}else{
    $row = mysqli_fetch_array($result);
    $_SESSION['email'] = $row['Email'];
    $_SESSION['user_id'] = $row['id'];
    header('location:index.php');
}

?>

