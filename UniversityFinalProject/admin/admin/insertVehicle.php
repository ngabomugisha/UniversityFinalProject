<?php
session_start();

if(empty($_SESSION['id']))
{

    header('LOCATION:index.php');
}
else{
include('includes/header.php');
include('includes/navbar.php');
include('connect_db.php');
/*
$userID = $_GET['uID'];
$plate=0;
$type=0;
$name=0;

$sql ="SELECT * FROM cars where c_id = '$userID'";
$result = mysqli_query($con,$sql);
//$result = mysqli_query($con, $sql);
//	$admin_tb = mysqli_query($con,'SELECT * FROM cars');
     $i=1;
if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
          error_reporting(E_ERROR | E_PARSE);
     $autoid =$row[c_id];
     $name =$row[c_name];
    $type =$row[c_type];
    $plate =$row[c_plate];
	$i++;
     }}
*/
?>
 <h2 class="title" id="">Add Vehicle Data</h2>
 <hr/>
<form  method="POST" action="add_data.php">



    <div class="form-group">
        <label> Car NAME </label>
        <input type="text" name="username" class="form-control" >
    </div>
    <div class="form-group">
        <label>Car Description</label>
        <input type="text" name="email" class="form-control" >
    </div>
    <div class="form-group">
        <label>Car Plate</label>
        <input type="text" name="password" class="form-control">
    </div>


<div class="modal-footer">
    <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
</div>
</form>

</div>
</div>
</div>
<?php } ?>
