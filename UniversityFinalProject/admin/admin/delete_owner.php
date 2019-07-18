<?php
  $id = $_GET['delID'];


  include('connect_db.php');
echo $id;
  $sql = "DELETE FROM car_owner WHERE o_id= '$id'";
  if ($con->query($sql) === TRUE) {
    header('location:registerVehicleOwnerData.php');
} else {
    echo "Error deleting record: " . $con->error;
}


?>