<?php
	session_start();
	include_once('connect.php');
	$id_member=$_SESSION['mid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->

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

	<!-- HOME -->
<div id="home">
	<div class="container">
				<h3>ประวัติการสั่งซื้อ</h3>
				  <hr>
				  <div class="row">
				  	      
					  <table class="table table-bordered">
					   		<thead>
                                    <tr class="info">
                                        <th class="text-center">ID</th>
                                        <th class="text-center">วันที่</th>
                                        <th class="text-center">รายละเอียด</th>
                                    </tr>
                            </thead>
                            <!-- _______________________echo db bill_product_________________________ -->
                              <?php

					                
					            mysqli_query($con, "SET NAMES UTF8");
					            $sql = "SELECT * FROM `bill_product` WHERE id_member='$id_member' order by date_order DESC "; 
					            $result = $con->query($sql);

					            
					            if($result->num_rows > 0)
					            {
					              while($row = $result->fetch_assoc())
					              {
					              	$id_order = $row['id_order'];
					                $date_order = $row['date_order'];

						       ?>
		                            <tr class="text-center">
		                             	<td><?php echo $id_order ?></td>
		                             	<td><?php echo $date_order ?></td>
		                             	<td><a href="detail-order-user.php?id_order=<?php echo $id_order; ?>" class="btn btn-link">รายละเอียด......</a></td>
		                            </tr>

		                          <?php } ?>
		                        <?php } ?>

                            <!-- ______________________/echo db bill_product__________________________ -->
					  </table>
					  <a href="index.php?id_member=<?php echo $id_member; ?>" class="btn btn-info" >กลับหน้าหลัก</a>
					  <a href="order-list-user.php?id_member=<?php echo $id_member; ?>" class="btn btn-warning" >ประวัติการสั่งซื้อ</a>
					  <a href="profile.php?id_member=<?php echo $id_member; ?>" class="btn btn-success" >บัญชีของฉัน</a>
				  </div>
	</div>
</div>
	<!-- /HOME -->
<div class="border-edit"></div>

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
	<script src="script.js"></script>
</body>

</html>
