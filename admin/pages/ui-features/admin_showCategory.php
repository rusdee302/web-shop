admin_Category.php
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
<style>
*/* {
  box-sizing: border-box;
}

.header {
  border: 1px solid red;
  padding: 15px;
}*/

.menu {
  width: 10%;
  float: left;
  padding: 8px;
  /*border: 1px solid red;*/
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
                 


<!-- ROW -->
        <div class="row  " style=" margin-bottom: 30px;" >


          
                        <div class="panel panel-default table-responsive">
                        	<label for="img_icon">รูปภาพประเภทสินค้า</label>
                            
                            <!-- Table -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="info">
                                       <!--  <th style="text-align: center;" width="7%">ID ประเภท</th> -->
                                        <th style="text-align: center;" width="10%">ภาพประเภท</th>
                                        <th style="text-align: center;" width="20%">ชื่อประเภท</th>
                                        <th style="text-align: center;"width="10%">เวลาทีบันทึก</th>
                                       <!--  <th style="text-align: center;"width="10%">เเก้ไข้ประเภท</th>
                                        <th style="text-align: center;"width="10%">ลบประเภทสินค้า</th> -->
                                        <!-- <th style="text-align: center;" width="30%">ลายละเอียดสินค้า</th>
                                        <th style="text-align: center;">ราคา</th> -->
                                      <!--   <th style="text-align: center;">จำนวนที่ขายแล้ว</th>
                                        <th style="text-align: center;">จำนวนที่เหลืออยู่</th>
                                        <th style="text-align: center;">เพิ่มจำนวนสินค้า</th> -->
                                    </tr>
                                </thead>
                             <?php
                          
                            $sql = "SELECT * FROM `type_product` ORDER BY id_type DESC ";
                            $result = $con->query($sql);
                            

                                    if($result->num_rows > 0) 
                                      {
                                        while($row = $result->fetch_assoc())
                                        { 

                                            $id_type = $row['id_type'];
                                            $name_type = $row['name_type'];
                                            
                                            $date_member = $row['date_member'];
                                            $img_icon = $row['icon'];
                                            /*$stock = $row['stock'];
                                            $saled = $row['saled'];*/
                                            $num=1;
                                            $num++;
                                            

                            
                        ?> 
                         <tr>
                                    <!-- <td style="text-align: center; vertical-align: baseline;"><?php echo $id_type; ?></td> -->
                           <td style="text-align: center; vertical-align: baseline;"><img src="../../../category/<?php echo $img_icon; ?>" width="50%" heigh="50%" class="img-list-type_product"></td> 
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $name_type; ?></td>

                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $date_member; ?></td>
                                    <!-- <td style="text-align: center; vertical-align: baseline;"><?php echo $price_product; ?></td>
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $stock; ?></td> -->
                                    <!-- <td style="text-align: center; vertical-align: baseline;"><?php echo $saled; ?></td> -->
                                    <!--  <td style="text-align: center; vertical-align: baseline;"><a href="show_edit_category.php?id_type=<?php echo $id_type; ?>" class="btn btn-info" role="button">แก้ไข้</a></td>
                  
                  <td style="text-align: center; vertical-align: baseline;"><a class="btn btn-danger" role="button" href="admin_del_category.php?id_type=<?php echo $id_type; ?>">ลบ</a></td>   -->
                                </tr>

                                     
  
             <?php } ?>

          <?php } ?> 
                            

                            
                            
                            </table>
                        </div>

                       <!--  <a href="add-product.php?id_member=<?php echo $id_mem; ?>" class="btn btn-success" role="button">เพิ่มสินค้า</a> -->
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
