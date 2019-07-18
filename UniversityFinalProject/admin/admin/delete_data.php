<?php
  $id = $_GET['delID'];


  include('connect_db.php');

  $sql = "DELETE FROM cars WHERE c_id= '$id'";
  if ($con->query($sql) === TRUE) {
    header('location:registerVehicle.php');
} else {
    echo "Error deleting record: " . $con->error;
}


?>