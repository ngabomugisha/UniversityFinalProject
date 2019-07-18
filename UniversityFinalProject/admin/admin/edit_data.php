<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('connect_db.php'); 

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

?>

<form  method="POST" action="update_data.php">

<div class="modal-body">

    <div class="form-group">
        <label> Car NAME </label>
        <input type="text" name="username" class="form-control" value="<?php echo $name; ?>">
    </div>
    <div class="form-group">
        <label>Car Description</label>
        <input type="text" name="email" class="form-control" value="<?php echo $type; ?>">
    </div>
    <div class="form-group">
        <label>Car Plate</label>
        <input type="text" name="password" class="form-control" value="<?php echo $plate; ?>">
    </div>
  

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" name="registerbtn" class="btn btn-primary">Update</button>
    <input type="hidden" name="hid" value="<?php echo $autoid; ?>">
</div>
</form>

</div>
</div>
</div>
