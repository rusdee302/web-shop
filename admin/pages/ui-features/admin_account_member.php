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
          <div class="row">
                        <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="w3-container">
    <br>
    
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <!-- ____________________________ -->
                 <!-- ROW -->
                 <h4>จัดการ account สมาชิก</h4>
        <div class="row  " style=" margin-bottom: 30px;" >


          
                        <div class="panel panel-default table-responsive">
                            
                            <!-- Table -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="info">
                                        <th style="text-align: center;">ID</th>
                                        <th style="text-align: center;">ชื่อ</th>
                                        <th style="text-align: center;">นามสกุล</th>
                                        <th style="text-align: center;">รูปภาพ</th>
                                        <th style="text-align: center;">e-mail</th>
                                        <th style="text-align: center;">ที่อยู่</th>
                                        <th style="text-align: center;">เบอร์โทรศัพท์</th>
                                        <th style="text-align: center;">แก้ไข account</th>
                                        <th style="text-align: center;">ลบ</th>
                                    </tr>
                                </thead>
                            <?php
                            // $id_mem = $_GET['id_member'];
                            $sql2 = "SELECT * FROM `member` ";
                            $result2 = $con->query($sql2);
                            
                            if($result2->num_rows > 0)
                            {
                                while($row2 = $result2->fetch_assoc())
                                {
                                    $id_member1 = $row2['id_member'];
                                    $name_member = $row2['name_member'];
                                    $email_member = $row2['email_member'];
                                    $address_member = $row2['address_member'];
                                    $phone_member = $row2['phone_member'];
                                    $lastname_member = $row2['lastname_member'];
                                    $img_member = $row2['img_member'];
                            
                        ?>
                        
                                <tr>
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $id_member1; ?></td>
                                    <td style="vertical-align: baseline;"><?php echo $name_member; ?></td>
                                    <td style="vertical-align: baseline;"><?php echo $lastname_member; ?></td>
                                    <td style="vertical-align: baseline;"><img src="../../../images/member/<?php echo $img_member; ?>" height="50%" width="50%"class="img-list-product"></td>
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $email_member; ?></td>
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $address_member; ?></td>
                                    <td style="text-align: center; vertical-align: baseline;"><?php echo $phone_member; ?></td>
                                    <td style="text-align: center; vertical-align: baseline;"><a href="<td style="text-align: center; vertical-align: baseline;"><a class="btn btn-info" role="button" href="edit_member.php?id_mem=<?php echo $id_member1;?>">edit</a></td>
                  
                  <td style="text-align: center; vertical-align: baseline;"><a class="btn btn-danger" role="button" href="del_accout.php?id_mem=<?php echo $id_member1; ?>">-</a></td>

                 
                                </tr>

                            <?php } ?>
                            <?php } ?>
                            </table>
                        </div>

                       <!--  <a href="add-product.php?id_member=<?php echo $id_mem; ?>" class="btn btn-success" role="button">เพิ่มสินค้า</a> -->
        </div>  
        <!-- ROW -->
        <!-- ___________________________ -->
        
    <!-- /div container -->
        <span class="w3-xlarge"><!-- สมชาย --></span><br>
      </li>
    </ul>
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
