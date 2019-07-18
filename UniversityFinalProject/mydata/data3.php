<?php


  // Get the PHP helper library from twilio.com/docs/php/install 


if($_SERVER["REQUEST_METHOD"]=="POST"){
	//require "connection.php";
	define('hostname', 'localhost');
	define('user', 'root');
	define('password','');
	define('databasename','speed&accident');
	
	
		



	$conn = mysqli_connect(hostname,user,password, databasename);
	
//	createdata();
//}

//function createdata()
//{
//	global $conn;
 $count=1;

//select speed
//----------------
	$sql1 = "SELECT * FROM `data1` WHERE `id` = (select max(id) from  `data1`)
	UNION ALL
	SELECT * FROM `data2` WHERE `id2` = (select max(id2) from  `data2`) ";
	$result1 = $conn->query($sql1);
	
	if ($result1->num_rows > 0) {

		// output data of each row
		while($row1 = $result1->fetch_assoc()) {
			echo "id: " . $row1["id"]. " - timpe: " . $row1["timeStamp"]. "<br>";
			if ($count == 1)
			{
			$tm1=$row1["timeStamp"];
		}
			else{
			$tm2=$row1["timeStamp"];
			}$count++;
		}
	} else {
	  echo "0 results";
	}
	echo $tm1;
	echo $tm2;
	
	
	$dif= abs(strtotime($tm2) - strtotime($tm1));
	
	$min=$dif;
	$Vol=26/round($min,2);

	
$plate = $_POST['plate'];

/*
$sqq="SELECT * FROM cars WHERE c_plate = '$plate' ";
$resul = $conn->query($sqq);
if ($resul->num_rows > 0) {
    // output data of each row
    while($row = $resul->fetch_assoc()) {
       $cid= $row['c_id'];
    }
} else {
    echo "0 results";
}

*/
//end of car select
//	if($Vol>5){

require "../../htdocs/sms/sms/index.php";

	//insert data
$v = "overspeed";
$sql_query = "INSERT INTO violation(v_name,v_time,v_charges,c_plate,r_id,speed,v_status) VALUES ('$v',now(),35000,'$plate',3,'$Vol','pending')";

if(mysqli_query($conn,$sql_query))
{
  echo("plate inserted successfully");
}
else
{
echo "Could Not insert Student due to .. " .mysqli_error($conn);
}
//	}
}

?>