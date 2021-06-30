<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "login_register";

$conn = mysqli_connect($servername,$username,$password,$databasename);

if(!$conn)
{
    die(" <script>alert('Connection Failed . ')</script>");
}

?>