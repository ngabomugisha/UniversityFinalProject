<?php
session_start();



include('includes/header.php');
include('connect_db.php');

?>




<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-blue-900 mb-4" style="color:darkblue;">Speed Detection & Accident Report</h1>
                <br/><br/>
                <hr/>
                <br/><br/>
                <h2 class="h4 text-gray-900 mb-4">Login Here!</h2>

              </div>

                <form class="user"  method="POST">

                    <div class="form-group">
                    <input type="text" name="emaill" class="form-control form-control-user" placeholder="Enter Admin Username">
                    </div>
                    <div class="form-group">
                    <input type="password" name="passwordd" class="form-control form-control-user" placeholder="Enter Admin Password">
                    </div>

                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                    <hr>
                </form>
                <?php

if(isset($_POST['login_btn']))
{
  $login = mysqli_real_escape_string($con,$_POST['emaill']);
  $pwd = mysqli_real_escape_string($con,$_POST['passwordd']);
  $chechUser = mysqli_query($con,'SELECT * FROM admin WHERE username="'.$login.'" AND password="'.$pwd.'"');
  $getChechUser = mysqli_fetch_assoc($chechUser);
  if(mysqli_num_rows($chechUser) != 0)
  {

    $_SESSION['AdminAccess'] = true;
    $_SESSION['id'] = $getChechUser['id'];
    $_SESSION['email'] = $getChechUser['email'];
    $_SESSION['username'] = $getChechUser['username'];
    header('LOCATION:home.php');
  }
  else
  {
    echo '<p class="text-danger"><span class="glyphicon glyphicon-remove text-danger"></span> Incorrect username or password!</p>';
  }
}
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>


<?php
include('includes/scripts.php');
?>
