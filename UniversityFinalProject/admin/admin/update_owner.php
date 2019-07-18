<?php
$autoid = $_POST['ido'];
$name = $_POST['name'];
$adress = $_POST['adress'];
$phone = $_POST['number'];
$email = $_POST['email'];
$plate = $_POST['plate'];

$con = mysqli_connect("localhost","root","","speed&accident");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "UPDATE car_owner SET o_name='$name', o_address='$adress', o_phone='$phone', o_email= '$email' WHERE o_id='$autoid'";
if(mysqli_query($con,$sql))
{
	header('location:registerVehicleOwnerData.php');
}
else
{
	die('Unable to update record: ' .mysqli_error($con));
}
?>