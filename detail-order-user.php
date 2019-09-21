<?php
	session_start();
	include_once('connect.php');
	$id_order = $_GET['id_order'];
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
				<h3>รายการ</h3>
				  <hr>
				 <!--  สถานะการจัดส่ง : <br> -->
				  (จัดส่งภายในเจ็ดวันหลังสถานะเปลียเป็นส่ง)
				  <div class="row">
				  	      
					  <table class="table table-bordered">
					   		<thead>
                                    <tr class="info">
                                        <th class="text-center">ID</th>
                                        <th class="text-center">รายการ</th>
                                        <th class="text-center">ราคาต่อชิ้น</th>
                                        <th class="text-center">จำนวน</th>
                                        <th class="text-center">ราคารวม</th>
                                        <th class="text-center">สินค้า</th>
                                        <th class="text-center">reviews</th>
                                    </tr>
                            </thead>
                            <!-- ___________________________db ditail bill____________________________ -->
                  <?php
            
            


            mysqli_query($con, "SET NAMES UTF8");
            
            $sql = "SELECT * FROM detail_bill WHERE id_member='$id_member' and id_order = '$id_order'";
            $result = $con->query($sql);
            
            if($result->num_rows > 0) 
            {
              while($row = $result->fetch_assoc())
              {
                $id_product = $row['id_product'];
                $qty_product = $row['qty_product'];
                $amounts = $row['amounts'];
                $status_admin_send = $row['status_admin_send'];

            


              
          ?>

          <tr>
            <?php
                                       $sql1 = "SELECT * FROM product WHERE id_product='$id_product'";
                                      $result1 = $con->query($sql1);
                                      
                                      if($result1->num_rows > 0) 
                                      {
                                        while($row1 = $result1->fetch_assoc())
                                        {
                                          $name_product = $row1['name_product'];
                                          $price_product = $row1['price_product'];
                                         
          ?>
                                      <td><img src="images/product/<?php echo $row1['img_product'];?>" height="50" width="50"></td>
                                      <td><?php echo $row1['name_product'];?></td>
                                      <td><?php echo $row1['price_product'];?></td>
                                       <?php } ?>

                                      <?php } ?>  
                                      <td>
                                        <?php echo $row['qty_product'];?>
                                        </div>
                                      </td>
                                      <td><?php echo $row['amounts'];?></td>
                                      <td><?php 
                                      		if($status_admin_send==0){
                                      			echo "แพ็กของ";
                                      		}else{
                                      			echo "ส่งแล้ว";
                                      		}
                                      	
                                      	?>
                                      </td>
                                      <td><center><a href="reviews.php?id_product=<?php echo $id_product?>">reviews</a></center></td>
                                     
  
            <?php } ?>

          <?php } ?>
                            <!-- _________________________/db detail bill________________________ -->
					  </table>
					  
					  <table class="table table-bordered">
					  	   <!-- ___________________________db bill_product______________________ -->
					  	   <?php
					  	     mysqli_query($con, "SET NAMES UTF8");
					            $sql = "SELECT * FROM `bill_product` WHERE id_member='$id_member' and id_order='$id_order'  "; 
					            $result = $con->query($sql);

					            
					            if($result->num_rows > 0)
					            {
					              while($row = $result->fetch_assoc())
					              {
					              	$shipping = $row['shipping'];
					                $total_price = $row['total_price'];

					                $sum_price=$total_price+$shipping
					               
					         ?>
					  	<tr>
					  		<th>ค่าจัดส่ง</th>
					  		<th class="text-center"><?php echo $shipping; ?></th>
					  	</tr>
					  	<tr class="active">
					  		<th>ราคารวมทั้งหมด</th>
					  		<th class="text-center"><?php echo $sum_price; ?></th>
					  	</tr>
					  	     		<?php } ?>
		                    	<?php } ?>
					  		<!-- ________________________/db bill_product_______________________ -->
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
