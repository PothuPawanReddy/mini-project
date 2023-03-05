<?php
$host = "localhost";
$user = "root";
$password = '';
$db_name = "logindetails";
$con = mysqli_connect($host, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Filed to Connect with PHPSQL:" . mysqli_connect_errno());
}