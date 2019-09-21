<?php session_start();
      include_once('connect.php');
              unset($_SESSION["amoun"]);
      unset($_SESSION["qty"]); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP</title>
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
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- header -->
		<div id="header menu-head">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
					<a class="logo" href="index.php">
							<img src="./img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Enter your keyword">
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
							<!-- Account -->
							<?php
								    if (isset($_SESSION['mname'])=='') { 
										include('head-befor.php'); 
									  }else{
										include('head-after.php');
										
									  }
								?>
						<!-- /Account -->

					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<div class="border-head">

	</div>

	

	
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-12">
						<div id="product-main-view">
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
										
										$img_product = $row['img_product'];
										
									
							?>
							<!-- <img src="images/product/<?php echo $img_product;?>"  width="20%"> -->
							

						<div class="col-md-4">
											<h4 class="text-uppercase">เขียนรีวิวของคุณ</h4>
											<p>รีวิวสินค้า</p>
											<form name="add-product" method="POST" action="save-reviews.php?id_product=<?php echo $id_product ;?>" class="review-form" enctype="multipart/form-data">
												<img src="images/product/<?php echo $img_product; ?>"  alt="your image" width="100" height="90" />
												<?php echo $name_product; ?><hr>
												
												 <img src="images/product/<?php echo $img_comment; ?>" id="blah1" alt="Snow" style="width:50%;max-width:50px" />
												<input name="img_comment" type="file" onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])"><br><br>
												
												<div class="form-group">
													<textarea name="comment" class="input" placeholder="Your review"></textarea>
												</div>
												<div class="form-group">
													<div class="input-rating">
														<strong class="text-uppercase">คะแนน: </strong>
														<div class="stars">
															<input type="radio" id="star5" name="score" value="5" /><label for="star5"></label>
															<input type="radio" id="star4" name="score" value="4" /><label for="star4"></label>
															<input type="radio" id="star3" name="score" value="3" /><label for="star3"></label>
															<input type="radio" id="star2" name="score" value="2" /><label for="star2"></label>
															<input type="radio" id="star1" name="score" value="1" /><label for="star1"></label>
														</div>
													</div>
												</div>
												<button class="primary-btn">Submit</button><br><br><br>
											</form>
										</div>
						
							<?php } ?>
							<?php } ?>
						</div>
						<!-- <div style="margin-top:10px;">
									<strong>favorite(89) </strong>
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<strong>แชร์ : </strong>
									<button class="main-btn icon-btn"><i class="fa fa-facebook"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-twitter"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-google-plus"></i></button>
								</div> -->
					</div>
					
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="sction">
		<div class="cor">
			<!-- container -->
			
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

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
