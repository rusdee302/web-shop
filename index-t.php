<?php 
	session_start();
    include_once('connect.php');
    mysqli_query($con, "SET NAMES UTF8");
    $id_type=$_REQUEST['id_type'];
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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link type="text/css" rel="stylesheet" href="css-responsive/naber.css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<style>
.mySlides {display:none;}
</style>
<style type="text/css"> html,body,h1,h2,h3,h4,h5{font-family: 'Prompt', sans-serif;}</style>
<body style="background: #F8F8F8">

<!-- <body> -->
	<!-- HEADER -->
	<nav class="navbar navbar-default" style="background-image: linear-gradient(to bottom right,#f53e2d, #ff6533);"  style="width: 100;">
	<header>
		<!-- header -->      
		<div id="header menu-head" >
			<div class="container" >
				<br>
              
				<!-- Account -->
				 <div class="pull-right" >&nbsp;&nbsp;
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
				 <a href=""><font color="white" size="2%">ช่วยเหลือ</font></a>
				</div>
				<!-- /Account -->
					<!-- Account -->
                <div class="pull-right">
                	<font color="white">&nbsp;&nbsp;<i class="fa fa-question-circle-o"></i></font>
				 <a href=""><font color="white" size="2%">แจ้งเตือน</font></a>
				</div>
				<!-- /Account -->

					<!-- Account -->
                <div class="pull-left">
                	<font color="white">&nbsp;&nbsp;</font>
				 <a href=""><font color="white" size="2%">ขาย |</font></a>
				</div>
				<!-- /Account -->
					<!-- Account -->
                <div class="pull-left">
                	<font color="white">&nbsp;&nbsp;</font>
				 <a href=""><font color="white" size="2%">ดาวน์โหลด |</font></a>
				</div>
				<!-- /Account -->
					<!-- Account -->
                <div class="pull-left">
                	<font color="white" size="2%">&nbsp;&nbsp;</font>
				 <a href=""><font color="white">ติตามเราบน</font></a>
				  <a href=""><font color="white"><i class="fa fa-facebook-square"></i></font></a> 
				  <a href=""><font color="white"><i class="fa fa-instagram" aria-hidden="true"></i></font></a> 
				  <a href=""><font color="white"><i class="fa fa-link" aria-hidden="true"></i></font></a> 
				</div>
				<!-- /Account -->
            
              <br>

	<!-- Logo -->

				<div class="pull-left" >

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




	</div>

	<div class="container">
		<div class="w3-content w3-section" style="max-width:200%">
			
		  			<img class="mySlides" src="./img/กางเกง1.jpg" style="width:100%">
		 			

		 			<?php

						//  // $id_member2 = $_GET['id_member'];
						// $sql = "SELECT * FROM `banner` ";
						// $result = $con->query($sql);
						
						// if($result->num_rows > 0)
						// {
						// 	while($row = $result->fetch_assoc())
						// 	{
						// 		$img_banner4 = $row['img_banner4'];
					?> 
		 			<!-- <img class="mySlides" src="./img/<?php echo $img_banner4;?>" style="width:100%"> -->
		 			<?php  ?>

		 			<?php

						 // $id_member2 = $_GET['id_member'];
						// $sql = "SELECT * FROM `banner` ";
						// $result = $con->query($sql);
						
						// if($result->num_rows > 0)
						// {
						// 	while($row = $result->fetch_assoc())
						// 	{
						// 		$img_banner5 = $row['img_banner5'];
					?>

		 			<!-- <img class="mySlides" src="./img/<?php echo $img_banner5;?>" style="width:100%"> -->
		 			<?php  ?>

		</div>
		
	</div>

	<!-- HOME -->
	
	<!-- /HOME -->
	<section class="section-catagory">
		<div class="container"><p></p>
			<div class="row  w3-card" style="background: white"><p></p>
			<p style="font-size: 100%;">&nbsp;&nbsp;&nbsp;แบรนด์แนะนำ</p><hr>
			<!-- <div class="row">
				<div class="col-md-12 line">
					
					<h2 class="title">หมวดหมู่</h2>
				</div>
			</div> -->
			<!-- Row -->
			<!-- Catagory -->
			
				<div class="box-catagory">
				
					<?php


           // mysqli_query($con, "SET NAMES UTF8");
            
            $sql = "SELECT * FROM brand where id_type='1' ";
            $result = $con->query($sql);
            
            if($result->num_rows > 0) 
            {
              while($row = $result->fetch_assoc())
              {
               
                $img_brand = $row['img_brand'];
                
               
              
          ?> 
				
					<!-- <a href="chk-type.php?id_type=<?php echo $id_type ;?>"> --><div class="flex " style="height: 40%; width: 20%;">
						<img src="images/brand/<?php echo $img_brand; ?>" style=" width: 70%;">
					<!-- 	<p class="hide-text-cat"><?php echo $name_type ;?></p> -->
					</div><!-- </a> -->

					

					<?php } ?>
					<?php } ?>
				
				</div>	
			<br>
		<!-- /Catagory -->
		</div><!-- container -->
		
	</section><!-- section -->
	
	


	<!-- section สินค้าแนะนำ-->
	<div class="sction">
		<div class="cor"style="background: #F8F8F8">
			<!-- container -->
			<div class="container"style="background: #F8F8F8"> 
				<div class="row  w3-card" style="background: white">
					<br><h4 style="padding-left:15px;">ขายดี</h4>
				</div>				
				<!-- ROW -->
				<div class="row  " style=" margin-bottom: 30px;" >

					<div class="flex-into">

					<?php
						$id_type=$_REQUEST['id_type'];
						 // $id_member2 = $_GET['id_member'];
						$sql = "SELECT * FROM `product` WHERE `saled` >= 10 and type_product ='$id_type'  ORDER BY `product`.`saled` DESC";
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
								$img_product = $row['img_product'];
								$na = strlen($row['name_product']);
					?>
						
                          
						<a href="product-page.php?id_product=<?php echo $id_product; ?>">		  	
							<div class="box-flex w3-card">
								<span class="first">Hot</span>			  	
								<img class="img-size " src="images/product/<?php echo $img_product; ?>" alt="">
								<!-- f-->
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
								</div>
                                 
								<div class="product-rating review-rating pull-left w3-tiny">&nbsp;&nbsp;
									<i class="fa fa-star" style="color:#FFC300"></i>
									<i class="fa fa-star" style="color:#FFC300"></i>
									<i class="fa fa-star" style="color:#FFC300"></i>
									<i class="fa fa-star" style="color:#FFC300"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
								<div class="pull-right">
								<a href="save_cart1.php?id_product=<?php echo $id_product; ?>&gender=<?php echo '1'; ?>&in=<?php echo '2'; ?>&id_type=<?php echo $id_type; ?>"><i class="fa fa-cart-plus " aria-hidden="true" style="color: orange"></a></i>&nbsp;&nbsp;
								
									<a href="save_cart1.php?id_product=<?php echo $id_product; ?>&gender=<?php echo '2'; ?>">
									<i class="fa fa-credit-card-alt" aria-hidden="true" style="color: orange"></a></i>&nbsp;&nbsp;
							</div>
							</div></div>
						</a>
					<?php } ?>
					<?php } ?>
					</div>				  		
					
				</div>	
				
			</div>		
			<!-- container  -->
		</div>	
	</div>
	<!-- /section สินค้าลดราคา -->
	
	


	<!-- section สินค้าแนะนำ -->
	
	<div class="sction">

		<div class="cor"style="background: #F8F8F8">
			<!-- container -->
			<div class="container"style="background: #F8F8F8"> 
				
				<div class="row w3-card" style="background: white">
					<br><h4 style="padding-left:15px;">เสื้อผ้าแนะนำ</h4>
				</div>		
				<!-- ROW -->
				<div class="row  " style=" margin-bottom: 30px;" >


					<div class="flex-into">

					<?php
					$id_type=$_REQUEST['id_type'];
						$sql = "SELECT * FROM `product` WHERE `saled` <= 10 and type_product ='$id_type' ORDER BY `product`.`saled` DESC";
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
								$img_product = $row['img_product'];
								$na = strlen($row['name_product']);
					?>
						
                          
		  	
							<div class="box-flex w3-card">
								<a href="product-page.php?id_product=<?php echo $id_product; ?>">
								<span class="first">Hot</span>			  	
								<img class="img-size " src="images/product/<?php echo $img_product; ?>" alt="">
								<!-- f-->
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
								</div>
                                 
								<div class="product-rating review-rating pull-left w3-tiny">&nbsp;&nbsp;
									<i class="fa fa-star" style="color:#FFC300"></i>
									<i class="fa fa-star" style="color:#FFC300"></i>
									<i class="fa fa-star" style="color:#FFC300"></i>
									<i class="fa fa-star" style="color:#FFC300"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
								<div class="pull-right">
								<a href="save_cart1.php?id_product=<?php echo $id_product; ?>&gender=<?php echo '1'; ?>&in=<?php echo '2'; ?>&id_type=<?php echo $id_type; ?>"><i class="fa fa-cart-plus " aria-hidden="true" style="color: orange"></a></i>&nbsp;&nbsp;
								
									<a href="save_cart1.php?id_product=<?php echo $id_product; ?>&gender=<?php echo '2'; ?>">
									<i class="fa fa-credit-card-alt" aria-hidden="true" style="color: orange"></a></i>&nbsp;&nbsp;
							</div>
							</div></div>
						
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


	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="clearfix visible-sm visible-xs"></div>
			</div>
			<!-- /row -->
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

	<!-- jQuery Plugins -->


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
<!-- slide -->
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>

</html>