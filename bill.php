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
  <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<style type="text/css">
 /* googlo font*/
 html,body,h1,h2,h3,h4,h5{
  font-family: 'Prompt', sans-serif;
 }

 .Fixed {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  position: fixed;
  bottom: 0;
  width: 84.5%;
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
  padding: 20px;
  border: 1px solid #888;
  width: 52%;
}

</style>

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

 <div class="container">
        <div class="panel">
          <div class="panel-body">
          <?php
             mysqli_query($con, "SET NAMES UTF8");
             $sql1 = "SELECT * FROM member WHERE id_member='$id_member'";
            $result1 = $con->query($sql1);
            
            if($result1->num_rows > 0) 
            {
              while($row1 = $result1->fetch_assoc())
              {
                $phone_member = $row1['phone_member'];
                $address_member = $row1['address_member'];
                ?>
            <h4  style="color: orangered"><i class="fa fa-map-marker"></i> ที่อยู่ในการจัดส่ง</h4>
            <br>
            <p><b>qq (+66)  <?php echo $phone_member ;?></b>
             &nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;
             <?php echo $address_member;?>  
             <a href="#" id="myBtn"> 
                <font color="DodgerBlue">&nbsp;&nbsp;&nbsp;&nbsp;
                  <font color="grey">ค่าเริ่มต้น</font>&nbsp;&nbsp;&nbsp;&nbsp;
                   <u>แก้ไข</u>
                </font>
              </a></p>  <!--  number_phone -->

            <!-- _________________________popup address___________________________________ -->

          <!-- The Modal -->
          <div id="myModal" class="modal" >

            <!-- Modal content -->
            <div class="modal-content" style="background-image: linear-gradient(to bottom right,#FBFBFB,#FFFFFF);">
              <span class="close">&times;</span>
              <h4>เปลี่ยนสถานที่จัดส่ง</h4>
               <form name="add-product" method="POST" action="payment/save_transport.php?id_member=<?php echo $id_member ;?>" enctype="multipart/form-data">
               <textarea name="address_member" rows="10" cols="70" >

               </textarea><br><br>
                <div class="w3-container">
                <button class="w3-button w3-round-small w3-card" style="background-image: linear-gradient(to bottom right,#1D976C,#93F9B9);">
                  <font color="white">บันทึกการเปลี่นแปลง</font></button>
                </form>
                    </div></div>

                  </div><br> 
          <!-- _________________________popup address___________________________________ -->
   
          </div>
        </div>
      </div>   </a>
       <?php } ?>
          <?php } ?>

          <!-- _______________________________หัวตาราง----------------------------------- -->
             <div class="container">
 
   
 <div class="w3-panel w3-light-grey w3-leftbar">
  <br>
              <tr><div class="pull-left">
                 <h4>สั่งซื้อสินค้าแล้ว</h4>
                </tr>  
            </div>
</div>         
      </div>
      <!-- _______________________________________________________________________________ -->
            <?php



            mysqli_query($con, "SET NAMES UTF8");

      
               

              
          
            
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

                  $ss = $qty_product * $price_product
                                         
          ?>
       <div class="container">
       
        <div class="panel">
          <div class="panel-body">

              <div class="pull-left">
                 
             <p>comfashionstore | <i class="fa fa-comments-o" aria-hidden="true" style="color: green ">  แชทเลย</i></p>
                <th></th>
                </tr><br>
               

                <table class="table">
              
     
                     <div class="pull-left">
                 <h4>&nbsp;&nbsp;<img src="images/product/<?php echo $row1['img_product'];?>" height="50" width="50">&nbsp;&nbsp;
                  <?php echo $name_product ;?>
               </h4><br>
                 </div>
                   
                    <div class="pull-left"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <font color="grey">ราคาต่อหน่วย</font> </div>
                 <div class="pull-left"><br>&nbsp;:
                  <font color="grey">฿<?php echo $price_product ;?></font>
                </div>

                    <div class="pull-left"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <font color="grey">จำนวน</font> </div>
                 <div class="pull-left"><br>&nbsp;:
                  <font color="grey"><?php echo $qty_product ;?> ชิ้น</font>
                </div>

                    <div class="pull-left"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <font color="grey">รายการย่อย</font> </div>
                 <div class="pull-left"><br>&nbsp;:
                    <font color="grey">฿<?php echo $price_product ;?></font>
                </div>
                  
                  
                
                </table>
              </a>
            

             <div class="pull-left"><hr>
             ข้อความ    <input id="myInput" type="text" name="myCountry" style="width:250px; height: 35px " placeholder="(ไม่บังคับ)ฝากข้อความไว้กับผู้ขาย" class=" w3-light-grey">
                    <input class="w3-button w3-teal w3-round" type="submit" style="width:50px; height: 35px ;" >
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="pull-right">
                 ราคารวม <font color="OrangeRed ">฿<?php echo $ss ?>.00</div></font>
                  </form>
                </div>
          </div>
        </div>
      </div> </div>
    <?php }}}} ?>

      
          
           <div class="container">
  <img src="img/5555.jpg" width="100%">
        <div class="panel">
          <div class="panel-body">

            <h4>วิธีการชำระเงิน</h4>
            <button class="w3-button w3-light-grey w3-round"> Air Pay Wallet</button>
            <button class="w3-button w3-light-grey w3-round">บัตรเครดิต/บัตรเดบิต</button>
            <button class="w3-button w3-light-grey w3-round">iBanking</button>
            <button class="w3-button w3-blue w3-round">ชำระผ่าน ATM</button>
            <button class="w3-button w3-light-grey w3-round">โอน/ชำระผ่านช่องทางธนาคาร</button>
            <button class="w3-button w3-light-grey w3-round">ชำระเงินปลายทาง</button>
             <br>
             <br>
                           
             <tr> <label class="container">
              <div class="w3-container w3-border w3-large w3-hover-shadow" style="width:23%;">
              <p class="checkbox-list bank-name"> <input type="radio" checked="checked" name="radio"> 
                <img class="checkbox-list logo"style="width:15%;"  src="https://laz-img-cdn.alicdn.com/tfs/TB1W2n0ncrI8KJjy0FhXXbfnpXa-80-80.png">ธนาคารไทยพาณิชย์ </p></div><br>
             </tr><span class="checkmark"></span></label>

             <tr> <label class="container">
              <div class="w3-container w3-border w3-large w3-hover-shadow" style="width:23%;">
              <p class="checkbox-list bank-name">  <input type="radio" checked="checked" name="radio">
                <img class="checkbox-list logo"style="width:15%;"  src="https://laz-img-cdn.alicdn.com/tfs/TB1Ufn0ncrI8KJjy0FhXXbfnpXa-80-80.png">ธนาคารกรุงไทย </p></div><br>
             </tr><span class="checkmark"></span></label>


            <tr> <label class="container">
              <div class="w3-container w3-border w3-large w3-hover-shadow" style="width:23%;">
              <p class="checkbox-list bank-name">  <input type="radio" checked="checked" name="radio">
                <img class="checkbox-list logo"style="width:15%;"  src="https://laz-img-cdn.alicdn.com/tfs/TB1vJcznf6H8KJjy0FjXXaXepXa-80-80.png">ธนาคารกรุงเทพ </p></div><br>
             </tr><span class="checkmark"></span></label>


            <tr> <label class="container">
              <div class="w3-container w3-border w3-large w3-hover-shadow" style="width:23%;">
              <p class="checkbox-list bank-name"> <input type="radio" checked="checked" name="radio">
                <img class="checkbox-list logo"style="width:15%;"  src="https://laz-img-cdn.alicdn.com/tfs/TB16II7nh6I8KJjy0FgXXXXzVXa-80-80.png">ธนาคารกรุงศรี  </p></div><br>
             </tr><span class="checkmark"></span></label>


             <tr> <label class="container">
              <div class="w3-container w3-border w3-large w3-hover-shadow" style="width:23%;">
              <p class="checkbox-list bank-name">  <input type="radio" checked="checked" name="radio">
                <img class="checkbox-list logo"style="width:15%;"  src="https://laz-img-cdn.alicdn.com/tfs/TB1RLn0ncrI8KJjy0FhXXbfnpXa-80-80.png">ธนาคารกสิกรไทย </p></div>   <hr>
             </tr><span class="checkmark"></span></label>
              </a>
              
              
 
            <tr>
            <div class="pull-left">
             <h4>สรุปข้อมูลคำสั่งซื้อ</h4>
              <b> จำนวนสินค้า</b>
                    <?php
                          
                      $sql = "SELECT sum(qty_product) as qty_product  FROM `detail_bill`  WHERE id_member='$id_member' and detail_payment ='0' ";
                      $result = $con->query($sql);
                      
                      if($result->num_rows > 0)
                      {
                        while($row = $result->fetch_assoc())
                        {  
                    ?>
                      <?php echo $row['qty_product'];?>  ชิ้น
                               <?php } ?>

                    <?php } ?>
                    <br>

                   <font color="DodgerBlue "> <i class=" fa fa-money"></font></i> <font color="grey">ราคาสินค้าทังหมด</font>
                     <?php
                          
                          $sql = "SELECT sum(amounts) as amounts  FROM `detail_bill`  WHERE id_member='$id_member' and detail_payment ='0' ";
                          $result = $con->query($sql);
                          
                          if($result->num_rows > 0)
                          {
                            while($row = $result->fetch_assoc())
                            {
                               $amoun = $row['amounts'];
                              
                            
                             
                        ?>
                           ฿<?php echo $row['amounts'];?>.00
                                   <?php } ?>

                        <?php } ?>
                    <br>
                   <font color="DodgerBlue "> <i class=" fa fa-truck"></font></i><font color="grey"> ค่าจัดส่ง</font>
                       <?php
                          
                         
                             $shipping = '50';
                             
                        ?> 
                           ฿<?php echo $shipping;?>.00
                                  

                        
                        <br> <br>
                      
                     
                      
                      </div>
                </div>
  <!-- ๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘๘ -->
</div>
                <th></th>
                </tr>
 <br><br><br><br><br>
        </div>
 

       
       <!-- _______________________________หัวตาราง----------------------------------- -->
            
     <div class="container ">
       <div class="Fixed " >

        <div class="panel ">  <div class="w3-card-2 w3-round w3-border">
          <div class="panel-body ">

              <div class="pull-left ">
                 <font color="grey"> ยอดรวมทั้งสิ้น</font> 
                       
                        <h3><font color="OrangeRed ">฿<?php 
                          $summ=$amoun+$shipping;
                          echo $summ; ?>.00   </font></h3>
                          <?php
                        ?>
               <a href="choice_save_bill.php" class="w3-button w3-orange w3-round w3-hover-shadow" role="button" style="width:250px;"><font color="white">ชำระเงิน</font></a>
                 </div>

               
                </tr>  
              </a>
          </div>
        </div></div>
      </div>       
      </div>
      </div>
      <!-- _______________________________________________________________________________ -->
  <!-- /content-item -->
    <!-- /cart-total -->

<br>




  <!-- jQuery Plugins -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/nouislider.min.js"></script>
  <script src="js/jquery.zoom.min.js"></script>
  <script src="js/main.js"></script>
  <script src="script.js"></script>
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
