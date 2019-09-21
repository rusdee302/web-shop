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
                  <p class="card-title"><h4>แก้ไข/อัพเดตข้อมูล</h4></p><br>
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
            <!-- <div class="col-md-3">
            <div class="text-center">
            <img src="../../../images/member/<?php echo $img_member; ?>" class="img-circle avatar-manager" alt="avatar"><br>
            
            </div>
          </div> -->

          <div class="col-md-9 personal-info">
            
           <form name="chk-edit-profile.php" method="POST" action="chk-edit-profile.php?id_member=<?php echo $id_member;?>" enctype="multipart/form-data">  
            <img src="../../../images/member/<?php echo $img_member; ?>" width="100" class="img-circle avatar-manager" alt="avatar"><br><br>
            <h6>เปลี่ยนรูปประจำตัว</h6>
            <input type="file" class="form-control" name="img_member">
            <input type="hidden" name="oldimg" value="<?php echo $img_member; ?>">
            </div>
          </div>
          <div class="col-md-9 personal-info">
            <div>
              <label class="col-lg-2 control-label"></label>
              <h3>แก้ไข/อัพเดตข้อมูล</h3>
            </div>
            
                <div class="form-group">
                  <label class="col-lg-3 control-label">ชื่อ:</label>
                  <div class="col-lg-8">
                    <input name="name_member" class="form-control" type="text" value="<?php echo $name_member;?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">นามสกุล:</label>
                  <div class="col-lg-8">
                    <input name="lastname_member" class="form-control" type="text" value="<?php echo $lastname_member;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">อี-เมลล์:</label>
                  <div class="col-lg-8">
                    <input name="email_member" class="form-control" type="text" value="<?php echo $email_member; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">เพศ:</label>
                  <div class="col-lg-8">
                    <select name="gender_member">
                      <option value="1">ชาย</option>
                      <option value="0">หญิง</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-3 control-label">ที่อยู่:</label>
                  <div class="col-lg-8">
                    <input name="address_member" class="form-control" type="text" value="<?php echo $address_member; ?>">
                  </div>
                  </div>
                <div class="form-group">
                <label class="col-lg-3 control-label">เบอร์โทรศัพท์:</label>
                <div class="col-lg-8">
                  <input name="phone_member" class="form-control" type="text" value="<?php echo $phone_member; ?>">
                </div>
                </div>
                
                <!-- <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                  <input type="submit" class="btn btn-success" value="บันทึกการเปลี่ยนแปลง">
                </div> -->
                <button type="submit" class="btn btn-success">บันทึกการเปลี่ยนแปลง</button>&nbsp;&nbsp;&nbsp;
                <!-- <input type="submit" class="btn btn-success" value="บันทึกการเปลี่ยนแปลง"> -->
                </div>
                
              </form>
                        
                    
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
