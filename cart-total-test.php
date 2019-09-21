<?php session_start();
      include_once('connect.php');
      $mname=$_SESSION['mname'];
      $id_product = $_REQUEST['id_product']; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP HTML Template</title>

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

<body >
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

	<div class="border-head ">

	</div>

	<!-- cart-total -->
	<!-- head-cart -->
    <div class="container">
		<nav class="navbar navbar-default navbar-cart nav-head-cart">
			<div class="container">
				
					<ul class="nav navbar-nav">
						<!-- <li class=""><a href="#"><input class="check-box" type="checkbox" aria-label="..."></a></li> -->
						<li><a>สินค้า</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right nav-cart">
						<li><a>ราคาต่อชิ้น</a></li>
						<li><a>จำนวน</a></li>
						<li><a>ราคารวม</a></li>
						<li><a>แอคชั่น</a></li>	
					</ul>
				
			</div><!-- /.container-fluid -->
		</nav>
	</div>
	<!-- /head-cart -->
	<!-- content-cart ชื่อร้าน -->
	<div class="container">
		<div class="content-cart-head">
			<!-- <div class="container">
			<a href="#"><input class="check-box" type="checkbox" aria-label="..."></a>
			<a class="" href="#"><span class="name-shop">ชื่อร้าน</span></a>
			</div>	 -->					
		</div>
	</div>
	<!-- /content-cart ชื่อร้าน -->
						<?php
						$sql = "SELECT * FROM `product` WHERE id_product='$id_product'";
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
					?>
	<!-- content-item -->

	<div class="container">
		<div class="content-cart-item">
			<div class="content-cart">
				<div class="container">
					<div class="flex-cart-box">
						<div class="flex-cart-content">
							<!-- <div class="flex-cart-checkbox">
								<a href="#"><input class="check-box" type="checkbox" aria-label="..."></a>
							</div> -->
							<div class="flex-cart-img">
								<img src="https://cf.shopee.co.th/file/269d28e69f832dc2edc1df706abc1148" alt="" class="cart-img">
							</div>
							<div class="flex-cart-name">
								<span class="cart-name-product "	>
									<?php echo "$name_product";?>
								</span>
							</div>
							<div class="include">
								<div class="btn-group">
									<!-- <button class="btn btn-default btn-sm dropdown-toggle btn-type" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">								
										ตัวเลือกสินค้า 
									</button> -->
									<ul class="dropdown-menu">
										s
									</ul>
								</div>
							</div>
							<div class="price">
								<span class="cart-price">
									<?php echo "$price_product";?>
								</span>
							</div>
							 <div class="col-xs-2">
							    <label for="ex1"></label>
							    <input class="form-control" id="ex1" type="text">
							  </div>
							<!-- <div class="count-cart">
								<div class=cart-count>
									<button id="subcart" class="btn-cart">
										<span class="subcart"></span>
									</button> 
									<input type="text" class="textcart" value="1"> 
									<button id="subcart" class="btn-cart">
										<span class="add1"></span>
										<span class="add2"></span>
									</button> 
								</div>
							</div> -->
							<div class="total-price">
								<div class="price-total">
									-
								</div>
							</div>
							<div class="action-cart">
								<a href="#" class="delete-cart">
									ลบ
								</a>
							</div>
						</div>
			

					
						
					</div>
				</div>
			</div>
			<div class="content-cart-item">
				<div class="container">
					adads
				</div>
			</div>
		</div>
	</div>
						<?php } ?>
					<?php } ?>
	<!-- /content-item -->
    <!-- /cart-total -->







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
</body>

</html>
