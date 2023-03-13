<?php
$con=mysqli_connect("localhost","root","","gamingblog");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}