<?php 
  session_start();
    include_once('../../../connect.php');
    // mysqli_query($con, "SET NAMES UTF8");
     // $id_member=$_SESSION['mid'];
     

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
</head>

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
                  <p class="card-title">จัดการสินค้า</p>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table"><br>
                      <legend><h2 align="center">แก้ไข้สินค้า</h2></legend>

               <?php


            mysqli_query($con, "SET NAMES UTF8");
             $id_product=$_REQUEST['id_product'];
            $sql = "SELECT * FROM product WHERE id_product ='$id_product'";
            $result = $con->query($sql);
            
            if($result->num_rows > 0) 
            {
              while($row = $result->fetch_assoc())
              {
                $id_product = $row['id_product'];
                $img_product = $row['img_product'];
                $name_product = $row['name_product'];
                $price_product = $row['price_product'];
                $detail_product = $row['detail_product'];
                $stock = $row['stock'];

              
          ?>

       <!--  <form name="add-product" method="POST" action="chk_mng_updet_product.php" enctype="multipart/form-data">
          <form name="add-product" method="POST" action="chk-admin-accountphp.php?id_mem=<?php echo $id_member;?>" enctype="multipart/form-data"> -->
          <form name="add-product" method="POST" action="save/admin_edit_edit_product.php?id_product=<?php echo $id_product;?>" enctype="multipart/form-data">
         <div class="row">



       <div class="col-sm-10">
        <div class="form-group">
          <label for="product_name">ชื่อสินค้า</label>
          <input type="text" name="name_product" class="form-control" id="product_name" placeholder="ชื่อสินค้า" required="required" value="<?php echo $name_product ;?>">
        </div>
       <div class="col-sm-2"></div>
        </div>

     
       <div class="col-sm-5">
        <div class="form-group">
          <label for="product_price">ราคา</label>
          <input type="number" name="product_price" class="form-control" id="product_price" placeholder="ราคา" required="required" value="<?php echo $price_product ;?>">
        </div>
      </div>

       <div class="col-sm-5">
        <div class="form-group">
          <label for="product_number">จำนวน(ชิ้น)</label>
          <input type="number" name="stock" class="form-control" id="product_number" placeholder="จำนวน" required="required" value="<?php echo $stock ;?>">
        </div>
      </div>
      <div class="col-sm-2"></div>
      
      <div class="col-sm-10">
        <div class="form-group">
          <label for="product_type">ประเภท/หมวดหมู่</label>
          <select name="product_type" id="product_type" class="form-control">
            <?php 
              mysqli_query($con, "SET NAMES UTF8");
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
      </div>
       <div class="col-sm-2"></div>

       <!--  <div class="col-sm-12">
          <img src="../images/product/<?php echo $img_product; ?>" width="10%" heigh="50%" ></div>
        <div class="col-sm-10">
        <div class="form-group">
          <label for="product_img">รูปภาพสินค้า</label>
          <input type="file" class="form-control" name="img_product">
          <input type="hidden" name="oldimg" value="<?php echo $img_product; ?>">
          
           <input type="file" name="img_product" id="product_img" required="required"> 
        </div>
         </div>
          <div class="col-sm-2"></div> -->
          <div class="col-sm-10">
        <div class="form-group">
            <label for="product_img">รูปภาพเดิม&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แก้ไข</label><br>
             <img src="../../../images/product/<?php echo $img_product; ?>"  alt="your image" width="100" height="90" />
            <img src="../../../images/product/<?php echo $img_product; ?>" id="blah" alt="your image" width="100" height="90" />
            <input name="img_product" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            <input type="hidden" name="oldimg" value="<?php echo $img_product; ?>">
        </div>
        </div>
          <div class="col-sm-2"></div>

          <div class="col-sm-10">
        <div class="form-group">
          <label for="product_detail">ขอมูลสินค้า</label>
          <textarea  name="product_detail" class="form-control" rows="5" id="product_detail" required="required" ><?php echo $detail_product; ?></textarea>
         <!--  <?php 
            $id_member = $_GET['id_member'];
          ?> -->
          <!-- <input type="hidden" name="id_member" value="<?php echo $id_member; ?>"> -->
        </div>
         </div>
          <div class="col-sm-2"></div>

           <div class="col-sm-12">
        
          <button type="submit" class="btn btn-success">บันทึก</button>
        


           <button type="reset" class="btn btn-warning" onClick="window.location.reload();">Refresh</button>
          <button value="Refresh Page" class="btn btn-danger" onClick="window.location.reload();">ย้อนกลับ</button>


          </div>

      </form>
       <?php } ?>
    <?php } ?>

                     </table>
           
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
