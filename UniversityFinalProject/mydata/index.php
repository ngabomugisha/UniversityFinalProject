<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "speed_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$count = 1;
//  data from tbl1

$sql1 = "SELECT * FROM `data1` WHERE `id` = (select max(id) from  `data1`)
UNION ALL
SELECT * FROM `data2` WHERE `id2` = (select max(id2) from  `data2`) ";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
		echo "id: " . $row1["id"]. " - timpe: " . $row1["timeStamp"]. "<br>";
		if ($count == 1){
		$tm1=$row1["timeStamp"];}
		else{
		$tm2=$row1["timeStamp"];
		}$count++;
    }
} else {
  echo "0 results";
}
echo $tm1,"<br/>";
echo $tm2;

echo "<br/><br/><br/>";

$dif= abs(strtotime($tm2) - strtotime($tm1));

$min=$dif/60;
$speed= round($min,2)."Min/table";

echo $speed;
/*   data from tbl fa-rotate-270

$sql2 = "SELECT *FROM data2 ORDER BY data1.id DESC 
LIMIT 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "id: " . $row2["id"]. " - timpe: " . $row2["timeStamp"]. "<br>";
    }
} else {
  echo "0 results";
}*/
$conn->close();
?>