<?php 
  session_start();
    include_once('connect.php');
    mysqli_query($con, "SET NAMES UTF8");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>E-SHOP HTML Template</title>
  <link href="https://fonts.googleapis.com/css?family=Pridi&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
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

  <!-- navbar -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

     <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link type="text/css" rel="stylesheet" href="css-responsive/naber.css" />

</head>
<style type="text/css"> html,body,h1,h2,h3,h4,h5{font-family: 'Prompt', sans-serif;}
body{
  background:#f1f1f1;
  -webkit-font-smoothing: antialiased;
}

.flex-into{
  text-align:center;
}
.box-wrap{
  display:flex;
  align-items:center;
  justify-content:center;
  margin:0.5%;

}
.box{
  
  margin:1%;
  background:white;
  width:8%;
  border:5px solid #FFFFFF ;
  box-shadow:0 0px 0px 0px rgba(0,0,0,0.25);
  border-radius:3px;
  transition:.2s all; 
}
.box-wrap:hover .box{
  filter:blur(3px);
  opacity:.5;
  transform: scale(.98);
  box-shadow:none;
}
.box-wrap:hover .box:hover{
  transform:scale(1);
  filter:blur(0px);
  opacity:2;
  box-shadow:0 8px 0px 0px rgba(0,0,0,0.125);
}
</style>

<style type="text/css"> 
/*ประเภทร้าน*/
  .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: -webkit-linear-gradient(45deg, #ff89e9 0%, #05abe0 100%);
  background: linear-gradient(45deg, #ff89e9 0%,#05abe0 50%);
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 1em;
  text-align: left;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 40px);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-40px,0,0);
  transform: translate3d(-40px,0,0);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  position: relative;
  font-size: 30px;
  background-color: transparent;
  padding: 15% 0 10px 0;
  text-align: left;
}

.hovereffect .overlay:before {
  position: absolute;
  top: 20px;
  right: 20px;
  bottom: 20px;
  left: 20px;
  border: 1px solid #fff;
  content: '';
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-20px,0,0);
  transform: translate3d(-20px,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(1px,0,0);
}

.hovereffect:hover img {
  opacity: 0.6;
  filter: alpha(opacity=60);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect:hover .overlay:before,
.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}


/*__________________________(menubar)________________________________*/
* {
  margin: 0;
  padding: 0;
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
}

h2,h3 {
  text-align: left;
  margin: 20px auto;
  color: #fff;
}

.accordion-menu {
  width: 100%;
  max-width: 200px;
  margin: 20px auto 20px;
  background: #fff;
  border-radius: 4px;
}

.accordion-menu li.open .dropdownlink {
  color : #CDDC39;
 }

.fa-chevron-down {
  transform: rotate(180deg);
  }

.accordion-menu li:last-child 

.dropdownlink {
  border-bottom: 0;
}
.dropdownlink {
  cursor: pointer;
  display: block;
  padding: 10px 15px 15px 15px;
  font-size: 14px;
  border-bottom: 1px solid #ccc;
  color: #212121;
  position: relative;
  transition: all 0.4s ease-out;
  i {
    position: absolute;
    top: 17px;
    left: 16px;
  }
  .fa-chevron-down {
    right: 12px;
    left: auto;
  }
}

.submenuItems {
  display: none;
  background: #C8E6C9;
  li {
    border-bottom: 1px solid #B6B6B6;
  }
}

.submenuItems a {
  display: block;
  color: #727272;
  padding: 12px 12px 12px 45px;
  transition: all 0.4s ease-out;
  &:hover {
    background-color: #CDDC39;
    color: #fff;
  }
}
</style>

<body>
  <!-- HEADER -->
<?php 
include('menu-return/navber2.php');
?>

  <!-- _____________________________________(benner พื้นหลังแบนเนอร์)_____________________________________________________ -->
    <!-- container -->

     <div class="container">
    
        
      <div class="w3-display-right w3-large w3-container w3-padding-6 " style="height:350px;width:550px;">
        <br><br>
        <img src="img/logo.png">
        <blockquote contenteditable="true"><q>What we think, we become.</q>
      <cite>Gautama Buddha</cite>
    </blockquote>

      <h1><i>หาสินค้าที่คุณต้องการ</i></h1>
      <button class="w3-round-large w3-orange w3-border w3-hover-shadow" style="width: 150px;height: 50px;">
        <i class="fa fa-search" aria-hidden="true"></i> ค้นหาสินค้า</button>
      <button  class="w3-round-large w3-white w3-border-black w3-hover-shadow" style="width: 150px;height: 49px;"> สมัครเป็นผู้ขาย</button>
    <br><br>

    
  </div>
</div>
</div>
    <!-- __________________________________(ประเภทย่อย < สินค้าใหม่/สินค้าขายดี >)______________________________________________ -->
     <div class="w3-display-bottommiddle w3-hide-small w3-large w3-container w3-padding-6 " style="height:130px;">
<section class="section-catagory ">
    <div class="container w3-round-xlarge w3-card" style="background: white; ">
      <div class="box-catagory " style="width: 10%;">
        <div class="box-wrap">

          <div class="box">
            <a href="chk-type.php?id_type=12"><div style="width: 150px;height: 80px;">
              <img src="icon/icon7.png" alt="" class="img-catgory">
              <p class="hide-text-cat">สินค้าใหม่</p>
            </div></a>
          </div>

   
           <div class="box">
            <a href="chk-type.php?id_type=1"><div style="width: 150px;height: 80px;">
              <img src="icon/icon1.png" alt="" class="img-catgory">
              <p class="hide-text-cat">สินค้าขายดี</p>
            </div></a>
          </div>
     
           <div class="box">
            <a href="chk-type.php?id_type=2"><div style="width: 150px;height: 80px;">
              <img src="icon/icon5.png" alt="" class="img-catgory">
              <p class="hide-text-cat">สินค้าแท้</p>
            </div></a>
                    </div>
     
          <div class="box">
            <a href="chk-type.php?id_type=6"><div style="width: 150px;height: 80px;">
              <img src="icon/icon2.png" alt="" class="img-catgory">
              <p class="hide-text-cat">สินค้ามือสอง</p>
            </div></a>
                   </div>
   
          <div class="box">
            <a href="chk-type.php?id_type=9"><div style="width: 150px;height: 80px;">
              <img src="icon/icon4.png" alt="" class="img-catgory">
              <p class="hide-text-cat">แฟชั่นชาย</p>
            </div></a>
                   </div>

          <div class="box">
            <a href="chk-type.php?id_type=10"><div style="width: 150px;height: 80px;">
              <img src="icon/icon3.png" alt="" class="img-catgory">
              <p class="hide-text-cat">แฟชั่นหญิง</p>
            </div></a>
                  </div>

          <div class="box">
            <a href="chk-type.php?id_type=11"><div style="width: 150px;height: 80px;">
              <img src="icon/icon6.png" alt="" class="img-catgory">
              <p class="hide-text-cat">เครื่องใช้ไฟฟ้า</p>
            </div></a>
                  </div>
           </div> 
      </div>
      <!-- /Catagory -->
    </div><!-- container -->    
  </section>
</div>
<!-- __________________________________(ประเภทย่อย < สินค้าใหม่/สินค้าขายดี >)______________________________________________ -->

<!-- _________________________________________________________________________________________________________________________ -->  
<!-- <div class="container" style="width: 89%" >
<center>
<img src="img/banner555.png" width="100%;" class=" w3-card  w3-round">
</center></div> -->
<!-- _________________________________________________________________________________________________________________________ -->


<body style="background: #F8F8F8">
  <!-- HOME -->

      <!-- /container -->
    </div>
    <!-- icon---------------------------------------------------------------- -->
<!-- <section class="section-catagory ">
    <div class="container w3-round-xlarge " style="background: white;width: 72%;" >
        <div class="box-catagory " style="width: 10%;">
           <div class="box-wrap">
 
         <div class="box">
          <a href="chk-type.php?id_type=1"><div style="width: 100px;height: 100px;">
            <img src="category/icon1.png" alt="" class="img-catgory">
            <p class="hide-text-cat">Free Shipping</p>
          </div></a>
        </div>

          

           
         <div class="box">
          <a href="chk-type.php?id_type=2"><div style="width: 100px;height: 100px;">
            <img src="category/icon2.png" alt="" class="img-catgory">
            <p class="hide-text-cat">Men's Sale</p>
          </div></a>
                  </div>
          

           
        <div class="box">
          <a href="chk-type.php?id_type=6"><div style="width: 100px;height: 100px;">
            <img src="category/icon3.png" alt="" class="img-catgory">
            <p class="hide-text-cat">Gamer Zone</p>
          </div></a>
                 </div>
          

           
        <div class="box">
          <a href="chk-type.php?id_type=9"><div style="width: 100px;height: 100px;">
            <img src="category/icon4.png" alt="" class="img-catgory">
            <p class="hide-text-cat">Electronics Expo</p>
          </div></a>
                 </div>
          

           
        <div class="box">
          <a href="chk-type.php?id_type=10"><div style="width: 100px;height: 100px;">
            <img src="category/e1.png" alt="" class="img-catgory">
            <p class="hide-text-cat">Fashion Zone</p>
          </div></a>
                </div>
          

           
        <div class="box">
          <a href="chk-type.php?id_type=11"><div style="width: 100px;height: 100px;">
            <img src="category/icon5.png" alt="" class="img-catgory">
            <p class="hide-text-cat">E-shop Mart</p>
          </div></a>
                </div>
          

           
        <div class="box">
          <a href="chk-type.php?id_type=12"><div style="width: 100px;height: 100px;">
            <img src="category/icon6.png" alt="" class="img-catgory">
            <p class="hide-text-cat">Coin Rewards</p>
          </div></a>
        </div>

          

           
        <div class="box">
          <a href="chk-type.php?id_type=13"><div style="width: 100px;height: 100px;">
            <img src="category/icon7.png" alt="" class="img-catgory">
            <p class="hide-text-cat">Partner Privileges</p>
          </div></a>
        </div>

          

                     
                    <div class="box">
                      <a href="chk-type.php?id_type=15"><div style="width: 100px;height: 100px;">
            <img src="category/icon8.png" alt="" class="img-catgory">
            <p class="hide-text-cat">Vouchers</p>
          </div></a>
                     </div>

           
        <div class="box">
          <a href="chk-type.php?id_type=15"><div style="width: 100px;height: 100px;">
            <img src="category/icon10.png" alt="" class="img-catgory">
            <p class="hide-text-cat">All Campaigns</p>
          </div></a>
                 </div>       
         </div> 
      </div>
     /Catagory -->
    <!-- </div>container    
  </section> -->

  <!-- Icon ----------------------------------------------------------------------------------------- -->
  </div>


  <!-- /HOME -->
  <!-- <div class="SpPcVL _3XaILN" style="background-image: url(&quot;https://cf.shopee.co.th/file/2f06e7bdfcf2e561cc7e2638a4e347ec_tn&quot;); background-size: contain; background-repeat: no-repeat;"></div> -->
  <section class="section-catagory">
    <div class="container w3-card  w3-round-xlarge"style="background: white">
<br>
      <p style="color: grey" class="pull-left">หมวดหมู่</p><hr>
        <div class="box-catagory  ">
        
    <?php
           // mysqli_query($con, "SET NAMES UTF8");
            
            $sql = "SELECT * FROM type_product ";
            $result = $con->query($sql);
            
            if($result->num_rows > 0) 
            {
              while($row = $result->fetch_assoc())
              {
                $id_type = $row['id_type'];
                $img_icon = $row['icon'];
                $name_type = $row['name_type'];    
        ?> 
    
      <a href="chk-type.php?id_type=<?php echo $id_type ;?> "><div class="flex  w3-hover-shadow">
        <img src="category/<?php echo $img_icon; ?>" alt="" class="img-catgory">
        <p class="hide-text-cat"><?php echo $name_type ;?></p>
      </div></a>
      <?php } ?>
      <?php } ?>
    
        </div>  
      <br>
    <!-- /Catagory -->
    </div><!-- container -->
    
  </section><!-- section -->
  
  
<!-- _____________________________________________________________________________________________________ -->


<!-- ______________________________________________(section3)___________________________________________________________ -->
 <div class="container  w3-round-large" style="background:white; color: white; width: 80%"><br>
   <div class="w3-row" >
    <div class="w3-col w3-container m5 l3">
       <img src ="img/home1.jpg" class=" w3-round-xlarge" width="155%">
    </div>

  <div class="w3-col w3-container m6 l9"> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <img src="img/home2.jpg" width="41%" class="w3-round-xlarge w3-hover-shadow">&nbsp;&nbsp;
     <img src="img/home3.jpg" width="41%" class="w3-round-xlarge w3-hover-shadow"><br><br> 
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <img src="img/home4.jpg" width="41%" class="w3-round-xlarge w3-hover-shadow">&nbsp;&nbsp;
     <img src="img/home5.jpg" width="41%" class="w3-round-xlarge w3-hover-shadow">
    </div>
   </div>
   <br>
 </div>
 <!-- ____________________________________________________________(section3 /)________________________________________________ -->

   <div class="w3-display-container " style="height:40px;">
  <div class="w3-display-topleft">
    <center>
      <img src="img/สินค้าแนะนำ.png" style="width: 18%" >
    </center>
  </div>
   </div><br>

<!-- ___________________________________________________(section4)________________________________________________ -->

    
    <!-- _________________________________________(menubar)_________________________________________ -->
      
    <div class="container w3-round-large" style="background: white; width: 90%">


      <div class="row"> <!-- row -->
        <!--  Product Details -->
        <div class="product product-details clearfix">
          <div class="col-md-5">

        <ul class="accordion-menu pull-left w3-card">
          <li>
            <div class="dropdownlink"> 
              <i class="fa fa-chevron-down" aria-hidden="true"></i> แฟชั่นชาย
            </div>
            <ul class="submenuItems">
              <li><a href="#">เสื้อชาย</a></li>
              <li><a href="#">กางเกงชาย</a></li>
              <li><a href="#">รองเท้าชาย</a></li>
            </ul>
          </li>
          <li>
            <div class="dropdownlink"> 
              <i class="fa fa-chevron-down" aria-hidden="true"></i> แฟชั่นหญิง
            </div>
            <ul class="submenuItems">
              <li><a href="#">เสื้อหญิง</a></li>
              <li><a href="#">กางเกงหญิง</a></li>
              <li><a href="#">รองเท้าหญิง</a></li>
            </ul>
          </li>

           <li>
            <div class="dropdownlink"></i> 
              <i class="fa fa-chevron-down" aria-hidden="true"></i> โทรศัพย์และเเท็บเล็ต
            </div>
            <ul class="submenuItems">
                 <li><a href="#">โทรศัพย์มือถือ</a></li>
              <li><a href="#">แล็บท็อปและแท็บเล็ต</a></li>
              <li><a href="#">อุปกรณ์เสริม</a></li>
            </ul>
          </li>
          <li>
            <div class="dropdownlink"></i>
              <i class="fa fa-chevron-down" aria-hidden="true"></i> คอมพิวเตอร์และออฟฟิส
            </div>
            <ul class="submenuItems">
              <li><a href="#">notebook</a></li>
              <li><a href="#">pc</a></li>
              <li><a href="#">printer</a></li>
              <li><a href="#">อุปกรณ์เสริม</a></li>
            </ul>
          </li>
          <li>
            <div class="dropdownlink"></i> 
              <i class="fa fa-chevron-down" aria-hidden="true"></i> เกม
            </div>
            <ul class="submenuItems">
              <li><a href="#">game control</a></li>
              <li><a href="#">DVD games</a></li>
              <li><a href="#">pes4 </a></li>
            </ul>
          </li>
          <li>
            <div class="dropdownlink"></i> 
              <i class="fa fa-chevron-down" aria-hidden="true"></i> สวนและบ้าน
            </div>
            <ul class="submenuItems">
              <li><a href="#">เครื่องใช้ไฟฟ้า</a></li>
              <li><a href="#">เครื่องใช้ในสวน</a></li>
              <li><a href="#">เครื่องใช้ในบ้าน</a></li>
            </ul>
          </li>
          
           <li>
            <div class="dropdownlink"></i> 
              <i class="fa fa-chevron-down" aria-hidden="true"></i> สวนและบ้าน
            </div>
            <ul class="submenuItems">
              <li><a href="#">Fantasy book 1</a></li>
              <li><a href="#">Fantasy book 2</a></li>
              <li><a href="#">Fantasy book 3</a></li>
            </ul>
          </li>
          <li>
            <div class="dropdownlink">
              <i class="fa fa-chevron-down" aria-hidden="true"></i> โทรศัพย์และเเท็บเล็ต
            </div>
            <ul class="submenuItems">
              <li><a href="#">โทรศัพย์มือถือ</a></li>
              <li><a href="#">แล็บท็อปและแท็บเล็ต</a></li>
              <li><a href="#">อุปกรณ์เสริม</a></li>
            </ul>
          </li>
        </ul> 

  <!-- ____________________________________________________(สินค้า)_____________________________________________________ -->
    <!-- container -->


    <div class="container">

      <div ><br>
        <p style="padding-left:40px;" class="pull-left "></p>
        </div>
        <!-- ROW -->
          <div class="flex-into">

          <?php

           // $id_member2 = $_GET['id_member'];
          $sql = "SELECT * FROM `product` WHERE `saled` >= 10 ORDER BY `product`.`saled` DESC";
          $result = $con->query($sql);
          
          if($result->num_rows > 0)
          {
            while($row = $result->fetch_assoc())
            {
              $id_product = $row['id_product'];
              // $id_member = $row['id_member'];
              $name_product = $row['name_product'];
              $price_product = $row['price_product'];
              $stock = $row['stock'];
              $saled = $row['saled'];
              // $img_product = $row['img_product'];
              $na = strlen($row['name_product']);

               $sql1 = "SELECT min(img_products) as `img_products`  FROM `img_product` WHERE `id_product`='$id_product'";
                      $result1 = $con->query($sql1);
                      
                      if($result1->num_rows > 0)
                      {
                        while($row1 = $result1->fetch_assoc())
                        {
                          $img_product = $row1['img_products'];
                ?>
            
                      
          <a href="product-page.php?id_product=<?php echo $id_product; ?> ">        
            <div class="box-flex w3-card ">
                <span class="first">ใหม่</span>         
                <img class="img-size " src="images/product/<?php echo $img_product; ?>" alt="">
                <!-- f-->
 <!-- _______________________________________________(รายละเอียดสินค้า ชื่อ/ราคา)__________________________________________________ -->
                <div class="pull-left" style=" font-size: 14px;">&nbsp;
                  <?php
                  if($na < 45 ) {
                    echo mb_substr($row['name_product'],0,45,'UTF-8');
                  }else{
                    echo mb_substr($row['name_product'],0,45,'UTF-8'); ?>...
                    <?php
                  }?>
                </div>
                <!-- /f-->
                <!-- style="   margin-top: 8px;  margin-left: 3px;"-->
                    <div style="   margin-top: 10px;  margin-left: 3px;"></div>


              <div style="margin: 50px 0;">
                <div class="pull-left">&nbsp;
                  <span style="color: orangered; font-size: 15px">฿<?php echo $price_product; ?>.00</span>
                  <span style="color: grey; font-size: 10px">-฿100 -50%</span>
                </div>
                                   
                  <div class="product-rating review-rating pull-left w3-tiny">&nbsp;&nbsp;
                    <i class="fa fa-star" style="color:#FFC300"></i>
                    <i class="fa fa-star" style="color:#FFC300"></i>
                    <i class="fa fa-star" style="color:#FFC300"></i>
                    <i class="fa fa-star" style="color:#FFC300"></i>
                    <i class="fa fa-star-o empty"></i>
                  </div>
                <div class="pull-right">
                  <i class="fa fa-cart-plus " aria-hidden="true" style="color: orange"></i>&nbsp;&nbsp;
                  <i class="fa fa-credit-card-alt" aria-hidden="true" style="color: orange"></i>&nbsp;&nbsp;
                </div>

              </div> <!-- <div style="margin: 50px 0;"> -->
            </div> <!-- box-flex w3-card  -->
              </a>
                <?php } ?>
                <?php } ?>
                <?php } ?>
                <?php } ?>
          </div>  
          <br>                
  </div><!-- <contaner> --> 
      
<!-- _________________________________________(section4 /)______________________________________________ -->  


<!-- _________________________________________________________________________________________________________________________ -->  

<img src="img/5555.jpg" width="250%;" class=" w3-card  w3-round">




<!-- _________________________________________________________________________________________________________________________ -->

  <!-- section สินค้าแนะนำ -->
  <div class="sction">
    <div class="cor">
      <div class="container"  > <!-- container -->      
    <!-- ___________________________________________________________________________ -->  
    <div class="w3-display-container " style="height:35px;">
      <div class="w3-display-topleft">
          <img src="img/สินค้าทั่วไป.png" style="width: 18%" >
      </div>
    </div>
    <!-- __________________________________________________________________________  -->
      <hr>



<div class="container">

        <div class="row " style=" margin-bottom: 30px;" ><!-- ROW -->

                  
          <div class="flex-into ">

          <?php
            $sql = "SELECT * FROM `product` WHERE `saled` <= 10 ORDER BY `product`.`saled` DESC";
            $result = $con->query($sql);
            
            if($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {
                $id_product = $row['id_product'];
                 $id_member = $row['id_mamber'];
                $name_product = $row['name_product'];
                $price_product = $row['price_product'];
                $stock = $row['stock'];
                $saled = $row['saled'];
                // $img_product = $row['img_product'];

                   $sql1 = "SELECT min(img_products) as `img_products`  FROM `img_product` WHERE `id_product`='$id_product'";
                      $result1 = $con->query($sql1);
                      
                      if($result1->num_rows > 0)
                      {
                        while($row1 = $result1->fetch_assoc())
                        {
                          $img_product = $row1['img_products'];
          ?>
          
          <a href="product-page.php?id_product=<?php echo $id_product; ?>&id_member=<?php echo $id_member; ?>"> 
            <div class="box-flex w3-card-2">
              <img class="img-size " src="images/product/<?php echo $img_product; ?>" alt="" >
             <!-- --------------------------------------------------------------------------- -->
              <div class="pull-left" style=" font-size: 14px;">&nbsp;
                <?php
                if($na < 45 ) {
                  echo mb_substr($row['name_product'],0,45,'UTF-8');
                }else{
                  echo mb_substr($row['name_product'],0,45,'UTF-8'); ?>...
                  <?php
                }?>
              </div>
              <!-- /f-->
              <!-- style="   margin-top: 8px;  margin-left: 3px;"-->
              <div style="   margin-top: 10px;  margin-left: 3px;">
            
              </div>
<!-- ----------------------------------------------------------------------------------------------------------------------- -->

                
                  <div style="margin: 50px 0;">
              <div class="pull-left">&nbsp;
              <span style="color: orangered; font-size: 15px">฿<?php echo $price_product; ?>.00</span>
              <span style="color: grey; font-size: 10px">-฿100 -50%</span>
                </div><br>
                                 
                <div class="product-rating review-rating pull-left w3-tiny">&nbsp;&nbsp;
                <i class="fa fa-star" style="color:#FFC300"></i>
                <i class="fa fa-star" style="color:#FFC300"></i>
                <i class="fa fa-star" style="color:#FFC300"></i>
                <i class="fa fa-star" style="color:#FFC300"></i>
                <i class="fa fa-star-o empty"></i>
                  </div>
                <div class="pull-right">
                <i class="fa fa-cart-plus " aria-hidden="true" style="color: orange"></i>&nbsp;&nbsp;
                <i class="fa fa-credit-card-alt" aria-hidden="true" style="color: orange"></i>&nbsp;&nbsp;
                  </div>
              </div>
            </div>
          </a>
          <?php } ?>
          <?php } ?>
          <?php } ?>
          <?php } ?>
          </div>
          
        </div>  
        <!-- ROW -->
      </div>    
      <!-- container  -->
    </div>  
  </div>
  <!-- /section สินค้าแนะนำ -->
</div>

    </div>
  </div>
</div>
</footer>
</div>
</center>



<!-- บรรยาย -->


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


// _______________________________________(menubar)_________________________________________________

$(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    // more then one submenu open?
    this.multiple = multiple || false;
    
    var dropdownlink = this.el.find('.dropdownlink');
    dropdownlink.on('click',
                    { el: this.el, multiple: this.multiple },
                    this.dropdown);
  };
  
  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el,
        $this = $(this),
        //this is the ul.submenuItems
        $next = $this.next();
    
    $next.slideToggle();
    $this.parent().toggleClass('open');
    
    if(!e.data.multiple) {
      //show only one menu at the same time
      $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
    }
  }
  
  var accordion = new Accordion($('.accordion-menu'), false);
})

</script>
</body>
</body>
</html>
