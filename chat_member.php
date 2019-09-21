<?php 
  session_start();
    include_once('connect.php');
    mysqli_query($con, "SET NAMES UTF8");
     $id_member=$_SESSION['mid'];
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

<!-- message chatbox -->

  <link type="text/css" rel="stylesheet" href="css/message_chat.css" />
  <!-- button -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <!-- แถบเมนู -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

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

<style type="text/css">

div.scroll { 
height: 500px; 
width: 800px; 
overflow: auto;
scrollbar-face-color:#FB7800; scrollbar-track-color:#FFE8EF; scrollbar-arrow-color:#F4346F; scrollbar-shadow-color:#F34077; scrollbar-dark-shadow-color:#F33771; scrollbar-highlight-color:#FFFFFF
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
                  <h3>ข้อความจากร้านค้า</h3><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3><br><br>
                   <div class="w3-card  w3-round-xlarge" >
         <div class="w3-panel w3-round-xlarge w3-border w3-border-gray">
       
   
          <div class="headind_srch">

            <form name="btnGetJson"  id="btnGetJson" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">

              <div class="type_msg">
            <div class="input_msg_write">
              <input name="talk" type="text" class="write_msg" placeholder="พิมพ์ข้อความ" /><hr>
              <button type="submit" class="msg_send_btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </div>
        </form>
       
      
      <div class="product-reviews">
        <div class="single-review">

        </div>
                       
                            
     
        <!-- ------------chat------------- -->
        <div class="scroll">
        <?php
                                         $sql3 = "SELECT * FROM return_talk WHERE id_return='$id_return' ORDER BY id_talk DESC   ";
                                         $result3 = $con->query($sql3);
                                         
                                         if($result3->num_rows > 0) 
                                         {
                                         while($row3 = $result3->fetch_assoc())
                                         {
                                             $talk = $row3['talk'];
                                             $date_talk = $row3['date_talk'];
                                             $talk_color = $row3['talk_color'];
                                             $id_mmm = $row3['id_member'];

                                             $sql4 = "SELECT * FROM member WHERE id_member='$id_mmm' ";
                                               $result4 = $con->query($sql4);
                                               
                                               if($result4->num_rows > 0) 
                                               {
                                               while($row4 = $result4->fetch_assoc())
                                               {
                                                   $name_m = $row4['name_member'];
                                                   $img_m = $row4['img_member'];
                                                  
                                           
                        
                                    
                                        

                                    
                                ?>
                 <div class="single-review" id="content">
                <div class="review-heading">
                  <div><a href="#"><!-- <img src="images/member/<?php echo $img_m ;?>" height="50" width="50">  --><?php echo $name_m ;?></a></div>
                  <div><a href="#"><i class="fa fa-clock-o"></i> <?php echo $date_talk ;?></a></div>
                <!-- <div id="content"></div> -->
                </div>
                 <div class="w3-card  w3-round-xlarge" style="width:70%;"  >
                <div class="w3-panel w3-round-xlarge <?php echo $talk_color ?>" >
                  <p><?php echo $talk ;?></p>
               </div>
              </div>
            </div>
            <?php }} }}?>

             
              </div>
            </div>
          </div>
         <!-- ------------chat------------- -->
          </div>
          </div>
          </div>
        </div>
      </div>
      </div>

            <br>
            <br>
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
<script type="text/javascript">
            $(document).ready(function() {
              
              $("#btnGetJson").submit(function(evan) {
                evan.preventDefault();
                  
                  $.ajax({
                     type: "POST",
                     url: "save/chk-add-talk.php?id_return=<?php echo $id_return ;?>",
                     data: $("#btnGetJson").serialize(),
                     success: function(result) {
                        console.log(result)
                      $('#content').html(result);
                     }
                   });

              });
          
            });
        </script>

<!-- <script language="javascript">
  function myFunction() {
  document.getElementById("aaa").classList.toggle("show");
}
setInterval(function(){
   window.location.reload(1);
}, 30000);



</script> -->
</html>