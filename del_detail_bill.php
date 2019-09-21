 <?php 
 session_start();
      include_once('connect.php');
      $mname=$_SESSION['mname'];
      $id_member=$_SESSION['mid'];
      // $id_product = $_REQUEST['id_product'];
      $id_detail=$_GET['del_id']; 


            $sql = "DELETE FROM `detail_bill` WHERE `detail_bill`.`id_detail` = $id_detail";
            $result = $con->query($sql) or die ("Error in query: $sql " . mysqli_error($con));

            if ($result) {
             header("location:cart-total.php?id_member=$id_member");
            }
            else{
              echo "N1";
            }
            
            
     
          
      ?>
