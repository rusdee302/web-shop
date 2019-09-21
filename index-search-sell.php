<?php 
	session_start();
    include_once('connect.php');
    mysqli_query($con, "SET NAMES UTF8");
    $search=$_REQUEST['search'];
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
	<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
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

	<!-- navbar -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<style type="text/css"> html,body,h1,h2,h3,h4,h5{font-family: 'Prompt', sans-serif;}</style>
<style>
.button {
  background-color: #FFA833; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {padding: 1px 20px;}

</style>

<style>
.button55 {
  background-color: #FF3333; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button11 {padding: 1px 20px;}

</style>

<style>
.button44 {
  background-color: #FFFFFF; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button11 {padding: 1px 20px;}

</style>

<!-- <style>
.button33 {
  background-color: #FF3333; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button11 {padding: 1px 20px;}

</style> -->


<body>
	<!-- HEADER -->
<?php 
include('menu-return/navber.php');
?>

<body style="background: #F8F8F8">
	<!-- HOME -->
	
	<!-- /HOME --><div class="SpPcVL _3XaILN" style="background-image: url(&quot;https://cf.shopee.co.th/file/2f06e7bdfcf2e561cc7e2638a4e347ec_tn&quot;); background-size: contain; background-repeat: no-repeat;"></div>

	
	


	<!-- section สินค้าแนะนำ-->
	
	<!-- /section สินค้าลดราคา -->
	
	
	<div class="w3-container">
		<div class="w3-col s3 ">
			  <p align="center"><i class="fa fa-search" aria-hidden="true"></i> ค้นหาแบบละเอียด</p>
		</div>
		<div class="w3-col s9 " style="background: #EEE9E9"><p></p>
			<p style="padding-left:15px;">
				เรียงโดย : <a href="index-search.php?search=<?php echo $search;?>"><button class="button44 button11"><font color="black">ยอดนิยม</font></button></a>&nbsp;
				<a href="index-search-latest.php?search=<?php echo $search;?>"><button class="button44 button11"><font color="black">ล่าสุด</font></button></a>&nbsp;
				<a href="index-search-sell.php?search=<?php echo $search;?>"><button class="button55 button11">สินค้าขายดี</button></a>&nbsp;
				<a href="index-search-ascending.php?search=<?php echo $search;?>"><button class="button44 button11"><font color="black">ราคาน้อยไปมาก</font></button></a>&nbsp;
				<a href="index-search-much.php?search=<?php echo $search;?>"><button class="button44 button11"><font color="black">ราคามากไปน้อย</font></button></a>&nbsp;
				<!-- <input list="browsers" name="browser" >
<datalist id="browsers">
  <a href="index-search-ascending.php?search=<?php echo $search;?>"><option value="ราคาน้อยไปมาก"></a>
  <a href="index-search-latest.php?search=<?php echo $search;?>"><option value="ราคามากไปน้อย"></a>
 
</datalist> --></p> 
		</div>
	</div><h3></h3>
	<div class="w3-container">
		<div class="w3-col s3 ">
	    <!-- <p align="center"><i class="fa fa-search" aria-hidden="true"></i> ค้นหาแบบละเอียด</p> -->
	    <?php
	      $sql = "SELECT * FROM type_product";
            $result = $con->query($sql);
            
            if($result->num_rows > 0) 
            {
              while($row = $result->fetch_assoc())
              {
                $id_type = $row['id_type'];
                $img_icon = $row['icon'];
                $name_type = $row['name_type'];
                
               
              
          ?> 
				
					<a href="chk-type.php?id_type=<?php echo $id_type ;?>">
						
						<p class="hide-text-cat">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<?php echo $name_type ;?></p>
					</a>

					

					<?php } ?>
					<?php } ?>
	  	</div>
	   <div class="w3-col s9 ">
	
	  
		<div class="cor"style="background: #F8F8F8" >
			<!-- container -->
		


							
				<!-- ROW -->
				<div class="row  " style=" margin-bottom: 30px;" >



					<div class="flex-into">

					<!-- _______________________________________________ -->
					<?php
						$sql = "SELECT * FROM `product` WHERE name_product LIKE '%$search%' ORDER BY saled DESC ";
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
					
				<a href="product-page.php?id_product=<?php echo $id_product; ?>&id_member=<?php echo $id_member; ?>">	
							<div class="box-flex w3-card-2">
						<img class="img-size " src="images/product/<?php echo $img_product; ?>" alt="" >
						


								
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
								</div><br>
                                 
								<div class="product-rating review-rating pull-left w3-tiny">&nbsp;&nbsp;
															<i class="fa fa-star" style="color:#FFC300"></i>
															<i class="fa fa-star" style="color:#FFC300"></i>
															<i class="fa fa-star" style="color:#FFC300"></i>
															<i class="fa fa-star" style="color:#FFC300"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
								<div class="pull-right">
								<a href="save_cart1.php?id_product=<?php echo $id_product; ?>&gender=<?php echo '1'; ?>&in=<?php echo '3'; ?>&search=<?php echo $search; ?>"><i class="fa fa-cart-plus " aria-hidden="true" style="color: orange"></a></i>&nbsp;&nbsp;
								
									<a href="save_cart1.php?id_product=<?php echo $id_product; ?>&gender=<?php echo '2'; ?>">
									<i class="fa fa-credit-card-alt" aria-hidden="true" style="color: orange"></a></i>&nbsp;&nbsp;
							</div></div>
								
								
								
								<div >
									
								</div>
						
						</div>
					</a>
					<?php } ?>
					<?php } ?>
					<!-- _______________________________________________ -->
					</div>
					
				</div>	
				<!-- ROW -->
				
				
			
			<!-- container  -->
		</div>	

	  </div>
	</div>

	<!-- section สินค้าแนะนำ -->
	
	<!-- /section สินค้าแนะนำ -->


	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container"style="background: #F8F8F8">
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
</body>
</body>
</html>