<?php 
  session_start();
    include_once('../../../connect.php');
      $id_member=$_SESSION['mid'];
    $id_order=$_REQUEST['id_order'];
    mysqli_query($con, "SET NAMES UTF8");
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
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 40%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 30%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 100px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
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
                  <p class="card-title">สินค้าที่ชำระเงิน รอยืนยันการส่ง</p>
                  <div class="panel panel-default table-responsive">
                   <!-- Table -->
                    <table>
                    <tr>
                      <td style="text-align: left; vertical-align: baseline;" width="60%"><h4>รายละเอียดเพิ่มเติม</h4></td>
                     <td style="text-align: center; vertical-align: baseline;" width="10%"><a  class="btn btn-info" role="button" href="show_order.php">ย้อนกลับ</a></td>
                     <td style="text-align: center; vertical-align: baseline;" width="20%"><a class="btn btn-warning" role="button" href="save/save_status_paymant.php?id_order=<?php echo $id_order; ?>">ผ่านการตรวจสอบ</a></td>
                     <td style="text-align: center; vertical-align: baseline;" width="10%"><a class="btn btn-warning" role="button" href="delete-product.php?id_product=<?php echo $id_product2; ?>">ร้องเรียง</a></td>
                    </tr>
                    </table><br>
                            <!-- ___________________________________________________ -->
                        <div class="row  " style=" margin-bottom: 30px;" >


          
                        <div class="panel panel-default table-responsive">
                            
                            <!-- Table -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="info">
                                        
                                        <th style="text-align: center;">ข้อมูลบัญชีการชำระเงิน</th>
                                        
                                        <th style="text-align: center;">รูปสลิปหลักฐานการโอนเงิน</th>
                                        
                                    </tr>
                                </thead>
                           <?php
                            // $id_mem = $_GET['id_member'];
                            $sql2 = "SELECT * FROM `bill_product` where  account_number !='0' and id_order='$id_order'";
                            $result2 = $con->query($sql2);
                            
                            if($result2->num_rows > 0)
                            {
                                while($row2 = $result2->fetch_assoc())
                                {
                                    $id_order = $row2['id_order'];
                                    $id_member = $row2['id_member'];
                                    $shipping = $row2['shipping'];
                                    $total_price = $row2['total_price'];
                                   
                                    $bank_name = $row2['bank_name'];
                                    $account_number = $row2['account_number'];
                                     $img_bank = $row2['img_bank'];
                            
                        ?>

                 
                                  <!-- _________________________________________________ -->
                  <?php
                            // $id_mem = $_GET['id_member'];
                            $sql1 = "SELECT * FROM `member` where id_member ='$id_member'";
                            $result1 = $con->query($sql1);
                            
                            if($result1->num_rows > 0)
                            {
                                while($row1 = $result1->fetch_assoc())
                                {
                                    $name_member = $row1['name_member'];
                                    $lastname_member = $row1['lastname_member'];
                                    $address_member = $row1['address_member'];
                                    
                            
                        ?>
                        
                                <tr>
                                    <td style="text-align: left;" width="35%">
                                      ชื่อ-นามสกุลผู้ซื้อ : <?php echo $name_member;?>  <?php echo $lastname_member;?>
                                        <br>
                                      <p>ชื่อบัญชีผู้ซื้อ : <?php echo $bank_name;?>
                                        <br>
                                      เลขที่บัญชี่ : <?php echo $account_number;?>
                                        <br>
                                      ยอดเงินรวมที่ซื้อ : <?php echo $total_price;?>
                                        <br>
                                      ที่อยู่จัดส่ง : <?php echo $address_member;?>
                                      </td>

                                     <!-- <td style="text-align: center; vertical-align: baseline;"><img src="../../../images/img_bank/<?php echo $img_bank;?>" alt="your image" width="50%" ></td> -->

                                     <td style="text-align: center; vertical-align: baseline;"><img id="myImg" src="../../../images/img_bank/<?php echo $img_bank;?>" alt="Snow" width="">ดูรูปสลิป</td>
                                    
                                     <div id="myModal" class="modal">
                                        <span class="close">&times;</span>
                                        <img class="modal-content" id="img01">
                                        <div id="caption"></div>
                                      </div>
                                   
                                 
                                </tr>

                            <?php } ?>
                            <?php } ?>
                             <?php } ?>
                            <?php } ?>
                            </table>
                        </div>

                       <!--  <a href="add-product.php?id_member=<?php echo $id_mem; ?>" class="btn btn-success" role="button">เพิ่มสินค้า</a> -->
        </div>  
                <!-- ___________________________________________________ -->
                 <table class="table table-bordered">
                      <thead>
                       
                        <tr class="info">
                        
                          <!--   <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ID</font></th> -->
                          <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ชื่อสินค้า</font></th>
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ราคา</font></th>
                            <th style="text-align: center; background: #828282;"><font color="#FFFFFF">รูปภาพ</font></th>
                            <!-- <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ราคา</font></th> -->
                           <th style="text-align: center; background: #828282;"><font color="#FFFFFF">จำนวนที่ซื้อ</font></th> 
                           <th style="text-align: center; background: #828282;"><font color="#FFFFFF">ยอดรวม</font></th>
                         
                        </tr>
                      </thead>
                      <tbody>
                           <?php
                            // $id_mem = $_GET['id_member'];
                            $sql2 = "SELECT * FROM `bill_product` where account_number !='0'";
                            $result2 = $con->query($sql2);
                            
                            if($result2->num_rows > 0)
                            {
                                while($row2 = $result2->fetch_assoc())
                                {
                                    $id_order = $row2['id_order'];
                                    $id_member = $row2['id_member'];
                                    $shipping = $row2['shipping'];
                                    $total_price = $row2['total_price'];
                                   
                                    $bank_name = $row2['bank_name'];
                                    $account_number = $row2['account_number'];
                                     $img_bank = $row2['img_bank'];
                            
                        ?>
                         <?php
                            // $id_mem = $_GET['id_member'];
                            $sql2 = "SELECT * FROM `detail_bill` as a inner join product as b on a.id_product=b.id_product where id_order='$id_order' ";
                            $result2 = $con->query($sql2);
                            
                            if($result2->num_rows > 0)
                            {
                                while($row2 = $result2->fetch_assoc())
                                {
                                    $name_product2 = $row2['name_product'];
                                    $price_product2 = $row2['price_product'];
                                    $img_product2 = $row2['img_product']; 
                                    $qty_product = $row2['qty_product'];
                                    $amounts = $row2['amounts'];
                            
                              ?>
                        <tr>
                            <!-- <td><?php echo $id_product2; ?></td> -->
                             <td style="text-align: center; vertical-align: baseline;"><?php echo $name_product2; ?></td>

                                     <td style="text-align: center; vertical-align: baseline;"><?php echo $price_product2; ?></td>
                                    
                                     <td style="vertical-align: baseline;"><img src="../../../images/product/<?php echo $img_product2; ?>" height="20%" width="20%"class="img-list-product"></td>

                                    
                                     <td style="text-align: center; vertical-align: baseline;"><?php echo $qty_product; ?></td>
                                      <td style="text-align: center; vertical-align: baseline;"><?php echo $amounts; ?></td>

                                    </tr>
                                      <?php 
                                        }
                                      }
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
  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
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
