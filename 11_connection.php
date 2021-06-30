<?php

    $servername="localhost";
    $username="root";
    $password="";
    $databasename="enquiry";

    // Database Connection

    $conn = mysqli_connect($servername,$username,$password,$databasename);
    
    if(!$conn)
    {
        die('Connection Failed... '.mysqli_connect_error());
    }

    if(isset($_POST['send']))
    {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Subject = $_POST['Subject'];
        $Message = $_POST['Message'];

        $sql_query = "INSERT INTO feedback (Name,Email,Subject,Message) VALUES ('$Name','$Email','$Subject','$Message')"; 
        
        if(mysqli_query($conn, $sql_query))
        {
            echo "Details Send Successfully!!";
        }
        else
        {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>