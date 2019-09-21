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
										include('head-befor-manager.php'); 
									  }else{
										include('head-after-manager.php');
										
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

	
	
	<!-- section สินค้าแนะนำ -->
	<div class="sction">
		<div class="cor">
			<!-- container -->
			<div class="container"> 
				<div class="row box-pro-text-heard">
					<h2 style="padding-left:15px;">
					    <a name="product">แก้ไข/อัพเดต สินค้า</a>
				    </h2>
                    <?php
                        $id_mem = $_GET['id_member'];
                        $id_product = $_GET['id_product'];

                        $sql = "SELECT *  FROM `product` WHERE `id_product` = $id_product";
                        $result = $con->query($sql);

                        if($result->num_rows > 0)
                        {
                            while ($row = $result->fetch_assoc()) 
                            {
                                $id_product = $row['id_product'];
                                $name_product = $row['name_product'];
                                $type_product = $row['type_product'];
                                $price_product = $row['price_product'];
                                $stock = $row['stock'];
                                $saled = $row['saled'];
                                $detail_product = $row['detail_product'];
                                $img_product = $row['img_product'];
                                $date_product = $row['date_product'];
                                $id_member = $row['id_mamber'];
                            }
                        }
                    ?>
				</div>
                
                <form name="update-product" method="POST" action="chk-update-product.php?id_member=<?php echo $id_mem; ?>&id_product=<?php echo $id_product; ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" class="form-control" id="id" value="<?php echo $id_product; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="name">ชื่อสินค้า</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?php echo $name_product; ?>">
                    </div>
                    <div class="form-group">
                        <label for="product_type">ประเภท/หมวดหมู่</label>
                        <select name="type" id="product_type" class="form-control">
                            <?php
                                $sql2 = "SELECT * FROM `type_product`";
                                $result2 = $con->query($sql2);
                                
                                if ($result2->num_rows > 0) 
                                {
                                    while ($row2 = $result2->fetch_assoc()) 
                                    {
                                        $id_type = $row2['id_type'];
                                        $name_type = $row2['name_type'];
                                
                            ?>
                            <option value="<?php echo $id_type; ?>"><?php echo $name_type; ?></option>

                            <?php
                            }
                            }
                            ?>
                        </select>
				    </div>
                    <div class="form-group">
                        <label for="Price">ราคา</label>
                        <input type="number" name="price" class="form-control"  value="<?php echo $price_product; ?>">
                    </div>
                    <div class="form-group">
                        <label>เพิ่มจำนวนสินค้า (จำนวนคงเหลือปัจจุบันคือ <u class="text-danger"><?php echo $stock; ?> </u>ชิ้น)</label>
                        <input type="number" name="stock" class="form-control">
                        <input type="hidden" name="oldstock" class="form-control" value="<?php echo $stock; ?>">
                    </div>
                    <div class="form-group">
                        <label>จำนวนที่ขายไป</label>
                        <input type="number" name="saled" class="form-control" value="<?php echo $saled; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="product_detail">ขอมูลสินค้า</label>
                        <textarea name="detail" class="form-control" rows="5" id="product_detail"><?php echo $detail_product; ?></textarea>
				    </div>
                    <div class="form-group">
                        <label for="img">แก้ไขรูปภาพ</label>
                        <input type="file" name="img" id="img">
                    </div>
                    <div class="form-group">
                        <img class="img-edit-product" src="images/product/<?php echo $img_product; ?>" />
                    </div>
                    <input type="hidden" name="imgName" value="<?php echo $img_product; ?>">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">แก้ไข/อัพเดต</button>
                    </div>
                </form>
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
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<!-- <a class="logo" href="#">
		            <img src="./img/logo.png" alt=""> -->
		          <!-- </a> -->
						</div>
						
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					 
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- <h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shiping & Return</a></li>
							<li><a href="#">Shiping Guide</a></li>
							<li><a href="#">FAQ</a></li>
						</ul> -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- <h3 class="footer-header">Stay Connected</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
						<form>
							<!-- <div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Join Newslatter</button> -->
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
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
</body>

</html>
