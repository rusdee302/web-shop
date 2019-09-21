<?php session_start();
      include_once('connect.php');
      $mname=$_SESSION['mname'];
      $id_member=$_SESSION['mid'];
      // unset($_SESSION["id_order"]); 
      unset($_SESSION["date_order"]);
      unset($_SESSION["id_order"]); 
     // $price_product=$_SESSION['price_product'];
      // $id_product = $_REQUEST['id_product']; 


            
       //      $sql = "SELECT * FROM `detail_bill`  WHERE id_member='$id_member' ";
       //      $result = $con->query($sql);
            
       //      if($result->num_rows > 0)
       //      {
       //        while($row = $result->fetch_assoc())
       //        {
       //           $_SESSION['id_order'] = $row['id_order'];
                

       //        }
       //      }

            
       // $id_order=$_SESSION['id_order'];         



?>
<style>
body {margin:0;}

.aa {
  list-style-type: none;
  margin: ;
  padding: ;
  overflow: hidden;
  background-color: ;
  position: fixed;
  bottom: 0;
  height: 37%;
  width: 100%;

}


.active {
  background-color: #4CAF50;
}
</style>
<style>
.button {
  background-color: red; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {padding: 10px 45px;}
.button2 {padding: 12px 28px;}
.button3 {padding: 14px 40px;}
.button4 {padding: 32px 16px;}
.button5 {padding: 16px;}

.shadow {
-moz-box-shadow: 5px 5px 5px #ccc;
-webkit-box-shadow: 5px 5px 5px #ccc;
box-shadow: 5px 5px 5px #ccc;
}
</style>



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

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body style="background: #F8F8F8">
  <!-- HEADER -->
<?php 
include('menu-return/navber.php');
?>
  <!-- /HEADER -->


  
  <!-- cart-total -->
  <!-- head-cart -->
    <div class="container" style="background:#F8F8F8">
    <nav class="navbar navbar-default navbar-cart nav-head-cart">

 <div class="container" >
 
        <div class="panel" style="background:#FF753A; color: white; ">
          <div class="panel-body">
          <i class="fa fa-cart-arrow-down fa-2x" aria-hidden="true" ></i>

                                 <tr style="font-size: 17px">
                                  <th>&nbsp;&nbsp;รายการในตะกร้า</th>
                                  <th></th> <div class="pull-right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                  <th>ราคาต่อชิ้น</th>&nbsp;&nbsp;&nbsp;
                                  <th>จำนวน</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <th>ราคารวม</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 
                                  
                                  <th><?php include('tab/tab3.php'); ?>แอคชั่น</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <th></th>
                </tr>
          </div></div>  
        </div>
      </nav>
      </div>

        <?php



            mysqli_query($con, "SET NAMES UTF8");

            //  $sql2 = "SELECT * FROM bill_product WHERE id_member='$id_member' and status_payment='0'";
            // $result2 = $con->query($sql2);
            
            // if($result2->num_rows > 0) 
            // {
            //   while($row2 = $result2->fetch_assoc())
            //   {
            //     $id_order = $row2['id_order'];
               

              
          
            
            $sql = "SELECT * FROM detail_bill WHERE id_member='$id_member' and detail_payment ='0' ";
            $result = $con->query($sql);
            
            if($result->num_rows > 0) 
            {
              while($row = $result->fetch_assoc())
              {
                $id_product = $row['id_product'];
                $qty_product = $row['qty_product'];
                $amounts = $row['amounts'];
                 $id_order = $row['id_order'];
                  $_SESSION['id_order'] = $row['id_order'];

              
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
                               
 

       <div class="container">
 
        <div class="panel">
          <div class="panel-body">
            <!-- <a href="#"> --><!-- <input class="check-box" type="checkbox" aria-label="...">  -->                
                                <tr>
                                  <th style="">ร้าน : PanatShop <i class="fa fa-comments-o" aria-hidden="true" ></i><!-- <i class="fa fa-commenting-o" aria-hidden="true"> --></i></th>

                                
                                  <th></th>
                </tr><hr>
                <table class="table" >
              <thead>
                <tr>
                  <td><!-- <input class="check-box" type="checkbox" aria-label="...">    -->              </td>
                   <td><img src="images/product/<?php echo $row1['img_product'];?>" height="50" width="50"><?php echo $row1['name_product'];?></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>

                                      <td><?php echo $row1['price_product'];?></td>
                                      
                                      <td>
                                        <?php echo $row['qty_product'];?>
                                        </div>
                                      </td>
                                      <td><?php echo $row['amounts'];?></td>
                                     
                                     
                                      <?php
                                        $id_member = $_GET['id_member']; 
                                      ?>
                                      
                                       <td><a href="del_detail_bill.php?del_id=<?php echo $row['id_detail'];?>&id_member=<?php echo $id_member; ?>"
                                      ><button type="button" class="btn btn-warning"></span><i class="fa fa-trash"></i> ลบ</button></a></td> <!--ลบ-->
                                       
                                      
                                    </tr>
                                  </thead>
                                </table>

              <!-- </a> --><hr>

              ส่วนลดค่าจัดส่ง ฿40 เมื่อขั้นต่ำถึง ฿0 เรียนรู้เพิ่มเติม

          </div>
        </div>
      </div>

       <?php } ?>

          <?php } ?>
           <?php } ?>

          <?php } ?><br>

          <div class="aa">
        
           <div class="container ">
         
        <div class="panel ">
          <div class="w3-card-2 w3-round w3-border">
          <div class="panel-body" >

            <!-- <a href="#"> -->สรุปรายการสั่งซื้อ<hr>                
                           

                                   จำนวนสินค้า  <?php
                                        $id_order=$_SESSION['id_order'];
                                              
                                              $sql = "SELECT sum(qty_product) as qty_product  FROM `detail_bill`  WHERE id_member='$id_member' and id_order = '$id_order'";
                                              $result = $con->query($sql);
                                              
                                              if($result->num_rows > 0)
                                              {
                                                while($row = $result->fetch_assoc())
                                                {
                                                  $_SESSION['qty'] = $row['qty_product'];
                                                
                                                 
                                            ?>
                                             <?php echo $row['qty_product'];?>  ชิ้น
                                                       <?php } ?>

                                            <?php } ?></th>
                                  <th></th>
                </tr><br>

                  <tr>
                                    ราคาสินค้าทังหมด : <?php
            
                                      $sql = "SELECT sum(amounts) as amounts  FROM `detail_bill`  WHERE id_member='$id_member' and id_order = '$id_order' ";
                                      $result = $con->query($sql);
                                      
                                      if($result->num_rows > 0)
                                      {
                                        while($row = $result->fetch_assoc())
                                        {

                                        $_SESSION['amoun'] = $row['amounts'];
                                         
                                    ?>
                                     <?php echo $row['amounts'];?>  ฿
                                               <?php } ?>

                                    <?php } ?>
                                  </th>
                                
                </tr>

                <hr>
              <!-- </a> -->
                <tr>
                  <div class="pull-right">
                                  <th>ค่าจัดส่ง 50 บาท</th>
                             
                                    <a href="choice_save_bill.php">
                                      <button class="button button1 w3-round w3-hover-shadow" >ชำระเงิน</button> </a>
                                  </th>
                             
                </tr>
</div>
              </div>
          </div>
        </div>
      </div>
    
    </div><br>


     <!--  <div class="container">
        
          <ul class="nav navbar-nav">
            <li class=""><a href="#"><input class="check-box" type="checkbox" aria-label="..."></a></li> 
            <li><a>สินค้า</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right nav-cart">
            <li><a>ราคาต่อชิ้น</a></li>
            <li><a>จำนวน</a></li>
            <li><a>ราคารวม</a></li>
            <li><a>แอคชั่น</a></li> 
          </ul>
        
      </div> --><!-- /.container-fluid
  
  </div> 
  <!-- /head-cart -->
  <!-- content-cart ชื่อร้าน -->
  <!-- <div class="container" style="background:#F8F8F8" >
    <div class="content-cart-head">
      <div class="container">
      <a href="#"><input class="check-box" type="checkbox" aria-label="..."></a>
      <a class="" href="#"><span class="name-shop">สินค้า</span></a>

      </div>           
    </div>
  </div> -->
  <!-- /content-cart ชื่อร้าน -->
  <!-- <div class="row">
     <div class="col-sm-12" > 
      <div class="container">
 
        <div class="panel panel-default">
          <div class="panel-body">
            <a href="#"><input class="check-box" type="checkbox" aria-label="..."></a>
          </div>
        </div>
      </div>
      <br>
    </div>
   </div> -->

    

<!-- <div class="row">
     <div class="col-sm-12" > <div class="container">
 
  <div class="panel panel-default">
    <div class="panel-body">A Basic Panel</div>
  </div>
</div><br></div>
   </div> -->

  

          </div>
        </div><br><br><br><br><br><br><br><br><br>

      
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
