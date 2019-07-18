<?php

session_start();

if(empty($_SESSION['id']))
{

    header('LOCATION:index.php');
}
else{

include('connect_db.php');



$username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


        $query = "INSERT INTO cars (c_name,c_type,c_plate) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
        //  header('location:registerVehicle.php');

        error_reporting(E_ERROR | E_PARSE);
        header("Refresh:0; url=registerVehicle.php");
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: registerVehicle.php');
        }
        else
        {
            echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: registerVehicle.php');
    }    }
?>
