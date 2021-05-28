<?php
session_start();
require '../class/atclass.php';
if(!isset($_SESSION['email']))
{
    header("location:login.php");
}
if(isset($_GET['did']))
{
    $deleteq = mysqli_query($connection, "delete from blog_master where blog_id ='{$_GET['did']}'") or die(mysqli_error($connection));
     
  if($deleteq)
  { 
      echo '<script>alert("Blog Deleted")</script>';
    }
}
$q= mysqli_query($connection,"select * from blog_master order by blog_id desc");

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
    <!-- partial:partials/_navbar.php -->
    <?php
      include './themepart/navbar.php';
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.php -->
      
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <?php
        include './themepart/sidebar.php';
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
              
              <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h3 class="font-weight-bold" style="text-align: center">Blog Display</h3>
                 <br/>
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Blog Name</th>
                          <th>Blog Url</th>
                          <th>Image</th>
                          <th>Edit Information</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          
                          while ($row = mysqli_fetch_array($q)) {
                              
                       ?>
                        <tr>
                            <td><?php echo $row['blog_name']; ?></td>
                            <td><?php echo $row['blog_url']; ?></td>
                          <td><img src="upload/<?php echo $row['blog_img']?>" Style="width: 200px; height:160px; border-radius: 2px;"></td>
                          <td><a href="edit_blog.php?eid=<?php echo $row['blog_id']; ?>"><button type="button" class="btn btn-primary">Edit</button></a>
                              <a href="view_blog.php?did=<?php echo $row['blog_id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <br/><br/></td>
                        </tr>
                             <?php } ?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
        <?php
              include './themepart/footer.php';
        ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
