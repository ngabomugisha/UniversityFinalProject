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


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="pdf/pdf.php" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">OverSpeed detected</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>

               <?php   $status="paid";
$result = mysqli_query($con,"select count(1) FROM accident");
$row = mysqli_fetch_array($result);

$total = $row[0];
echo $total; ?>


               </h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-road fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">paid Charges (confirmed)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php   $status="paid";
$result = mysqli_query($con,"select count(1) FROM violation WHERE V_status = '$status'");
$row = mysqli_fetch_array($result);

$total = $row[0];
echo $total*35000 ."RWF"; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Violation payments</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

              <?php   $status="pending";
$result = mysqli_query($con,"select count(1) FROM violation WHERE V_status = '$status'");
$row = mysqli_fetch_array($result);

$total = $row[0];
echo $total*35000 ."RWF"; ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Accidents happen</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                  <?php
                    $result1 = mysqli_query($con,"select count(1) FROM accident");
                    $row = mysqli_fetch_array($result1);

                    $total = $row[0];
                    echo $total; ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-car-crash fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


  <!-- Content Row -->

  <?php
include('includes/scripts.php');
include('includes/footer.php');


}











?>
