<?php
	session_start();
	include_once('connect.php');
	 mysqli_query($con,"SET NAMES UTF8");
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

	<link type="text/css" rel="stylesheet" href="css-button/button1.css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<style type="text/css">
body {
	font-family: 'Prompt', sans-serif;
}

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
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 10px;
  border: 1px solid #888;
  width: 30%;
  height: 90%
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

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
				<h3>รายการที่ผ่านการตอบรับ</h3><br><br>
				<div class="row">
					<!-- <div class="col-md-1"></div> -->
					<div class="col-md-12"><a href="return-past.php">สินค้าที่ผ่านการตอบรับ</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="return-refund.php">รับเงินคืน</a></div>
					<!-- <div class="col-md-2">สินค้าที่ยังไม่ได้ส่ง</div> -->
				</div>

				  <hr>
				  <small><p>(สินต้าที่ผ่านการตอบรับจากร้านค้า สามารถส่งสินค้าคืนและรอรับเงินคืนจากทางเว็บ)</p></small>
				  <div class="row">
				  	      
					  <table class="table table-bordered">
					   		<thead>
                                    <tr class="info">
                                        <th class="text-left">รายการสั่งซื้อ</th>
                                        
                                        <th class="text-center">จำนวน</th>
                                        <!-- <th class="text-center">ราคารวม</th> -->
                                       
                                        <th class="text-center">คืนสินค้า</th>
                                    </tr>
                            </thead>
                                 <!-- ___________________________db ditail bill____________________________ -->
                                                 <?php
                                         $sql3 = "SELECT * FROM return1 WHERE id_member='$id_member' and wpd_number !='0'  ";
                                         $result3 = $con->query($sql3);
                                         
                                         if($result3->num_rows > 0) 
                                         {
                                         while($row3 = $result3->fetch_assoc())
                                         {

                                          $id_return = $row3['id_return'];
                                             $return_options = $row3['return_options'];
                                             $id_detail = $row3['id_detail'];
                                            $stutas_refund = $row3['stutas_refund'];

	                                          //   $sql4 = "SELECT * FROM pay_back WHERE id_return='$id_return' ";
		                                         // $result4 = $con->query($sql4);
		                                         
		                                         // if($result4->num_rows > 0) 
		                                         // {
		                                         // while($row4 = $result4->fetch_assoc())
		                                         // {

		                                         //  $img_bankpayback = $row4['img_bankpayback'];
		                                          
                                          
                                    
                                                
                             
                                    
                                                    $sql2 = "SELECT * FROM detail_bill WHERE id_detail='$id_detail' and status_admin_send =1 ";
                                                    $result2 = $con->query($sql2);
                                                    
                                                    if($result2->num_rows > 0) 
                                                    {
                                                    while($row2 = $result2->fetch_assoc())
                                                    {
                                                        $id_detail = $row2['id_detail'];
                                                        $id_product = $row2['id_product'];
                                                      
                                                        $qty_product = $row2['qty_product'];
                                                        $amounts = $row2['amounts'];
                                                        $status_admin_send = $row2['status_admin_send'];

                                    
                                        

                                    
                                ?>

                                
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
                                <tr>
                                      <td><img src="images/product/<?php echo $row1['img_product'];?>" height="50" width="50"> <?php echo $row1['name_product'];?></td>
                                      
                                      
                                       
                                      <td>
                                        <center><?php echo $row2['qty_product'];?></center>
                                        </div>
                                      </td>
                                     <!--  <td><?php echo $row['amounts'];?></td> -->
                                    
                                      <td><center><?php 
                                      if($stutas_refund==0){
                                      	echo 'กำลังดำเนินการโอนเงินคืน';
                                      	}else{
                                      		

                                      		# code...
                                      		?><br>
                                      		<a href="#" id="myBtn"><font color="green"><U><?php echo "E-SHOP โอนเงินเรียบร้อย";?></U></font></a>


                                            <!-- Popups แสดงสลิป -->
												<div id="myModal" class="modal">

												  <!-- Modal content -->
												  <div class="modal-content">
												    <span class="close">&times;</span>
												    <font size="5" color="green">
												    <p> สลิปการโอนเงิน</p></font>

												     <div class="w3-container w3-border w3-large">
                                                     <img src="img/img_payback/<?php echo $img_bankpayback ;?>" style="width:90%; height: 80%;">
												     </div>
												  </div>

                                             <!-- Popups แสดงสลิป -->


                                      		<?php
                                      	}
                                      ?></center></td>
                                      </tr>
                                       <?php } ?>

          <?php } ?> 
                                     
  
            <?php } ?>

          <?php } ?>
          <?php } ?>

         

          <?php } ?>

                                      
                            <!-- _________________________/db detail bill________________________ -->
					  </table>
					  <a href="return-detail.php?id_member=<?php echo $id_member; ?>" class="btn btn-info" >ย้อนกลับ</a>
					 <!--  <a href="order-list-user.php?id_member=<?php echo $id_member; ?>" class="btn btn-warning" >ประวัติการสั่งซื้อ</a>
					  <a href="profile.php?id_member=<?php echo $id_member; ?>" class="btn btn-success" >บัญชีของฉัน</a> -->
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
	<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

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
