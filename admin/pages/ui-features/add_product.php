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
          <div class="row">
                        <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                 
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table"><br>
                      <legend><h2 align="center">เพิ่มสินค้า</h2></legend><br><br>
                     </table>
     <form name="add-product" method="POST" action="save/chk-admin-add-product.php" enctype="multipart/form-data">

        <div class="row">
          <div class="col-sm-10">
        <div class="form-group">
          <label for="product_name">ชื่อสินค้า</label>
          <input type="text" name="name_product" class="form-control" id="product_name" placeholder="ชื่อสินค้า" required="required">
        </div>
      </div>
      
       <div class="col-sm-10">
          <div class="form-group">
          <label for="product_price">ราคา</label>
          <input type="number" name="product_price" class="form-control" id="product_price" placeholder="ราคา" required="required">
        </div>
        </div><br>

        <div class="col-sm-10">
        <div class="form-group">
          <label for="product_number">จำนวน(ชิ้น)</label>
          <input type="number" name="stock" class="form-control" id="product_number" placeholder="จำนวน" required="required">
        </div>
        </div><br>

         <div class="col-sm-10">
        <div class="form-group">
          <label for="product_type">ประเภท/หมวดหมู่</label>
          <select name="product_type" id="product_type" class="form-control">
            <?php 
              $sql = "SELECT * FROM `type_product`";
              $result = $con->query($sql);

              if($result->num_rows > 0)
              {
                while ($row = $result->fetch_assoc()) 
                {
                  $id_type = $row['id_type'];
                  $name_type = $row['name_type'];
                  $date = $row['date_member'];
            ?>
            <option value="<?php echo $id_type; ?>"><?php echo $name_type; ?></option>
            <?php 
                }
              }
            ?>
          </select>
        </div>
        </div><br>


        <div class="col-sm-10">
        <div class="form-group">
          <label for="product_img">รูปภาพสินค้า</label>
          <input type="file" name="img_product" id="product_img" required="required">
        </div>
        </div><br>

        <div class="col-sm-10">
        <div class="form-group">
          <label for="product_detail">ข้อมูลสินค้า</label>
          <textarea name="product_detail" class="form-control" rows="5" id="product_detail" required="required"></textarea>
         <!--  <?php 
            $id_member = $_GET['id_member'];
          ?> -->
          <!-- <input type="hidden" name="id_member" value="<?php echo $id_member; ?>"> -->
        </div>
        </div><br>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">เพิ่มสินค้า</button>
          <button type="reset" class="btn btn-danger">ล้างข้อมูล</button>
      </div><br>
      </form>
                  </div>
                </div>
              </div>
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
