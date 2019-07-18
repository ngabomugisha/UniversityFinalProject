<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('connect_db.php'); 

$userID = $_GET['uID'];
$plate=0;
$type=0;
$name=0;

$sql ="SELECT * FROM car_owner where o_id = '$userID'";
$result = mysqli_query($con,$sql);
//$result = mysqli_query($con, $sql);
//	$admin_tb = mysqli_query($con,'SELECT * FROM cars'); 
    // $i=1;
if (mysqli_num_rows($result) >= 0) {
     // output data of each row
     while($row = mysqli_fetch_array($result)) {
          error_reporting(E_ERROR | E_PARSE);
    $autoid =$row[o_id];
    $name =$row[o_name];
    $adress =$row[o_address];
    $phone =$row[o_phone];
    $email =$row[o_email];
    $plate =$row[c_id];
//	$i++;
     }}

?>

<form  method="POST" action="update_owner.php">

<div class="form-group">
        <label> Full Name </label>
        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>"/>
    </div>
    <div class="form-group">
        <label>Adress</label>
        <input type="text" name="adress" class="form-control" value="<?php echo $adress; ?>"/>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="number" name="number" class="form-control" value="<?php echo $phone; ?>"/>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>"/>
    </div>
<?php
    $sql = "SELECT * FROM car_owner";
        $result = mysqli_query($con, $sql);
									//	$admin_tb = mysqli_query($con,'SELECT * FROM cars'); 
										$i=1;
									if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                  
?>
    <div class="form-group">
        <label>Car Plate</label>
        <input list="browsers" name="plate" class="form-control" type="text" placeholder="Default input">
        <?php
            while($row = mysqli_fetch_assoc($result)) {
              error_reporting(E_ERROR | E_PARSE);?>

<input type="hidden" name="ido" value="<?php echo $row['o_id']; ?>">
        <datalist id="browsers">
        
        
          <option value="<?php echo $row['c_plate']; ?>">
          <?php
            }}
            ?>
        </datalist>
    </div>
  

    <button type="submit" name="" class="btn btn-primary">save</button>
     
</form>

</div>
</div>
</div>
