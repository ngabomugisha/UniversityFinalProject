<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	//require "connection.php";

	//push notification
//	require __DIR__ . '/vendor/autoload.php';



	define('hostname', 'localhost');
	define('user', 'root');
	define('password','');
	define('databasename','speed&accident');
	
	$conn = mysqli_connect(hostname,user,password, databasename);
	
	createdata();
}

function createdata()
{
	global $conn;

	
// Get the information from android
//---------------------------------
$location = $_POST['location'];
$phone = $_POST['phone'];

$sql_query = "INSERT INTO accident(a_long_lati,phone,a_time) VALUES ('$location','$phone',now())";

if(mysqli_query($conn,$sql_query))
{
  echo("Emegerncy Support are on their way");
}
else
{
echo "Could Not insert Student due to .. ".$location .mysqli_error($conn);
}
}

?>