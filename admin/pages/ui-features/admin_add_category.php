
<?php 
  session_start();
    include_once('../../../connect.php');
    mysqli_query($con, "SET NAMES UTF8");
     $id_member=$_SESSION['mid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
    <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Pridi&display=swap" rel="stylesheet">
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="../css/slick.css" />
  <link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="../css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="../css/style.css" />

  <!--Css-->
  <link type="text/css" rel="stylesheet" href="../style.css" />
</head>

<style type="text/css">
  html,body,h1,h2,h3,h4,h5 {font-family: 'Kanit', sans-serif;}
</style>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
     <?php
    include('menu-navber/navbar.php');
   ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
       <?php 
      include('menu-navber/menu.php'); 
      ?>
      <!-- partial -->
      <div class="main-panel">          
        <div class="content-wrapper">
          <div class="w3-container">
    <h5>เพิ่มประเภทสินค้า</h5>
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
          <!-- div container -->
    <div class="row">
      <div class="col-sm-8">
    <div class="container">
    <fieldset>
    <legend><h2 align="center">เพิ่มประเภทสินค้า</h2></legend>
      <!-- form -->
      <form name="admin_chkadd_category.php" method="POST" action="admin_chkadd_category.php" enctype="multipart/form-data">


        <div class="col-sm-10">
        <div class="form-group">
          <label for="img_icon">รูปภาพประเภทสินค้า</label>
          <input type="file" name="img_icon" id="img_icon" required="required">
        </div>
        </div><br>
       <div class="row">
          <div class="col-sm-5">
        <div class="form-group">
          <label for="name_type">ชื่อประเภทสินค้า</label>
          <input type="text" name="name_type" class="form-control" id="name_type" placeholder="ชื่อประเภทสินค้า" required="required">
        </div>
      </div>
      </div><br>
        </div><br>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">เพิ่มสินค้า</button>
          <button type="reset" class="btn btn-danger">ล้างข้อมูล</button>
      </div><br>
      </form>
      </div></div>
    </fieldset>
        <!-- /form -->                               
    </div>
  </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
</body>

</html>
