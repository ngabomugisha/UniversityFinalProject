<?php
$id = $_POST['hid'];
$status="pending";
$con = mysqli_connect("localhost","root","","speed&accident");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = " UPDATE violation SET v_status = '$status' WHERE v_id='$id' ";

if(mysqli_query($con,$sql))
{
	header('location:violationData.php');
}
else
{
	die('Unable to update record: ' .mysqli_error($con));
}
?>