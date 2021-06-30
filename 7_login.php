<?php

include '7_config.php';

session_start();

error_reporting(0);

if(isset($_SESSION['Uname']))
{
    header("Location: 7_welcome.php");
}

if(isset($_POST['send']))
{
    $Email = $_POST['Email'];
    $userpassword = $_POST['userpassword'];

    $sql = "SELECT * FROM usersdata WHERE Email='$Email' AND userpassword='$userpassword'";
    $result =mysqli_query($conn, $sql);
    if($result->num_rows > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['Uname'] = $row['Uname'];
        header("Location: 7_welcome.php");
    }
    else
    {
        echo "<script> alert('Woops!! Email or Password Incorrect.')</script>";
    }
}