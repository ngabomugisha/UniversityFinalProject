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
 <head>
           <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      </head>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  method="POST" action="add_data.php">

        <div class="modal-body">

            <div class="form-group">
                <label> Car NAME </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Car name">
            </div>
            <div class="form-group">
                <label>Car Description</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Car Description">
            </div>
            <div class="form-group">
                <label>Car Plate</label>
                <input type="text" name="password" class="form-control" placeholder="Enter Car Plate">
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">

    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-striped table-bordered" id="employee_data" width="1400" cellspacing="0" style="width:800">
        <thead>
          <tr>
                <th> # </th>
                <th> Location Coordinate  </th>
                <th> Phone Number </th>
                <th> Time </th>
          </tr>
        </thead>
        <tbody>
        <?php

        //table table-bordered
        $sql = "SELECT * FROM accident ";
        $result = mysqli_query($con, $sql);
									//	$admin_tb = mysqli_query($con,'SELECT * FROM cars');
										$i=1;
									if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
											echo'<tr>
													<td>'.$i.'</td>
													<td>'.$row['a_long_lati'].'</td>
													<td>'.$row['phone'].'</td>
													<td>'.$row['a_time'].'</td>

                        ';?>

                  </td>
                  </tr>
                        <?php
                        $i++;
                    }
                  }
									?>

        </tbody>

        <tfoot>
            <tr>
                <th> # </th>
                <th> Location Coordinate  </th>
                <th> Phone Number </th>
                <th> Time </th>
            </tr>
        </tfoot>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
/*

if(isset($_POST['add_user'])){

  echo "test";


}*/


//include('includes/scripts.php');
include('includes/footer.php');
}
?>

<script>
 $(document).ready(function(){
      $('#employee_data').DataTable();
 });
 </script>
