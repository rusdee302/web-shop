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
                  <p class="card-title"><h4>จัดการสินค้า</h4></p><br>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr class="info">
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ID</font></th>
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ชื่อสินค้า</font></th>
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">รูปภาพ</font></th>
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ราคา</font></th>
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">จำนวนที่ขายแล้ว</font></th>
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">จำนวนที่เหลืออยู่</font></th>
                            <!-- <th style="text-align: center;">เพิ่มจำนวนสินค้า</th> -->
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">แก้ไขสินค้า</font></th>
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ลบสินค้า</font></th>
                            
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                            // $id_mem = $_GET['id_member'];
                            $sql2 = "SELECT * FROM `product` ";
                            $result2 = $con->query($sql2);
                            
                            if($result2->num_rows > 0)
                            {
                                while($row2 = $result2->fetch_assoc())
                                {
                                    $id_product2 = $row2['id_product'];
                                    $name_product2 = $row2['name_product'];
                                    $price_product2 = $row2['price_product'];
                                    $stock2 = $row2['stock'];
                                    $saled2 = $row2['saled'];
                                    $img_product2 = $row2['img_product'];
                            
                        ?>
                        <tr>
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $id_product2; ?></td>
                                    <td style="vertical-align: baseline;"><?php echo $name_product2; ?></td>
                                    <td style="vertical-align: baseline;"><img src="../../../images/product/<?php echo $img_product2; ?>" height="50%" width="50%"class="img-list-product"></td>
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $price_product2; ?></td>
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $saled2; ?></td>
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $stock2; ?></td>
                              <!-- <td style="text-align: center; vertical-align: baseline;"><a href="update-product.php?id_product=<?php echo $id_product2; ?>" class="btn btn-info" role="button">+</a></td> -->
                              <td style="text-align: center; vertical-align: baseline;"><a class="btn btn-warning" role="button" href="edit_product.php?id_product=<?php echo $id_product2;?>">edit</a></td>
                  
                                    <td style="text-align: center; vertical-align: baseline;"><a class="btn btn-danger" role="button" href="save/delete_product.php?id_product=<?php echo $id_product2; ?>">-</a></td>

                                    
                                </tr>
                        <?php 
                          }
                        }
                        ?>
                    
                      </tbody>
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
