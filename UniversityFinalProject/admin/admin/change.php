<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('connect_db.php'); 

$userID = $_GET['uID'];
$plate=0;
$type=0;
$name=0;
?>
<div class="container-fluid">
    <div><h2>Change The Status </h2></div>

<div class="card" style="width: 18rem;">
  <img src="img/payment.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>


<?php
$sql ="SELECT * FROM violation where V_id = '$userID'";
$result = mysqli_query($con,$sql);
//$result = mysqli_query($con, $sql);
//	$admin_tb = mysqli_query($con,'SELECT * FROM cars'); 
     $i=1;
if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
          error_reporting(E_ERROR | E_PARSE);
     $autoid =$row[v_id];
    
    $status =$row[status];
	$i++;
     ?>


<form  method="POST" action="update_status_to_pending.php">
    <input type="hidden" name="hid" value="<?php echo $row[v_id]; ?>">
<button type="submit" class="btn btn-warning btn-lg btn-block">pending</button>
</form>
<hr>
<form  method="POST" action="update_status_to_paid.php">
    <input type="hidden" name="hid" value="<?php echo $row[v_id]; ?>">
<button type="submit" class="btn btn-success btn-lg btn-block">Paid</button>
</form>
<?php

}
}
     
     ?>


</div>
</div>
</div>
