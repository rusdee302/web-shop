<?php 
  session_start();
    include_once('../../../connect.php');
    mysqli_query($con, "SET NAMES UTF8");
     $id_member=$_SESSION['mid'];
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

  <!-- test1 -->
  <link rel="stylesheet" href="admin_return_show_product.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- popup slip -->
<link type="text/css" rel="stylesheet" href="css-button/button1.css" />
</head>
<style type="text/css">
  html,body,h1,h2,h3,h4,h5 {font-family: 'Kanit', sans-serif;}

  button {
    background-image: linear-gradient(to bottom right, #007991, #78ffd6);
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
  height: 95%
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
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
     <?php
    include('menu-navber/navbar.php');
   ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
       <?php 
      include('menu-navber/menu.php'); 
      ?>
      <!-- partial -->
      <div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
                        <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                 
               <!-- --------------teble---------------- -->
               <div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">

        </div>
      
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
    
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">สำหรับแอดมิน:</div>
                        <h2 class="to"> ข้อมูลการโอนเงิน</h2>
                   
                      
                    </div>
                   
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr style="color: white">
                            <th>ชื่อลูกค้า</th>
                             <th class="text-left">ชื่อบัญชี/ธนาคาร/เลขที่บัญชี</th>
                            <th class="text-left">จำนวนเงิน</th>
                            <!-- <th class="text-left">เวลา</th> -->
                            <th class="text-center">สลิปการโอน</th>
                        </tr>
                        <!-- class="text-right" -->
                        <!-- <td class="qty"> -->
                    </thead>
                    <tbody>
                    <?php
                            // $id_mem = $_GET['id_member'];
                            $sql = "SELECT * FROM `return1` ";
                            $result = $con->query($sql);
                            
                            if($result->num_rows > 0)
                            {
                                while($row = $result->fetch_assoc())
                                {
                                  $id_return = $row['id_return'];
                                  $account_name = $row['account_name'];
                                    $bank_name = $row['bank_name'];
                                    $account_number = $row['account_number'];
                                    $id_detail = $row['id_detail'];

                                     // $id_mem = $_GET['id_member'];
                            $sql1 = "SELECT * FROM `detail_bill` WHERE id_detail='$id_detail'";
                            $result1 = $con->query($sql1);
                            
                            if($result1->num_rows > 0)
                            {
                                while($row1 = $result1->fetch_assoc())
                                {
                                  $id_member = $row1['id_member'];
                                  $amounts = $row1['amounts'];

                                  $sql2 = "SELECT * FROM `member` WHERE id_member='$id_member'";
                                  $result2 = $con->query($sql2);
                                  
                                  if($result2->num_rows > 0)
                                  {
                                      while($row2 = $result2->fetch_assoc())
                                      {
                                        $name_member = $row2['name_member'];

                                        $sql3 = "SELECT * FROM `pay_back` WHERE id_return='$id_return'";
                                  $result3 = $con->query($sql3);
                                  
                                  if($result3->num_rows > 0)
                                  {
                                      while($row3 = $result3->fetch_assoc())
                                      {
                                        $img_bankpayback = $row3['img_bankpayback'];
                                        $date_payblack = $row3['date_payblack'];
                                    
                                    ?>
                        
                        <tr>
                             <td ><i class="mdi mdi-checkbox-marked menu-icon"></i>&nbsp; <?php echo $name_member; ?></td>
                             <!-- ชื่อผู้ส่ง--->
                            <td ><h3>   <?php echo $account_name; ?>, <?php echo $bank_name; ?> , <?php echo $account_number; ?>

                            </td>
                               <!--  <a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
                               ธนาคาร กรุงไทย </a>  -->
                             
                            
                           <td class="text-left"><?php echo $amounts; ?></td>
                           <!-- <td ><?php echo $date_payblack; ?></td> -->
                           
                           <td id="myBtn" style="text-align: center; vertical-align: baseline;"><a href="#"><font color="green" ><U><?php echo "E-SHOP โอนเงินเรียบร้อย";?></U></font></a>   </td> 
                             <!-- Popups แสดงสลิป -->
                           <div id="myModal" class="modal">

                           

                            <!-- Modal content -->
                            <div class="modal-content">
                            <span class="close">&times;</span>
                            <font size="5" color="green">
                            <p> สลิปการโอนเงิน</p></font>
                            <div class="w3-container w3-border w3-large">
                            <img src="../../../img/img_payback/<?php echo $img_bankpayback; ?>" style="width:100%; height: 90%;">
                            </div>
                            </div>
                            <!-- Popups แสดงสลิป -->
                          
                                                    
                                                    <!-- The Modal -->
                                                        <div id="myModal" class="modal">

                                                                    
                                                        <!-- Modal content -->
                                                        <!--  <divsssssaass class="modal-content" style="width:50%;">
                                                            <span class="close">&times;</span>
                                                            <h4>แนบสลิป</h4>
                                                            <div class="w3-container w3-border w3-large">
                                                                <form action="chk_return_product.php" method="get" id="form1"> 
                                                    <form name="chk_return_product.php" method="POST" action="chk_return_product.php?id_return=<?php echo $id_return; ?>" enctype="multipart/form-data">
                                                            <div class="col-sm-10"><br><br>
                                                            <div class="form-group">
                                                            <label for="img_bankpayback">รูปภาพสลิป</label>
                                                                <input type="file" name="img_bankpayback" id="img_bankpayback" required="required"> 

                                                            <img id="blah1" alt="Snow" style="width:100%;max-width:230px" />
                                    
                                    <input name="img_bankpayback" type="file" onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                                            </div>
                                                            </div>

                                                            
                                                            <div class="col-sm-10"><br><br>
                                                            <button type="submit" class="btn btn-success">เพิ่มรูปภาพ</button>
                                                        
                                                            </div><br>
                                                            </form>  </div>
                                                            </divsssssaass> -->
                                                        </div><br>

                                                    </tr>
                                                    <?php } ?>
                                                    <?php } ?><?php } ?>
                                                    <?php } ?>
                                                    <?php } ?>
                                                    <?php } ?>
                                                    <?php } ?>
                                                    <?php } ?>

                                            </tbody>
                                            <tfoot>
                                                
                                            </tfoot>
                                        </table>
                                        
                                        <div class="notices">
                                            
                                        </div>
                                    </main>
                                    
                                </div>
                                <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                                <div></div>
                            </div>
                            </div> 
                            <!-- --------------teble---------------- -->

         
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

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

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
</body>

</html>
