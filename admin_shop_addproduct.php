<?php 
  session_start();
    include_once('connect.php');
    $id_member=$_SESSION['mid'];

?>

<html><head><title>E-shop Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
 <!-- map -->   
    <script src="http://code.jquery.com/jquery.js"></script>
    <style type="text/css">  
    #map_canvas{  
        margin:auto;  
        height:300px;  
        overflow:hidden;  
    }  
    .hero-unit {
        padding: 10px;
    }
    </style>
 <!-- map -->
<script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script></head><body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
  <a href="index.php" class="w3-bar-item w3-right"> E-SHOP | Admin </a>
  
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <?php

             // $id_member2 = $_GET['id_member'];
            $sql = "SELECT * FROM `member` WHERE id_member ='$id_member'";
            $result = $con->query($sql);
            
            if($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {
                $name_member = $row['name_member'];
                $img_member = $row['img_member'];
          ?>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="images/product/1382669026-1712556181-o.jpg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo "$name_member" ?></strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
      <?php } ?>
    <?php } ?>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>&nbsp; Close Menu</a>
    <a href="admin_shop.php" class="w3-bar-item w3-button w3-padding w3-blue-grey"><i class="fa fa-eject fa-fw"></i>&nbsp; หน้าหลัก</a>
    <a href="admin_shop1.php" class="w3-bar-item w3-button w3-padding w3-blue-grey"><i class="fa fa-shopping-cart fa-fw"></i>&nbsp; คลังสินค้า</a>
    <a href="admin_shop2.php" class="w3-bar-item w3-button w3-padding w3-blue-grey"><i class="fa fa-comment fa-fw"></i>&nbsp; ข้อความ</a>
    <a href="admin_shop3.php" class="w3-bar-item w3-button w3-padding w3-blue-grey"><i class="fa fa-shopping-bag fa-fw"></i>&nbsp; คำสั่งซื้อ</a>
    <a href="admin_shop4.php" class="w3-bar-item w3-button w3-padding w3-blue-grey"><i class="fa fa-history fa-fw"></i>&nbsp; ประวัติการสั่งซื้อ</a>
    <a href="admin_shop5.php" class="w3-bar-item w3-button w3-padding w3-blue-grey"><i class="fa fa-credit-card fa-fw"></i>&nbsp; การชำระเงิน</a>
    <a href="admin_shop6.php" class="w3-bar-item w3-button w3-padding w3-blue-grey"><i class="fa fa-truck fa-fw"></i>&nbsp; ขนส่งสินค้า</a>
    <a href="admin_shop7.php" class="w3-bar-item w3-button w3-padding w3-blue-grey"><i class="fa fa-address-book-o fa-fw"></i>&nbsp; ลูกค้า</a>
    
    <a href="admin_shop8.php" class="w3-bar-item w3-button w3-padding w3-blue-grey"><i class="fa fa-trash fa-fw"></i>&nbsp; ลบสินค้า</a>
    
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue-grey"><i class="fa fa-cog fa-fw"></i>&nbsp; การตั้งค่า</a>
    <br>
    <br>
     <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-expeditedssl fa-fw"></i>&nbsp; ออกจากระบบ</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <a href="admin_shop_addproduct.php"><div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">  
        <div class="w3-left"><i class="fa fa-shopping-cart w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div> 
        <h4>เพิ่มสินค้า</h4>
      </div>
    </div></a>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>คำสั่งซื้อใหม่</h4>
      </div>
    </div>
   <!--  <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-area-chart w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>อัตราผู้เข้าชมสินค้า</h4>
      </div>
    </div> -->
   <!--  <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>การลงทะเบียนผู้ใช้</h4>
      </div>
    </div> -->
  </div>

<!--   <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>NEW</h5>
        <img src="images/baaaaa.jpg" style="width:100%" alt="Google Regional Map">
      </div>
      <div class="w3-twothird">
        <h4>การแจ้งเตือน</h4>
        <table class="w3-table w3-striped w3-white">
          <tbody><tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>สถิติใหม่มีผู้ชมมากกว่า 90 ครั้ง</td>
            <td><i>10 นาที</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Database error ฐานข้อมูลผิดพลาด.</td>
            <td><i>15 นาที</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>สถิติใหม่ผู้ใช้มากกว่า 40 ราย</td>
            <td><i>17 นาที</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>ความคิดเห็นใหม่</td>
            <td><i>25 นาที</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>ตรวจสอบธุรกรรม</td>
            <td><i>28 นาที</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
            <td>ซีพียูโอเวอร์โหลด</td>
            <td><i>35 นาที</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>หุ้นใหม่</td>
            <td><i>39 นาที</i></td>
          </tr>
        </tbody></table>
      </div>
    </div>
  </div> -->
  <hr>
  <!-- <div class="w3-container">
    <h4>สถิติทั่วไป</h4>
    <p>ผู้เข้าชมใหม่</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>อัตราตีกลับ</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>ผู้ใช้ใหม่</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr> -->

<!--   <div class="w3-container">
   <br>
    <button class="w3-button w3-dark-grey">More Countries &nbsp;<i class="fa fa-arrow-right"></i></button>
  </div> -->
  
  <div class="w3-container">
    <h5>เพิ่มสินค้า</h5>
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
          <!-- div container -->
    <div class="container">
    <fieldset>
    <legend><h2 align="center">เพิ่มสินค้า</h2></legend>
      <!-- form -->
      <form name="add-product" method="POST" action="chk-add-product.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="product_name">ชื่อสินค้า</label>
          <input type="text" name="product_name" class="form-control" id="product_name" placeholder="ชื่อสินค้า" required="required">
        </div>
        <div class="form-group">
          <label for="product_price">ราคา</label>
          <input type="number" name="product_price" class="form-control" id="product_price" placeholder="ราคา" required="required">
        </div>
        <div class="form-group">
          <label for="product_number">จำนวน(ชิ้น)</label>
          <input type="number" name="product_number" class="form-control" id="product_number" placeholder="จำนวน" required="required">
        </div>
        <div class="form-group">
          <label for="product_type">ประเภท/หมวดหมู่</label>
          <select name="product_type" id="product_type" class="form-control">
            <?php 
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
        <div class="form-group">
          <label for="product_img">รูปภาพสินค้า</label>
          <input type="file" name="product_img" id="product_img" required="required">
        </div>
        <div class="form-group">
          <label for="product_detail">ขอมูลสินค้า</label>
          <textarea name="product_detail" class="form-control" rows="5" id="product_detail" required="required"></textarea>
          <?php 
            $id_member = $_GET['id_member'];
          ?>
          <input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
        </div>
        
          <button type="submit" class="btn btn-success">เพิ่มสินค้า</button>
          <button type="reset" class="btn btn-danger">ล้างข้อมูล</button>
      
      </form>
    </fieldset>
        <!-- /form -->                               
    </div>
    <!-- /div container -->
        <span class="w3-xlarge"><!-- สมชาย --></span><br>
      </li>
    </ul>
  </div>
  <hr>

<!--   <div class="w3-container">
    <h5>ความคิดเห็นล่าสุด</h5>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="images/product/04.jpg" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>สมชาย <span class="w3-opacity w3-medium">Sep 29, 2019, 9:12 PM</span></h4>
        <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="images/product/พลเอกประยุทธ.jpg" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>ลุงตู่ พลเอก ประยุทธ์ จันทร์ โอชา นายกรัฐมนตรี <span class="w3-opacity w3-medium">Sep 28, 2019, 10:15 PM</span></h4>
        <p>เราจะทำตามสัญญา ขอเวลาอีกไม่นาน</p><br>
      </div>
    </div>
  </div> -->
  <br>
  <!-- <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Demographic</h5>
        <p>Language</p>
        <p>Country</p>
        <p>City</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">System</h5>
        <p>Browser</p>
        <p>OS</p>
        <p>More</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Target</h5>
        <p>Users</p>
        <p>Active</p>
        <p>Geo</p>
        <p>Interests</p>
      </div>
    </div>
  </div> -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/nouislider.min.js"></script>
  <script src="js/jquery.zoom.min.js"></script>
  <script src="js/main.js"></script>
  <script src="script.js"></script>
  <script>


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>


</body></html>