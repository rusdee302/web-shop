<?php session_start();
      include_once('connect.php');
              unset($_SESSION["amoun"]);
      unset($_SESSION["qty"]); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP</title>
	

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
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
	<!-- price -->	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<style type="text/css"> 
html,body,h1,h2,h3,h4,h5,{font-family: 'Prompt', sans-serif;}

.notification {
  
  color: white;
  text-decoration: none;
  padding: 4px 8px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}
.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;

}


/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #666;
  color: white;
}
</style>

<style>
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
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
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
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}

@keyframes zoom {
  from {transform: scale(0.1)} 
  to {transform: scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
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

<body style="background: #F8F8F8; font-family: 'Prompt', sans-serif;">
	<!-- HEADER -->
	<nav class="navbar navbar-default" style="background-image: linear-gradient(to bottom right,#f53e2d, #ff6533);">
	<header>
		<!-- header -->      
		<div id="header menu-head">
			<div class="container" style="font-family: 'Prompt', sans-serif;">
				<br>
              
				<!-- Account -->
				 <div class="pull-right">&nbsp;&nbsp;
				  <?php
					    if (isset($_SESSION['mname'])=='') 
					       { 
							include('head-befor.php'); 
						  }else{
							include('head-after.php');
						  }
					?>
				 </div>
				 <!-- /Account -->
        
				<!-- Account -->
                <div class="pull-right">
                	<font color="white">&nbsp;&nbsp;<i class="fa fa-question-circle-o"></i></font>
				 <a href=""><font color="white">ช่วยเหลือ</font></a>
				</div>
				<!-- /Account -->
					<!-- Account -->
                <div class="pull-right">
                	<font color="white">&nbsp;&nbsp;<i class="fa fa-question-circle-o"></i></font>
				 <a href=""><font color="white">แจ้งเตือน</font></a>
				</div>
				<!-- /Account -->

					<!-- Account -->
                <div class="pull-left">
                	<font color="white">&nbsp;&nbsp;</font>
				 <a href=""><font color="white">ขาย |</font></a>
				</div>
				<!-- /Account -->
					<!-- Account -->
                <div class="pull-left">
                	<font color="white">&nbsp;&nbsp;</font>
				 <a href=""><font color="white">ดาวน์โหลด |</font></a>
				</div>
				<!-- /Account -->
					<!-- Account -->
                <div class="pull-left">
                	<font color="white">&nbsp;&nbsp;</font>
				 <a href=""><font color="white">ติตามเราบน</font></a>
				  <a href=""><font color="white"><i class="fa fa-facebook-square"></i></font></a> 
				  <a href=""><font color="white"><i class="fa fa-instagram" aria-hidden="true"></i></font></a> 
				  <a href=""><font color="white"><i class="fa fa-link" aria-hidden="true"></i></font></a> 
				</div>
				<!-- /Account -->
             
              <br>

	<!-- Logo -->
				<div class="pull-left">

					<div class="header-logo">
					<a class="logo" href="index.php">
							<img src="./img/logo1.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="header-search">
						<form style="width:280%;">
							<input class="input search-input" type="text" placeholder="ค้นหาสินค้า..."style="background: white" >
							<button class="search-btn" style="background: #FFFFFF "><i class="fa fa-search White" ></i></button>
						</form>
					</div>
					<!-- /Search -->                  
				</div>
				<div class="pull-right">
					<ul class="header-btns" >

						<!-- <ตะกร้าสินค้า> -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<a href="cart-total.php" class="main-btn">ไปที่ตะกร้า</a>
										<button class="primary-btn">ชำระเงิน <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- <ตะกร้าสินค้า> -->
							
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->

	</header>
	<!-- /HEADER -->
	</nav>
<!--    <div class="container" style="padding: 10px"> 
        <a href="index.php" style="color: #3FB5DA">หน้าหลัก </a><font color="grey">></font>
        <a href="#!" style="color: #3FB5DA">รองเท้าชาย </a><font color="grey">></font>
        <a href="#!" style="color: #3FB5DA">รองเท้า</a>
    </div> -->

	</div>
	<div class="container w3-panel " style="background-image: linear-gradient(to bottom right,#f53e2d, #ff6533);">
		<div class="menu-h" style="padding: 1%">
			<font style="color: #FFFFFF; font-size: 16px;">หน้าแรก / ตะกร้าสินค้า / ติดต่อ admin</font>
		</div>
		
	</div>
	<!-- section -->
	<!-- <div class="section"> -->
		<!-- container -->


		<div class="container w3-round-large" style="background: white">
			<!-- row -->
    

			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-5">
						
<!-- 						
						  <video width="450" controls  autoplay>
						  <source src="img/adidas.mp4" type="video/mp4" >
						  <source src="img/adidas.mp4" type="video/ogg" >
						  </video>
 -->                     <br>
						<video width="450"  autoplay>
						  <source src="images/product/video670783007.mp4" type="video/mp4">
						  <source src="images/product/video670783007.mp4" type="video/ogg">
						</video>

						<div id="product-main-view"style="width:450px;height: 400px; " >&nbsp;
							<?php
								// include "connect.php";
								$id = $_GET['id_product'];
								mysqli_query($con, "SET NAMES UTF8");
								$sql = "SELECT * FROM `product` WHERE `id_product` = $id";
								$result = $con->query($sql);
								
								if($result->num_rows > 0)
								{
									while($row = $result->fetch_assoc())
									{
										$id_product = $row['id_product'];
										$name_product = $row['name_product'];
										$price_product = $row['price_product'];
										$stock = $row['stock'];
										$saled = $row['saled'];
										$img_product = $row['img_product'];
										$_SESSION['price_product'] = $row['price_product'];
										$detail_product = $row['detail_product'];

										$sql1 = "SELECT  * FROM `img_product` WHERE `id_product`='$id_product'";
										$result1 = $con->query($sql1);
								
										if($result1->num_rows > 0)
										{
											while($row1 = $result1->fetch_assoc())
											{
												$img_product = $row1['img_products'];
									
							?>
							
							<div class="product-view w3-round">
								<img src="images/product/<?php echo $img_product; ?>" alt="" style="width:450px;height: 380px;">
							</div>

							<?php } ?>
							<?php } ?>
							<?php } ?>
							<?php } ?>


							
						</div>
						<div id="product-view" style="width:450px;height: 50px;" >
										<?php
								// include "connect.php";
								$id = $_GET['id_product'];
								mysqli_query($con, "SET NAMES UTF8");
								$sql = "SELECT * FROM `product` WHERE `id_product` = $id";
								$result = $con->query($sql);
								
								if($result->num_rows > 0)
								{
									while($row = $result->fetch_assoc())
									{
										$id_product = $row['id_product'];
										$name_product = $row['name_product'];
										$price_product = $row['price_product'];
										$stock = $row['stock'];
										$saled = $row['saled'];
										$img_product = $row['img_product'];
										$_SESSION['price_product'] = $row['price_product'];
										$detail_product = $row['detail_product'];

										$sql1 = "SELECT  * FROM `img_product` WHERE `id_product`='$id_product'";
										$result1 = $con->query($sql1);
								
										if($result1->num_rows > 0)
										{
											while($row1 = $result1->fetch_assoc())
											{
												$img_product = $row1['img_products'];
									
							?>
							
							<div class="product-view">
								<img src="images/product/<?php echo $img_product; ?>" alt="" style="width:50px;height: 50px;">
							</div>
                         
                           
                  
								<?php } ?>
							<?php } ?>
							<?php } ?>
							<?php } ?>

							
						</div>
                          <br>
					</div>

					<div class="col-md-5">
						<div class="product-body">
							<!-- <div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div> -->

							 <h3 class="product-name" style="font-family: 'Prompt', sans-serif; font-size: 20px;"><?php echo $name_product; ?> ผลิตภัณร์ที่ดีที่ผลิดจากวัสดุพิเศษที่เรียกว่า ไวด์แบรเนี่ยม นำเข้าจาก wakanda สินค้ามีจำนวนจำกัด</h3>
								<div class="product-rating" style="font-size: 10px">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
								<a href="#"  style="font-size: 12px; color:#3FB5DA"> Review 20 | Review 43| สินค้าจำนวน:<?php echo $stock; ?> ชิ้น</a>
                             <hr>
							 <div >
							 	
							<font color="#FF6347"> 
							<h3 class="product-price">฿<?php echo $price_product; ?>.00</font></h3> 
							<!-- <del class="product-old-price">฿100</del> -->
							 <hr>
							<div>
							</div>	
							</div>
							
							&nbsp;&nbsp;-<font size="2" color="#FF5733">
							</i><i class="fa fa-truck"></i> <b>ค่าจัดส่ง</b></font><font color="grey"> ฿0-฿50บาท</font>
							<br>&nbsp;
							<font size="2" color="green">
							<img src="https://cdngarenanow-a.akamaihd.net/shopee/shopee-pcmall-live-sg/assets/9d21899f3344277e34d40bfc08f60bc7.png" width="25" height="15" class="_3xti2m">
							 </i><b>ฟรีค่าจัดส่ง</i></b></font><font color="grey"> เมื่อสั่งซื้อขั้นต่ำ ฿100</font><br>
						  
                               
                            
<!-- 							<?php
						$id_member = $_GET['id_member'];
					?> --><br><br>
                       <p><b>เลือกสี</b></p>
                       <div style="width:80%;">
                       <div class="pull-left"> 
                         <div id="myDIV" >
                       <?php
						$sql = "SELECT * FROM `product` WHERE `saled` <= 10 ORDER BY `product`.`saled` DESC limit 3";
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
								$na = strlen($row['name_product']);

								$sql1 = "SELECT * FROM `color1` WHERE `id_product`='$id_product'";
								$result1 = $con->query($sql1);
								
								if($result1->num_rows > 0)
								{
									while($row1 = $result1->fetch_assoc())
									{
										$name_color1 = $row1['name_color1'];

					?>
					  <button class="btn w3-border" name="gender" style="font-size: 13px; background-color: #FFFFFF; "><?php echo $name_color1 ?></button>
					 <?php }}}} ?>
                      
					  <p><br><b>ไซต์</b></p>
					        <?php
						$sql = "SELECT * FROM `product` WHERE `saled` <= 10 ORDER BY `product`.`saled` DESC limit 3";
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
								$na = strlen($row['name_product']);

								$sql1 = "SELECT * FROM `size1` WHERE `id_product`='$id_product'";
								$result1 = $con->query($sql1);
								
								if($result1->num_rows > 0)
								{
									while($row1 = $result1->fetch_assoc())
									{
										$name_size = $row1['name_size'];

					?>
					  <button class="btn w3-border" name="gender" style=" font-size: 13px;background-color: #FFFFFF;"><?php echo $name_size ?></button>
					 <?php }}}} ?>
					</div>
				    </div>
			        </div>


			     
<!--      
			 <div class="pull-left">
               <div class="pull-right"> -->		
							
               
					  <form action="save_cart1.php?id_product=<?php echo $id_product; ?>" method="post" >
						<div class="product-btns"><br><br><br><br><br><br><br><br>
					       <span class="text-uppercase">จำนวน&nbsp;&nbsp;</span>
							<input class="input" type="number" name="number" style="width:70px;height: 30px;">
							&nbsp;&nbsp;&nbsp;มีสินค้าจำนวน(<?php echo $stock; ?>)ชิ้น</div>
							</div><br>
						    <div class="qty-input">
						    <button class="primary-btn add-to-cart w3-hover-shadow w3-round" style="background: orange; width:175px;height: 42px;"> ซื้อสินค้า </button>
						    <button class="primary-btn add-to-cart w3-hover-shadow w3-round"><i class="fa fa-cart-plus" aria-hidden="true"></i> เพิ่มไปยังรถเข็น</button>
							
							</form>

							<br><br><br><br><br><p>แชร์ : 
							    <font color="#246BEE"><i class="fa fa-facebook-square" aria-hidden="true"></i></font>
							    <font color="#F75949"><i class="fa fa-google-plus-circle" aria-hidden="true"></i></font>
							    <font color="#EE2F09"><i class="fa fa-pinterest" aria-hidden="true"></i></font>
							    <font color="#0BCDD6"><i class="fa fa-twitter-square" aria-hidden="true"></i></font>
							    <font color="#44D815"><i class="fa fa-whatsapp" aria-hidden="true"></i></font></p>
						<br>
						</div>
					  </div>

					  <div class="col-md-2 ">
					  	<center><font>แนะนำให้คุณ</font></center>
						<?php
						$sql = "SELECT * FROM `product` WHERE `saled` <= 10 ORDER BY `product`.`saled` DESC limit 3";
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
								$na = strlen($row['name_product']);

								$sql1 = "SELECT min(img_products) as `img_products`  FROM `img_product` WHERE `id_product`='$id_product'";
								$result1 = $con->query($sql1);
								
								if($result1->num_rows > 0)
								{
									while($row1 = $result1->fetch_assoc())
									{
										$img_product = $row1['img_products'];

					?>
					
					
						<div class="box-flex w3-card-1" style="width: 95%; height: 95%;">
							<a href="product-page.php?id_product=<?php echo $id_product; ?>&id_member=<?php echo $id_member; ?>">	
								<img class="img-size w3-border" src="images/product/<?php echo $img_product; ?>" alt="" >


								
							 <!-- --------------------------------------------------------------------------- -->
								<div class="pull-left" style=" font-size: 14px;">&nbsp;
									<?php
									if($na < 30 ) {
										echo mb_substr($row['name_product'],0,30,'UTF-8');
									}else{
										echo mb_substr($row['name_product'],0,30,'UTF-8'); ?>...
										<?php
									}?>
								</div>
								<!-- /f-->
								<!-- style="   margin-top: 8px;  margin-left: 3px;"-->
								<div style="   margin-top: 10px;  margin-left: 3px;">
							
								</div>
							</a>
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
									<a href="save_cart1.php?id_product=<?php echo $id_product; ?>&gender=<?php echo '1'; ?>&in=<?php echo '1'; ?>"><i class="fa fa-cart-plus " aria-hidden="true" style="color: orange"></a></i>&nbsp;&nbsp;
									<a href="save_cart1.php?id_product=<?php echo $id_product; ?>&gender=<?php echo '2'; ?>">
									<i class="fa fa-credit-card-alt" aria-hidden="true" style="color: orange"></a></i>&nbsp;&nbsp;
							</div></div>
								
								
								
								<div >
									
								</div>
						
						</div>
					
					<?php } ?>
					<?php } ?>
					<?php } ?>
					<?php } ?>

					  </div>


                     
                       
                   
						 <div class="pull-left">
                 <!-- ข้อมูลร้านค้า -->
                      <div class="container w3-round-large"style="background: white">

					<div class="col-md-12 w3-card w3-round-large" style="background: #F8F8F8">
						<div class="product-tab" >
							<ul >
								<li></li>	
								</a></li>
							</ul>
								<div id="tab0" class="tab-pane fade in detail">
									<?php
								// include "connect.php";
								$id = $_GET['id_product'];
								mysqli_query($con, "SET NAMES UTF8");
								$sql = "SELECT * FROM `product` WHERE `id_product` = $id";
								$result = $con->query($sql);
								
								if($result->num_rows > 0)
								{
									while($row = $result->fetch_assoc())
									{
										$id_product = $row['id_product'];
										$id_ma = $row['id_mamber'];
										$name_product = $row['name_product'];
										$price_product = $row['price_product'];
										$stock = $row['stock'];
										$saled = $row['saled'];
										$img_product = $row['img_product'];
										$_SESSION['price_product'] = $row['price_product'];
										$detail_product = $row['detail_product'];

											$sql2 = "SELECT * FROM `member` WHERE `id_member` = $id_ma";
											$result2 = $con->query($sql2);
											
											if($result2->num_rows > 0)
											{
												while($row2 = $result2->fetch_assoc())
												{
													$name_member = $row2['name_member'];
													$email_member = $row2['email_member'];
													$gender_member = $row2['gender_member'];
													$address_member = $row2['address_member'];
													$phone_member = $row2['phone_member'];
													$lastname_member = $row2['lastname_member'];
													// $_SESSION['price_product'] = $row['price_product'];
													$img_member = $row2['img_member'];
										
							?>
							<div class="row">
								<div class="col-md-4 col-sm-3 ">
									<div class="row">
										<div class="col-md-4 ">
											&nbsp;&nbsp;&nbsp;<img src="images/member/<?php echo $img_member ; ?>" alt="" class="img-shop w3-circle" style="width:80px;height: 80px;">
										</div>
										<div class="col-md-8">
											<div class="shp-dt">
												<h5><div class="shop-name">ร้าน :<?php echo $name_member ;?></div></h5>
												<div class="btn-shop">
												<button type="button" class="btn w3-hover-shadow" style="color: white; border-color: black; background-color: orange; width: 50px;height: 35px;font-size: 14px;"><i class="fa fa-commenting-o"></i> </button>

												<a href="shop-detail.php">
													<button type="button " class="btn w3-hover-shadow" style="color: #f8694a; border-color: #f8694a; background-color: white; width:90px;height: 35px; font-size: 14px"><i class="fa fa-shopping-bag"></i> ดูร้านค้า</button></a>
												</div><br>
											</div>
								</div>
									</div>
								</div>
								<div Class="col-md-8">
									<div class="row">
										<div class="col-md-4">
											<div style="margin:10px">คะแนน : 4.7 เต็ม</div>
											<div style="margin:10px">เบอร์โทร : <?php echo $phone_member ;?></div>
										</div>
										<div class="col-md-4">
											<div style="margin:10px">เรทการตอบกลับ : 101 คน</div>
											<div style="margin:10px">เวลาในการตอบกลับ : 24ชั่วโมง</div>
										</div>
										<div class="col-md-4">
											<div style="margin:10px">เข้าร่วมเมื่อ : 29 เดือน ที่ผ่านมา</div>
											<div style="margin:10px">ผู้ติดตาม : 24465</div>
										</div>
									</div>
								</div>
							</div><br>
						<?php }} }}?>
						</div>
					</div>
				</div><!-- /Product Details -->
			</div><!-- /row -->	



			           <div class="col-md-12 " >	
                         </div>	<!-- ข้อมูลร้านค้า -->
							<div class="w3-panel w3-light-grey w3-leftbar w3-border-grey">
				            <h4>รายละเอียดสินค้า</h4>
				            </div>
							<div class="product-tab" >
								
								<div class="tab-content">  <center>
							<div class="product-tab" >
                           </center>

						<div id="tab0" class="tab-pane fade in detail">
							<div class="row">
								<div class="col-md-4 col-sm-4" >
									<div class="row">
										<div class="col-md-4 ">
											<img src="category/Man-1-icon.png" alt="" class="img-shop">
										</div>
										<div class="col-md-8">
											<div class="shp-dt">
												<div class="shop-name"><?php echo $name_member ;?></div>
												<div class="btn-shop">
													<button type="button" class="btn" style="color: green; border-color: green; background-color: white;"><i class="fa fa-commenting-o"></i> แชท</button>
													<a href="shop-detail.php"><button type="button" class="btn" style="color: #f8694a; border-color: #f8694a; background-color: white;"><i class="fa fa-shopping-bag"></i> ดูร้านค้า</button></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div id="tab1" >
							<h5>แบรนด์ :</h5>
							<p><?php echo $detail_product; ?></p>
						</div>
						<div id="tab2" class="tab-pane fade in">
						</div>
					</div>
				</div>
			</div>

				</div>
	<!-- /ข้อมูลสินค้า --><br><div class="container " style="background: grey"></div><br>

                    <div class="w3-panel w3-light-grey w3-leftbar w3-border-grey">
			            <h4>รีวิวจากลูกค้า 
			            	<a href="#" class="notification">
                            <span class="badge" style=" width:25px;height: 25px;">
									<?php
									$sql = "SELECT count(id_reviews) as reviews FROM `reviews_product` WHERE `id_product` = $id";
															$result = $con->query($sql);
															
															if($result->num_rows > 0)
															{
																while($row = $result->fetch_assoc())
																{
																	// $id_product = $row['id_product'];
																	$reviews = $row['reviews'];
																	echo $reviews;
																}
															}
																	
																	
									?>
								</span>
                               </a></h4>
			            </div>

                     
					<div class="col-md-12 w3-round-large" style="background: white">

						
							<ul class="tab-nav">
								
								
			            </li>
								
							</ul>
						
								<div id="tab2" class="tab-pane fade in">

									<div class="row">
										<div class="col-md-12">
											<div class="product-reviews">
												<div class="single-review">
														<!-- __________db reviews____________________ -->
														<?php
															// include "connect.php";
															$id = $_GET['id_product'];
															mysqli_query($con, "SET NAMES UTF8");
															$sql = "SELECT * FROM `reviews_product` WHERE `id_product` = $id";
															$result = $con->query($sql);
															
															if($result->num_rows > 0)
															{
																while($row = $result->fetch_assoc())
																{
																	// $id_product = $row['id_product'];
																	$id_product = $row['id_product'];
																	
																	$img_comment = $row['img_comment'];
																	$comment = $row['comment'];
																	$date_reviews = $row['date_reviews'];
																	$score = $row['score'];
																	$id_m = $row['id_member'];


																	$sql1 = "SELECT * FROM `member` WHERE `id_member` = $id_m";
																	$result1 = $con->query($sql1);
																	
																	if($result1->num_rows > 0)
																	{
																		while($row1 = $result1->fetch_assoc())
																		{
																			// $id_product = $row['id_product'];
																			$name_member = $row1['name_member'];
																			
																			// $img_product = $row1['img_product'];
																	
																
														?>
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> <?php echo $name_member ; ?></a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> <?php echo $date_reviews ; ?></a></div>
														<!-- <div><a href="#"><i class="fa fa-thumbs-up"></i> มีประโยชน์กับคุณ?</a></div> -->
														<?php

														include('score.php');

														?>

													</div>

													<div class="review-body">
														<p><?php echo $comment ; ?></p>
														<?php
														if ($img_comment==null) {
															# code...
														}else{
															?>
														<img id="myImg" src="images/product/img_comment/<?php echo $img_comment; ?>" alt="ภาพจาก comment" width="100" height="90" />
														<!-- The Modal -->
														<div id="myModal" class="modal">
														  <span class="close">×</span>
														  <img class="modal-content" id="img01">
														  <div id="caption"></div>
														</div>
														<?php
														}?>
													</div><hr>
												<?php } } } }?>
												</div>
											</div>
										</div>
									</div>



								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

<!-- _______________________________________________________________ -->


<!-- _______________________________________________________________ -->


	<!-- section -->
	<div class="sction">
		<div class="cor"style="background: #F8F8F8">
			<!-- container -->
			<div class="container w3-round-large"style="background: white"> 
				<div class="row box-pro-text-heard" >
					<div class="more-detail"><br>
					<h4 style="padding-left:15px;">สินค้าขายดีประจำร้าน</h4>
					
				</div>
				</div>				
				<!-- ROW -->
				<div class="row  " style=" margin-bottom: 30px;" >
					<div class="flex-into" >
				
							<?php
						$sql = "SELECT * FROM `product` WHERE `id_mamber` = $id_member AND `saled` >= 5 ORDER BY saled DESC";
							$result = $con -> query($sql);
						
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
								$na = strlen($row['name_product']);

													$sql1 = "SELECT min(img_products) as `img_products`  FROM `img_product` WHERE `id_product`='$id_product'";
								$result1 = $con->query($sql1);
								
								if($result1->num_rows > 0)
								{
									while($row1 = $result1->fetch_assoc())
									{
										$img_product = $row1['img_products'];

					?>
					
					
						<div class="box-flex w3-card-2">
							<a href="product-page.php?id_product=<?php echo $id_product; ?>&id_member=<?php echo $id_member; ?>">	
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
							</a>
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
									<a href="save_cart1.php?id_product=<?php echo $id_product; ?>&gender=<?php echo '1'; ?>&in=<?php echo '1'; ?>"><i class="fa fa-cart-plus " aria-hidden="true" style="color: orange"></a></i>&nbsp;&nbsp;
									<a href="save_cart1.php?id_product=<?php echo $id_product; ?>&gender=<?php echo '2'; ?>">
									<i class="fa fa-credit-card-alt" aria-hidden="true" style="color: orange"></a></i>&nbsp;&nbsp;
							</div></div>
								
								
								
								<div >
									
								</div>
						
						</div>
					
					<?php } ?>
					<?php } ?>
					<?php } ?>
					<?php } ?>
						
			</div>		
			<!-- container  -->
		</div>	
	</div>
	<!-- section -->

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
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



	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
