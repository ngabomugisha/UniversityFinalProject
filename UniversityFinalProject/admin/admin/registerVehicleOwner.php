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


?>


<script type="text/javascript" src="js/mine/jquery-1.4.2.min.js"></script>
 <script type="text/javascript" src="js/mine/jquery.autocomplete.js"></script>
<div class="container-fluid" style="width:800px">
<form  method="POST" action="insert_owner_data.php">

<h2 class="title" id="">Add Vehicle Owner Data</h2>
 <hr/>

    <div class="form-group">
        <label> Full Name </label>
        <input type="text" name="name" class="form-control" placeholder=" enter full name"/>
    </div>
    <div class="form-group">
        <label>Adress</label>
        <input type="text" name="adress" class="form-control" placeholder=" enter address"/>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="number" name="number" class="form-control" placeholder=" enter phone number (ex:0788888888)"/>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder=" enter email"/>
    </div>
<?php
    $sql = "SELECT * FROM cars";
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

<input type="hidden" name="cID" value="<?php echo $row['c_id']; ?>">
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
<?php } ?>
