<?php
session_start();
include '../class/atclass.php';
if(!isset($_SESSION['otp']))
{
    header("location:forgot_pass");
}
if($_POST)
{
    $getotp= mysqli_real_escape_string($connection,$_POST['otp']);
    echo $_SESSION['otp'];
    if($_SESSION['otp']==$getotp)
    {
       header("location:new-password.php");
    }
 else
    {
          echo "<script>alert('OTP not match ..');</script>";
    }
}

?>    
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
    include './themepart/title.php';
  ?>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/ht-logo.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              
                <h2>Enter OTP</h2>
             
              <form class="pt-3" method="post">
                <div class="form-group">
                  <input type="text" required="" name="otp" minlength="6" maxlength="6" placeholder="Enter Otp" class="form-control form-control-lg" id="exampleInputEmail1">
                </div>
              
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                      <button type="submit" name="submit" class="btn btn-primary mr-2" >Check Otp</button>
                      
                  </div>
                  
                </div>
                
               
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
