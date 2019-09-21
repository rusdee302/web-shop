
<?php 
  session_start();
    include_once('../../../connect.php');
    mysqli_query($con, "SET NAMES UTF8");
    // $id_member=$_SESSION['mid'];
     $id_banner=$_REQUEST['id_banner'];
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
                
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->

  <header class="w3-container" style="padding-top:22px">
     <div class="w3-container">
    <h3>เเก้ไข้ Banner</h3>
    <ul class="w3-ul w3-card-4 w3-white">
          

              


<!-- <form name="add-product" method="POST" action="admin_save_banner.php?id_banner=<?php echo $id_banner;?>" enctype="multipart/form-data"> -->
         <div class="row">
            <?php


            mysqli_query($con, "SET NAMES UTF8");
            
            $sql = "SELECT * FROM banner WHERE id_banner ='1'";
            $result = $con->query($sql);
            
            if($result->num_rows > 0) 
            {
              while($row = $result->fetch_assoc())
              {
                $id_banner = $row['id_banner'];
                $img_banner1 = $row['img_banner1'];
                $img_banner2 = $row['img_banner2'];
                $img_banner3 = $row['img_banner3'];
                $img_banner4 = $row['img_banner4'];
                $img_banner5 = $row['img_banner5'];
                

              
          ?>

         
          <form name="add-product" method="POST" action="save/admin_save_banner.php?id_banner=<?php echo $id_banner;?>" enctype="multipart/form-data">
          <li>
              <div class="col-sm-10">
        <div class="form-group">
        <h4>Bannerส่วนลดสินค้า1</h4><hr>
        <label for="banner_img">&nbsp;&nbsp;รูปภาพเดิม&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;แก้ไข้แล้ว</label><br>

          <img src="../../../img/<?php echo $img_banner1; ?>"  alt="Snow" style="width:100%;max-width:300px" />
          

        <img src="../../../img/<?php echo $img_banner1; ?>" id="blah1" alt="Snow" style="width:100%;max-width:300px" />
          
        <input name="img_banner1" type="file" onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
            
            <button type="submit" class="w3-btn w3-ripple w3-blue w3-round-large">บันทึก</button>
        </div>
        </div>
        <hr>
          <div class="col-sm-2"></div>
            </li>
         </form>

         <form name="add-product" method="POST" action="save/admin_save_banner2.php?id_banner=<?php echo $id_banner;?>" enctype="multipart/form-data">
          <li>
              <div class="col-sm-10">
        <div class="form-group">
            <h4>Bannerส่วนลดสินค้า2</h4><hr>
            <label for="banner_img">&nbsp;&nbsp;รูปภาพเดิม&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;แก้ไข้แล้ว</label><br>
             <a target="_blank" href="../../../img/<?php echo $img_banner2; ?>"  alt="Snow" style="width:100%;max-width:300px" />
             <img src="../../../img/<?php echo $img_banner2; ?>"alt="Snow" style="width:100%;max-width:300px"></a>&emsp;

           <a target="_blank" href="../../../img/<?php echo $img_banner2; ?>" id="blah2" alt="Snow" style="width:100%;max-width:300px" />
            <img src="../../../img/<?php echo $img_banner2; ?>"alt="Snow" style="width:100%;max-width:300px"></a>&emsp;

            <input name="img_banner2" type="file" onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
            
            <button type="submit" class="w3-btn w3-ripple w3-blue w3-round-large">บันทึก</button>
        </div>
        </div>
          <div class="col-sm-2"></div>
            </li>
         </form>
<hr>
         <form name="add-product" method="POST" action="save/admin_save_banner3.php?id_banner=<?php echo $id_banner;?>" enctype="multipart/form-data">
          <li>
              <div class="col-sm-10">
        <div class="form-group">
            <h4>Bannerส่วนสไล1</h4><hr>
           <label for="banner_img">&nbsp;&nbsp;รูปภาพเดิม&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;แก้ไข้แล้ว</label><br>
            <a target="_blank" href="../../../img/<?php echo $img_banner3; ?>"  alt="Snow" style="width:100%;max-width:300px" />
              <img src="../../../img/<?php echo $img_banner3; ?>"alt="Snow" style="width:100%;max-width:300px"></a>&emsp;

            <a target="_blank" href="../../../img/<?php echo $img_banner3; ?>" id="blah3" alt="Snow" style="width:100%;max-width:300px" />
            <img src="../../../img/<?php echo $img_banner3; ?>"alt="Snow" style="width:100%;max-width:300px"></a>&emsp;

            <input name="img_banner3" type="file" onchange="document.getElementById('blah3').src = window.URL.createObjectURL(this.files[0])">
            
            <button type="submit" class="w3-btn w3-ripple w3-blue w3-round-large">บันทึก</button>
        </div>
        </div>
          <div class="col-sm-2"></div>
            </li>
         </form>
<hr>
          <form name="add-product" method="POST" action="save/admin_save_banner4.php?id_banner=<?php echo $id_banner;?>" enctype="multipart/form-data">
          <li>
              <div class="col-sm-10">
        <div class="form-group">
            <h4>Bannerส่วนสไล2</h4><hr>
            <label for="banner_img">&nbsp;&nbsp;รูปภาพเดิม&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;แก้ไข้แล้ว</label><br>
             <a target="_blank" href="../../../img/<?php echo $img_banner4; ?>"  alt="Snow" style="width:100%;max-width:300px" />
              <img src="../../../img/<?php echo $img_banner4; ?>"alt="Snow" style="width:100%;max-width:300px"></a>&emsp;

            <a target="_blank" href="../../../img/<?php echo $img_banner4; ?>" id="blah4" alt="Snow" style="width:100%;max-width:300px" />
            <img src="../../../img/<?php echo $img_banner4; ?>"alt="Snow" style="width:100%;max-width:300px"></a>&emsp;

            <input name="img_banner4" type="file" onchange="document.getElementById('blah4').src = window.URL.createObjectURL(this.files[0])">
            
            <button type="submit" class="w3-btn w3-ripple w3-blue w3-round-large">บันทึก</button>
        </div>
        </div>
          <div class="col-sm-2"></div>
            </li>
         </form>
<hr>


         <form name="add-product" method="POST" action="save/admin_save_banner5.php?id_banner=<?php echo $id_banner;?>" enctype="multipart/form-data">
          <li>
              <div class="col-sm-10">
        <div class="form-group">
            <h4>Bannerส่วนสไล3</h4><hr>
            <label for="banner_img">&nbsp;&nbsp;รูปภาพเดิม&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;แก้ไข้แล้ว</label><br>
             <a target="_blank" href="../../../img/<?php echo $img_banner5; ?>"  alt="Snow" style="width:100%;max-width:300px" />
              <img src="../../../img/<?php echo $img_banner5; ?>"alt="Snow" style="width:100%;max-width:300px"></a>&emsp;

            <a target="_blank" href="../../../img/<?php echo $img_banner5; ?>" id="blah5" alt="Snow" style="width:100%;max-width:300px" />
            <img src="../../../img/<?php echo $img_banner5; ?>"alt="Snow" style="width:100%;max-width:300px"></a>&emsp;

            <input name="img_banner5" type="file" onchange="document.getElementById('blah5').src = window.URL.createObjectURL(this.files[0])">
            
            <button type="submit" class="w3-btn w3-ripple w3-blue w3-round-large">บันทึก</button>
        </div>
        </div>
          <div class="col-sm-2"></div>
            </li>
         </form>
<br>
        <?php }} ?>
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
