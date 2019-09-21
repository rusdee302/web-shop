
<?php
	session_start();
	include_once('connect.php');
	 mysqli_query($con,"SET NAMES UTF8");
	$id_member=$_SESSION['mid'];
	//$id_return=$_SESSION['id_return'];
	$id_return=$_REQUEST['id_return'];
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

	<!-- button -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

html,body,h1,h2,h3,h4,h5{
	font-family: 'Kanit', sans-serif;
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
	<div class="border-head"></div>
	<div class="modal-dialog">						
		<div class="modal-header">
        <h2 class="modal-title" >การคืนสินค้า</h2>
		<p>สินค้าทั้งหมดที่ขายบนเว็บไซต์ ได้รับการคุ้มครองตามนโยบายของ <font color="blue"> E-SHOP </font>ลูกค้าสามารถคืนสินค้าภายใน 7 วัน หรือ 14 วันลูกค้าสามารถศึกษาข้อมูลเพิ่มเติมได้ที่ <a href=""><font color="blue"> นโยบายการคืนสินค้า </font></a> หรือ <a href=""><font color="blue"> ศูนย์บรการลูกค้า </font></a>ของเรา </p></div></div>
		<p></p>	
	    <center><img src="images/b1.png"></center>
		<div class="modal-dialog">						
		<div class="">

		</div>
        
          <div class="row">
	      <div class="col-100">

	        <!-- <label for="subject">รายละเอียดเพิ่มเติม</label>
	      </div>
	      <div class="col-75">
	        <textarea id="subject" name="subject" placeholder="เช่น ช่วยเพิ่มเสื้อจากขนาดเล็กเป็นใหญ่" style="height:200px"></textarea>
	      </div>
          <div> -->
		  
	      <h5><b>2. โปรดกรอบข้อมูล</b></h5>
		  
		  <form name="return_cmf_product.php" method="post" action="save/chk-upde-send_return2.php?id_return=<?php echo $id_return; ?>" enctype="multipart/form-data">
		  			
					  <div class="form-group">
					<label for="wpd_name">ระบุบ : ชื่อผู้ส่งในไปรษณีย์</label>
					<input type="text" name="wpd_name" class="form-control" id="wpd_name" placeholder="ชื่อผู้ส่งในไปรษณีย์" required="">
				    </div>

					<div class="form-group">
					<label for="wpd_number">ระบุบ : เลขผู้ส่งในไปรษณีย์</label>
					<input type="text" name="wpd_number" class="form-control" id="wpd_number" placeholder="เลขผู้ส่งในไปรษณีย์" required="">
				    </div>

					  <div class="form-group">
					<label for="account_name">ระบุบ : ชื่อ</label>
					<input type="text" name="account_name" class="form-control" id="product_name" placeholder="ชื่อ" required="">
				    </div>
					
					
				    <div class="form-group">
					<label for="account_number">ระบุบ : เลขที่บัญชี</label>
					<input type="text" name="account_number" class="form-control" id="account_number" placeholder=" เลขที่บัญชี " required="">
					</div>

					<div class="form-group">
					<label for="bank_name">ระบุบ : ชื่อธนาคาร</label>
					<input type="text" name="bank_name" class="form-control" id="bank_name" placeholder="ชื่อธนาคาร" required="">
					</div>

					<div class="form-group">
					<label for="adress_bank">ระบุบ : ที่อยู่ธนาคาร</label>
					<input type="text" name="adress_bank" class="form-control" id="adress_bank" placeholder="ที่อยู่ธนาคาร" required="">
					</div>

<!-- <input type="submit"> -->

			
			</div>						    
          
				<br>	<div><br>	<br>	
             <h5><b>3. กรุณาเลือกตัวแทนการจัดส่งสินค้าคืน</b></h5>
             <p>คุณสามารถกรอกแบบฟอร์มการคืนสินค้าของคุณไปที่สาขาของตัวแทนขนส่งของเราเพื่อการคืนสินค้าโดยไม่มีค่าใช้จ่ายใดๆ</p>
		   
		    <div class="payment-method">
	        <label for="card" class="method card">
	          <div class="card-logos">
	            <img src="http://jobparttimes.com/wp-content/uploads/2018/07/Screen-Shot-2018-07-19-at-6.13.05-PM.png" width="110" height="100">		
	        </div>
	          <div class="radio-input">
	            <input id="ktb" type="radio" name="payment" value="กรุงไทย">
	            <a>ดูสถานที่</a>
	          </div>
	        </label><br><br>
	        <div class="payment-method">
	        <label for="kerry" class="method kerry">
	          <img src="https://cdn6.aptoide.com/imgs/b/e/b/beb8a05a76cb21cff40bf6f03137b118_icon.png?w=256" width="100" height="80">
	          <div class="radio-input">
	            <input id="kerry" type="radio" name="payment" value="kerry">
	          <a>ดูสถานที่</a>
	          </div>
	        </label>
	      </div><br><br><br>

	      <p>โดยการส่งแบบฟอร์มนี้ฉันยอมรับว่าฉันได้อ่านและยอมรับ <font color="blue">นโยบายการคืนสินค้า</font>  E-SHOP </p>

	       <!-- <a href="profile.php?id_member=<?php echo $id_member; ?>" class="w3-btn w3-ripple w3-orange" >ตกลง</a> -->
		   <button  type="submit" class="w3-btn w3-ripple w3-orange">ตกลง</button>
</div>
</form><br><br><br>


	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>
	<script src="script.js"></script>
</body>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>
</html>
