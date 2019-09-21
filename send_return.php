
<?php
	session_start();
	include_once('connect.php');
	$id_member=$_SESSION['mid'];
	//$id_return=$_SESSION['id_return'];
	$id_detail=$_REQUEST['id_detail'];
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

    <!-- <link type="text/css" rel="stylesheet" href="css-button/send_return.css" /> -->



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
	<div class="border-head">

	</div>




								<div class="modal-dialog">						
								<div class="modal-header">
								<h3 class="modal-title" >การคืนสินค้า</h3>
								<p>สินค้าทั้งหมดที่ขายบนเว็บไซต์ ได้รับการคุ้มครองตามนโยบายของ <font color="blue"> E-SHOP </font>ลูกค้าสามารถคืนสินค้าภายใน 7 วัน หรือ 14 วันลูกค้าสามารถศึกษาข้อมูลเพิ่มเติมได้ที่ <a href=""><font color="blue"> นโยบายการคืนสินค้า </font></a> หรือ <a href=""><font color="blue"> ศูนย์บรการลูกค้า </font></a>ของเรา </p></div></div>
								<p></p>	
	    						<!-- <center><img src="images/b1.png"></center>	 -->
								</div>
								<div class="modal-dialog">						
		<div class="">

		</div>

							 <form name="chk_add_send_return" method="POST" action="save/chk_add_send_return.php?id_detail=<?php echo $id_detail ?>" enctype="multipart/form-data">
                                <div class="row">
								<div class="col-100"><br>
										<label for="subject">รูปแบบ</label><br>
										<input type="radio" name="return_options" value="1" checked> คืนสินค้า
										<input type="radio" name="return_options" value="2"> เปลี่ยนสินค้า<br><br>
										
									</div>
							      <div class="col-100">
	                                 <table class="table table-bordered">
						   				<thead>
	                                    	<tr class="info">
	                                        	<th class="text-left" width="70%">รายการสั่งซื้อ  <?php include('space/space-1.php'); ?> สาเหตุการคืน </th>
	                                        	 
	                                    	</tr>
	                                    	<?php
	                                    	  mysqli_query($con, "SET NAMES UTF8");
            
									            $sql = "SELECT * FROM detail_bill WHERE id_detail ='$id_detail' ";
									            $result = $con->query($sql);
									            
									            if($result->num_rows > 0) 
									            {
									              while($row = $result->fetch_assoc())
									              {
									              	$id_detail = $row['id_detail'];
									                $id_product = $row['id_product'];
									                $qty_product = $row['qty_product'];
									                $amounts = $row['amounts'];
									                $status_admin_send = $row['status_admin_send'];

									                   $sql1 = "SELECT * FROM product WHERE id_product='$id_product'";
					                                      $result1 = $con->query($sql1);
					                                      
					                                      if($result1->num_rows > 0) 
					                                      {
					                                        while($row1 = $result1->fetch_assoc())
					                                        {
					                                          $name_product = $row1['name_product'];
					                                          $price_product = $row1['price_product'];

									          ?>
	                                    	<td><img src="images/product/<?php echo $row1['img_product'];?>" height="70" width="70"> <?php echo $row1['name_product'];?><?php include('space/space-2.php'); ?> 
	                                    	
	                                    	<select name="return_cause"  style="width: 170px" >
										    <option >-- เหตุผล --</option>
										    <option value="ส่งสินค้าผิด">ส่งสินค้าผิด</option>
										    <option value="เปลียนใจ">เปลียนใจ</option>
										    <option value="สินค้าได้รับความเสียหาย">สินค้าได้รับความเสียหาย</option>
										    <option value="สินค้ามีตำหนิ">สินค้ามีตำหนิ</option>
										    
										    
										  </select> </td>
	                                    	
	                                    	<?php }}}} ?>
	                            		</thead>
	                        		 </table>
				                    </div>
				                </div>

                          


                        

                                <div class="row">
									
							      <div class="col-25">
							        <label for="subject">รายละเอียดเพิ่มเติม</label>
							      </div>
							      <div class="col-75">
							        <textarea id="subject" name="return_detail" placeholder="เช่น ช่วยเพิ่มเสื้อจากขนาดเล็กเป็นใหญ่" style="height:150px"></textarea>
							      </div>
                                  <div>

								  
							      <div class="col-75"><br>
								  <label for="subject">อัพไฟล์รูปที่เสียหาย</label><br>
								  <img id="blah" alt="your image" width="100" height="90" />
            						<input name="img_damaged" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
								 </div>
								<div><br>

							      <p>โดยการส่งแบบฟอร์มนี้ฉันยอมรับว่าฉันได้อ่านและยอมรับ <font color="blue">นโยบายการคืนสินค้า E-SHOP </p>

							       <button class="w3-btn w3-ripple w3-orange">ตกลง</button>
					</font> 
				  </div>
				</div>


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



<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
</html>
