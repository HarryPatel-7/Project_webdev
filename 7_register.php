<?php

include '7_config.php';

error_reporting(0);

session_start();

if(isset($_SESSION['Uname']))
{
    header("Location: 7_login.html");
}

if(isset($_POST['send']))
{
    $Uname = $_POST['Uname'];
    $Email = $_POST['Email'];
    $userpassword = $_POST['userpassword'];
    $cpassword = $_POST['cpassword'];

    if($userpassword == $cpassword)
    {
        $sql = "SELECT * FROM usersdata WHERE Email='$Email'";
        $result = mysqli_query($conn, $sql);
        if(!$result->num_rows > 0)
        {
            $sql = "INSERT INTO usersdata (Uname, Email, userpassword, cpassword) VALUES ('$Uname', '$Email', '$userpassword', '$cpassword')";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                echo "<script> alert('User Registration Successful.')</script>";
                $Uname = "";
                $Email = "";
            }
            else
            {
                echo "<script> alert('Woops!! Something Went Wrong.')</script>";
            }
            
        }
        else
        {
            echo "<script> alert('Woops!! Email Already Exists.')</script>";
        }
    }
    else
    {
        echo " <script> alert('Password not Matched.')</script>";
    }
} 

?>