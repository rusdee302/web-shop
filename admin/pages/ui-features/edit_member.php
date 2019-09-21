<?php 
  session_start();
    include_once('../../../connect.php');
    mysqli_query($con, "SET NAMES UTF8");
     $id_member=$_SESSION['mid'];

    $id_mem=$_REQUEST['id_mem'];
   	
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
        <!-- form -->
        <?php


            mysqli_query($con, "SET NAMES UTF8");
            
            $sql = "SELECT * FROM member WHERE id_member ='$id_mem'";
            $result = $con->query($sql);
            
            if($result->num_rows > 0) 
            {
              while($row = $result->fetch_assoc())
              {
                $id_member = $row['id_member'];
                $img_member = $row['img_member'];
                $name_member = $row['name_member'];
                $lastname_member = $row['lastname_member'];
                $Username_member = $row['Username_member'];
                $Password_member = $row['Password_member'];
                $email_member = $row['email_member'];
                $address_member = $row['address_member'];
                $phone_member = $row['phone_member'];
                $type_member = $row['type_member'];
                $gender_member = $row['gender_member'];

              
          ?>
     
    
      <form name="add-product" method="POST" action="save_edit_member.php?id_mem=<?php echo $id_member;?>" enctype="multipart/form-data">
         <div class="row">



       <div class="col-sm-5">
        <div class="form-group">
          <label for="product_name">ชื่อ</label>
          <input type="text" name="name_member" class="form-control" id="name_member" placeholder="ชื่อ" required="required" value="<?php echo $name_member ;?>">
        </div>
        </div>

        <div class="col-sm-5">
        <div class="form-group">
          <label for="product_name">นามสกุล</label>
          <input type="text" name="lastname_member" class="form-control" id="lastname_member" placeholder="ชื่อ" required="required" value="<?php echo $lastname_member ;?>">
        </div>
        </div>
       <div class="col-sm-2"></div>

        <div class="col-sm-5">
        <div class="form-group">
          <label for="product_name">Username</label>
          <input type="text" name="Username_member" class="form-control" id="Username_member" placeholder="ชื่อ" required="required" value="<?php echo $Username_member ;?>">
        </div>
        </div>

        <div class="col-sm-5">
        <div class="form-group">
          <label for="product_name">Password</label>
          <input type="text" name="Password_member" class="form-control" id="Password_member" placeholder="Password" required="required" value="<?php echo $Password_member ;?>">
        </div>
        </div>
       <div class="col-sm-2"></div>

        <div class="col-sm-5">
        <div class="form-group">
          <label for="product_name">email</label>
          <input type="text" name="email_member" class="form-control" id="email_member" placeholder="mail" required="required" value="<?php echo $email_member ;?>">
        </div>
        </div>

        <div class="col-sm-5">
        <div class="form-group">
          <label for="product_name">phone</label>
          <input type="text" name="phone_member" class="form-control" id="phone_member" placeholder="phone" required="required" value="<?php echo $phone_member ;?>">
        </div>
        </div>
       <div class="col-sm-2"></div>

          <div class="col-sm-5">
        <div class="form-group">
          <label for="product_name">เพศ</label>
          <input type="text" name="gender_member" class="form-control" id="gender_member" placeholder="mail" required="required" value="<?php echo $gender_member ;?>">
        </div>
        </div>

        <div class="col-sm-5">
        <div class="form-group">
          <label for="product_name">ประเภทสมาชิก ( 1 = user ทั่วไป , 2 = ผู้ขาย , 3 = Admin )</label>
          <input type="text" name="type_member" class="form-control" id="type_member" placeholder="type_member" required="required" value="<?php echo $type_member ;?>">
        </div>
        </div>
       <div class="col-sm-2"></div>

        <div class="col-sm-10">
        <div class="form-group">
          <label for="product_name">ที่อยู่</label>
          <input type="text" name="address_member" class="form-control" id="address_member" placeholder="phone" required="required" value="<?php echo $address_member ;?>">
        </div>
        </div>
       <div class="col-sm-2"></div>
        

     
      
      
       <div class="col-sm-10">
        <div class="form-group">
          <label for="product_img">รูปภาพ</label><br>
     <!--      <input type="file" class="form-control" name="img_member">

          <input type="hidden" name="oldimg" value="<?php echo $img_member; ?>"> -->
           <img src="../../../images/product/<?php echo $img_member; ?>" id="blah" alt="your image" width="100" height="90" /><br>

          <input name="img_member" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
          <input type="hidden" name="oldimg" value="<?php echo $img_member; ?>">
          
          <!--  <input type="file" name="img_product" id="product_img" required="required"> -->
        </div>
         </div>
          <div class="col-sm-2"></div>
       

     

       

          <div class="col-sm-12"> <br>
        </div>
      
       
           <div class="col-sm-12">
        
          <button type="submit" class="btn btn-success">บันทึก</button>
          <button type="reset" class="btn btn-danger">ยกเลิก</button>
          </div>
      </form>
    <?php } ?>
    <?php } ?>
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
