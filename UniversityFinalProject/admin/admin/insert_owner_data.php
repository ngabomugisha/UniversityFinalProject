<?php

session_start();

if(empty($_SESSION['id']))
{

    header('LOCATION:index.php');
}
else{

include('connect_db.php');



$name = $_POST['name'];
$adress = $_POST['adress'];
$phone = $_POST['number'];
$email = $_POST['email'];
$plt = $_POST['plate'];
//$id = $_POST['cID'];


$sql= "SELECT * FROM cars WHERE cars.c_plate = '$plt'";
$result = mysqli_query($con, $sql);

error_reporting(E_ERROR | E_PARSE);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
   $id=$row['c_id'];
   //echo $id."<br><br>";
   }
} else {
    echo "0 results".mysqli_error($con);
}

  // echo $name,$adress,$phone,$plate,"this is it ---------".$id;
        $query = "INSERT INTO car_owner (o_name,o_address,o_phone,o_email,c_id) VALUES ('$name','$adress','$phone','$email','$id')";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
        //  header('location:registerVehicle.php');
       // echo 'yes done man';
      //  error_reporting(E_ERROR | E_PARSE);
       // header("Refresh:0; url=registerVehicleOwner.php");
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: registerVehicleOwnerData.php');
        }
        else
        {
            echo "not done".mysqli_error($con);
            $_SESSION['status'] =  "Admin is Not Added";
           // header('Location: registerVehicleOwner.php');
    }    }
?>
