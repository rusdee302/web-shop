<?php 
	session_start();
    include_once('connect.php');
    mysqli_query($con, "SET NAMES UTF8");
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

	<!-- button -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <!-- แถบเมนู -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>


.sidenav {
  width: 280px;
  position: fixed;
  z-index: 1;
  top: 200px;
  left: 200px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 15px 8px 6px 16px;
  text-decoration: none;
  font-size: 23px;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}

.main {
  margin-left: 90px; /* Same width as the sidebar + left position in px */
  font-size: 16px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


html,body,h1,h2,h3,h4,h5{
	font-family: 'Kanit', sans-serif;
}

h5,h4 {
    text-decoration: underline;
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
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ศูนย์ให้ความช่วยเหลือ - การคืนสินค้าและการคืนเงิน</h2>
		<section class="section-catagory">
		<div class="container">
			<!-- <div class="row">
				<div class="col-md-12 line">
					
					<h2 class="title">หมวดหมู่</h2>
				</div>
			</div> -->
			<!-- Row -->
			<!-- Catagory -->
			
				<div class="box-catagory">


					<div class="row">
                    <?php 
        include('menu-return/menu-return.php');
        ?>
					   
					   <div class="col-sm-8">
						<!-- comment manager -->
								  <h3>การแจ้งเตือนสินค้า</h3><br>
								  ฟังก์ชั่นแชทร้าค้า คือ โปรแกรมทที่อณุญาติใหร้านค้ากับลูกค้า สามารถติดต่อสื่อสารกันได้อย่างร้วดเร็วและมี
ประสิทธิภาพมากขึ้นและสามารถบอกข้อมูลและชี้แจ้งปัญหากับร้าค้าได้<hr>

								
                                 
            <div class="float-right">
                              <span class="text-muted m-r-sm">แสดง 10 จาก 10</span>
                              <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                  <!-- <div class="btn-group">
                                      <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                          <li><a href="#">Social</a></li>
                                          <li><a href="#">Forums</a></li>
                                          <li><a href="#">Updates</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#">Spam</a></li>
                                          <li><a href="#">Trash</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#">New</a></li>
                                      </ul>
                                  </div>
                                  <div class="btn-group">
                                      <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                          <li><a href="#">Work</a></li>
                                          <li><a href="#">Family</a></li>
                                          <li><a href="#">Social</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#">Primary</a></li>
                                          <li><a href="#">Promotions</a></li>
                                          <li><a href="#">Forums</a></li>
                                      </ul>
                                  </div> -->
                              </div>
                              <!-- <div class="btn-group">
                                  <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                  <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                              </div>   -->
                       

					<table class="table tab-border">
                      <tbody>
                         
                                                    <!-- ___________________________db ditail bill____________________________ -->
                                        <?php
                                         $sql3 = "SELECT * FROM return1 WHERE id_member='$id_member' and talk_member='1' ";
                                         $result3 = $con->query($sql3);
                                         
                                         if($result3->num_rows > 0) 
                                         {
                                         while($row3 = $result3->fetch_assoc())
                                         {

                                          $id_return = $row3['id_return'];
                                             $return_options = $row3['return_options'];
                                             $id_detail = $row3['id_detail'];
                                           
                                          
                                    
                                                
                             
                                    
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
                                 <tr class="unread checked">
                              <td class="hidden-xs">
                                  <i class="fa fa-envelope-o icon-state-warning"> </i>
                              </td>
                              
                              <td class="hidden-xs">
                                  <?php echo $name_product ?>
                              </td>
                              <td>
                                  ข้อความจากร้านค้าเกี่ยวกับ (<?php if($return_options==1){ echo 'คืนสินค้า'; }else{ echo 'เปลียนสินค้า';}  ?>)
                              </td>
                              <td>
                              </td>
                              <td>
                                  <a href="chat_member.php?id_return=<?php echo $id_return ?>">ข้อความจากร้าน</a>  (3) 
                              </td>
                              

                          </tr>
                          <?php }} }} }} ?>
                        
                  
                        
                       
                      </tbody>
                  </table>

								  <br><br>
						</div>
						 <div class="col-sm-2"></div>
<!-- comment manager -->
					   
				
					
				</div>
				</div>	
			
		<!-- /Catagory -->
		</div><!-- container -->
		
	</section><!-- section -->
	<!-- <div class="modal-dialog">						
		<div class="modal-header">
		<div class="modal-dialog">						
		<div class=""> -->


<!-- <div class="sidenav">
  <a href="#about">การคืนสินค้า</a>
  <a href="#services">ยืนยันการคืนสินค้า</a>
  <a href="#contact">สอบถามแอดมิน</a>
  <a href="#clients">ช่วยเหลือ</a>
</div> -->



 <div class="main">
  <!-- <center><img src="https://image.flaticon.com/icons/svg/1458/1458260.svg" width="150" height="150"></center>
  <center><h3>การส่งคืนสินค้า</h3></center><br>
  <h4><b>ขั้นตอนและนโยบายการคืนสินค้า</b></h4></p>
  <p>คุณสามารถตรวจสอบนโยบายการคืนสินค้าได้จากสัญลักษณ์ด้านล่างที่จะปรากฏในหน้าแสดงสินค้า ซึ่งระยะเวลาที่คืนสินค้าได้จะนับจากวันที่คุณได้รับสินค้า (รวมวันเสาว์ อาทิตย์ และวันหยุดนักขัตฤกษ์)</p><br>
  <img src="img/t1.png">

  <img src="img/t2.png">

  <br><br>
  <h5>สินค้ายกเว้นที่ไม่อยู่ในเงื่อนไข</h5>
  <p>สินค้าดาว์โหลด เช่น E-Book Ejournals บัตรเติมเงิน ภาพยนต์ เพลง ซอฟแวร์ออนไลน์ ฯลฯ จะไม่อยู่ในเงื่อนไขการคืนสินค้า โดยจะแสดงสัญลักษณ์ด้านล่างที่จะปรากฏในหน้าแสดงสินค้า</p>
  <br>
  <img src="img/t3.png">

  <br><br> -->




		</div>  -->       
        <!-- /div>
 -->

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