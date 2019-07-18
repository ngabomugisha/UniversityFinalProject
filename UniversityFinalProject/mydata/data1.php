<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	//require "connection.php";

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

	
// Get the information from adnroid 
//$first= $_POST['first'];
//$vertical= $_POST['Vertical']; 
//$azmut = $_POST['Azmut'];
//$timeStamp= $_POST['timeStamp'];

//echo("soome data :" .$horizontal. " - ". $vertical);

// Save the photo to the database
$sql_query = "INSERT INTO data1(timeStamp) VALUES (now())";

if(mysqli_query($conn,$sql_query))
{
  echo("<h2>data inserted successfully</h2>");
}
else
{
echo "Could Not insert Student due to .. " .mysqli_error($conn);
}
}

?>