<?php 
  session_start();
    include_once('../../../connect.php');
    mysqli_query($con, "SET NAMES UTF8");
     $id_member=$_SESSION['mid'];

     // $id_member=$_REQUEST['id_member'];
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
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>E-SHOP HTML Template</title>
  <link href="https://fonts.googleapis.com/css?family=Pridi&display=swap" rel="stylesheet">
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="css/slick.css" />
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css" />

  <!--Css-->
  <link type="text/css" rel="stylesheet" href="style.css" />
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
                  <p class="card-title"><h4>สินค้าในร้านของคุณ</h4></p><br>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        
                      </thead>
                      <tbody>
                          <?php
                            /*$sql1 = "SELECT * FROM `member` WHERE `id_mamber` = '$id_member'";
                            $result = $con->query($sql1);
                            
                            if($resul->num_rows > 0)*/

                              $sql2 = "SELECT * FROM `member` WHERE `id_member` = '$id_member' ";
                            $result2 = $con->query($sql2);
                            
                            if($result2->num_rows > 0)


                            {
                                while($row2 = $result2->fetch_assoc())
                {

                    $id_member = $row2['id_member'];
                  $name_member = $row2['name_member'];
                  $lastname_member = $row2['lastname_member'];
                  $username_member =$row2['Username_member'];
                  $email_member = $row2['email_member'];
                  $gender_member = $row2['gender_member'];
                  $address_member = $row2['address_member'];
                  $phone_member = $row2['phone_member'];
                  $img_member = $row2['img_member'];

                }
                if($gender_member == 1)
                {
                  $gender_member = "ชาย";
                }
                else
                {
                  $gender_member = "หญิง";
                }
              }
            ?>
            <div class="col-md-3">
            <div class="text-center">
            <img src="../../../images/member/<?php echo $img_member; ?>"  width="100" class="img-circle avatar-manager" alt="avatar"><br>
            
            </div>
          </div>
          <div class="col-md-9 personal-info">
            <form class="form-horizontal" role="form">

                <div class="form-group"><br>
                  <div class="col-md-6"> </div>
                  <label class="col-lg-6 control-label">ชื่อ-นามสกุล : <?php echo $name_member; ?>  <?php echo $lastname_member; ?>&nbsp;&nbsp;&nbsp; เพศ :  <?php echo $gender_member; ?></label>
                  <div class="col-lg-8">
                    <!-- <p style="margin-top:7px;"><?php echo $name_member; ?>  <?php echo $lastname_member; ?></p> -->
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-3 control-label">Username : <?php echo $username_member; ?></label>
                  <div class="col-lg-8">
                    <!-- <p style="margin-top:7px;"><?php echo $username_member; ?></p> -->
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">E-mail : <?php echo $email_member; ?></label>
                  <div class="col-lg-8">
                    <!-- <p style="margin-top:7px;"><?php echo $email_member; ?></p> -->
                  </div>
                </div>
               <!--  <div class="form-group">
                  <label class="col-lg-3 control-label">เพศ:</label>
                  <div class="col-lg-8">
                    <p style="margin-top:7px;"><?php echo $gender_member; ?></p>
                  </div>
                </div> -->
                <div class="form-group">
                  <label class="col-lg-6 control-label">ที่อยู่ : <?php echo $address_member; ?></label>
                  <div class="col-lg-8">
                                      <!-- <p style="margin-top:7px;"><?php echo $address_member; ?></p> -->
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">เบอร์โทร : <?php echo $phone_member; ?></label>
                  <div class="col-lg-8">
                    <!-- <p style="margin-top:7px;"><?php echo $phone_member; ?></p> -->
                  </div>
                </div>
                
               <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                                <a href="edit-profile.php?id_member=<?php echo $id_member; ?>"><input type="button" class="btn btn-danger" value="Edit Profile"></a>
                </div>
                        
                        </div>
                        
                    
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
