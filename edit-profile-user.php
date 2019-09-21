<?php 
session_start();
include_once('connect.php');
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

<?php
	$id_mem = $_GET['id_member'];
	$sql ="SELECT * FROM `member` WHERE `id_member` = $id_mem";
	$result = $con->query($sql) or die("Error in query: $sql " . mysqli_error($con));

	if($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc()) 
		{
			# code...
			$name = $row['name_member'];
			$email = $row['email_member'];
			$gender = $row['gender_member'];
			$address = $row['address_member'];
			$tel = $row['phone_member'];
			$img = $row['img_member'];
		}
	}
?>

<div class="container">
			<h1>Edit Profile</h1>
			  <hr>
			  <div class="row">
					<!-- left column -->
					<div class="col-md-3">
					  <div class="text-center">
					  <form class="form-horizontal" role="form" method="POST" action="chk-edit-profile.php?id_member=<?php echo $id_mem; ?>" enctype="multipart/form-data">
						<img src="images/member/<?php echo $img; ?>" class="img-circle avatar-manager" alt="avatar">
						<h6>เปลี่ยนรูปประจำตัว</h6>
						<input type="file" class="form-control" name="img">
					  </div>
					</div>
					<div class="col-md-9 personal-info">
						<div>
							<label class="col-lg-2 control-label"></label>
							<h3>แก้ไข/อัพเดตข้อมูล</h3>
						</div>
						
								<div class="form-group">
									<label class="col-lg-3 control-label">ชื่อ-นามสกุล:</label>
									<div class="col-lg-8">
										<input name="name" class="form-control" type="text" value="<?php echo $name; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">อี-เมลล์:</label>
									<div class="col-lg-8">
										<input name="email" class="form-control" type="text" value="<?php echo $email; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">เพศ:</label>
									<div class="col-lg-8">
										<select name="gender">
											<option value="ชาย">ชาย</option>
											<option value="หญิง">หญิง</option>
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-3 control-label">ที่อยู่:</label>
									<div class="col-lg-8">
										<input name="address" class="form-control" type="text" value="<?php echo $address; ?>">
									</div>
									</div>
								<div class="form-group">
								<label class="col-lg-3 control-label">เบอร์โทรศัพท์:</label>
								<div class="col-lg-8">
									<input name="tel" class="form-control" type="text" value="<?php echo $tel; ?>">
								</div>
								</div>
								
								<div class="form-group">
								<label class="col-md-3 control-label"></label>
								<div class="col-md-8">
									<input type="submit" class="btn btn-success" value="บันทึกการเปลี่ยนแปลง">
								</div>
								
								</div>
								
							</form>
						
						</div>
				</div>	
	</div>



</div>
	<!-- /HOME -->
<div class="border-edit">

</div>

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
</body>

</html>