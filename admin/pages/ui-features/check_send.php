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
  <link rel="stylesheet" href="css_button/css_button.css">
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
                  <p class="card-title">สินค้าที่ชำระเงิน รอยืนยันการส่ง</p>
                  <div class="panel panel-default table-responsive">
                   <!-- Table -->
                    <table class="table table-bordered">
                      <thead>
                       
                        <tr class="info">

                        
                          <!--   <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ID</font></th> -->
                          <th style="text-align: center; background: #828282;"><font color="#FFFFFF">รหัสการซื้อ</font></th>
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">รหัสผู้ซื้อ</font></th>
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">รหัสสินค้า</font></th>
                            <!-- <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ราคา</font></th> -->
                           <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ชื่อผู้ส่ง</font></th> 
                           <th style="text-align: center; background: #828282;"><font color="#FFFFFF">รหัสพัสดุ</font></th>
                           <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ส่งผ่านทาง</font></th>  
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ดูรายละเอียด</font></th>
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">สถานะ</font></th>
                        </tr>
                      </thead>
                      <tbody>
                                <?php
                            // $id_mem = $_GET['id_member'];
                            $sql2 = "SELECT * FROM `detail_bill` where status_send ='1' and status_admin_send ='0' ";
                            $result2 = $con->query($sql2);
                            
                            if($result2->num_rows > 0)
                            {
                                while($row2 = $result2->fetch_assoc())
                                {
                                    $id_detail = $row2['id_detail'];
                                    $id_member = $row2['id_member'];
                                    $id_product = $row2['id_product'];
                                    $name_deliver = $row2['name_deliver'];
                                   
                                    $number_parce = $row2['number_parce'];
                                    $send = $row2['send'];
                                    // $img_bank = $row2['img_bank'];
                            
                        ?>
                        <tr>
                            <!-- <td><?php echo $id_product2; ?></td> -->
                             <td style="text-align: center; vertical-align: baseline;"><?php echo $id_detail; ?></td>
                                    <td style="vertical-align: baseline;"><?php echo $id_member; ?></td>
                                    <td style="vertical-align: baseline;"><?php echo $id_product; ?></td>
                                  
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $name_deliver; ?></td>
                                    
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $number_parce; ?></td>
                                     <td style="text-align: center; vertical-align: baseline;"><?php echo $send; ?></td>
                                     <!--  <td style="vertical-align: baseline;"><img src="../images/img_bank/<?php echo $img_bank; ?>" height="50%" width="50%"class="img-list-product"></td> -->
                                    <td style="text-align: center; vertical-align: baseline;"><a  class="btn btn-info" role="button" href="detail_payment.php?id_order=<?php echo $id_order;?>">รายละเอียด</a></td>
                  
                  <td style="text-align: center; vertical-align: baseline;"><a class="btn btn-warning" role="button" href="save/update_status_send.php?id_detail=<?php echo $id_detail; ?>">ผ่านการตรวจสอบ</a></td>

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
