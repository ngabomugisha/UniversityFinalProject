<?php
$autoid = $_POST['hid'];
$name = $_POST['username'];
$type = $_POST['email'];
$plate = $_POST['password'];

$con = mysqli_connect("localhost","root","","speed&accident");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "UPDATE cars SET c_name='$name', c_type='$type', c_plate='$plate' WHERE c_id='$autoid'";

if(mysqli_query($con,$sql))
{
	header('location:registerVehicle.php');
}
else
{
	die('Unable to update record: ' .mysqli_error($con));
}
?>