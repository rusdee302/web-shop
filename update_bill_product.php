<?php 
      session_start();
      include_once('connect.php');
      // $mname=$_SESSION['mname'];
      $id_member=$_SESSION['mid'];
      // $price_product=$_SESSION['price_product'];
      // $id_product=$_REQUEST['id_product'];
      $date_order=date("Y-m-d H:i:s");
      // $price_product=$_SESSION['qty'];
      $total_price=$_SESSION['amoun'];
 
      $id_member=$_SESSION['mid'];


            $sql = "SELECT * FROM `bill_product`  WHERE id_member='$id_member' ";
            $result = $con->query($sql);
            
            if($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {
                 
                 
                 // $_SESSION['id_order'] = $row['id_order'];
                 $_SESSION['date_order'] = $row['date_order'];
                  $order = $row['id_order'];

             // $id_order=$_SESSION['id_order'];
            // ผ่านการสั่งซื้อแล้วรอบหนึ่ง สั่งซื้ออีกรอบจะทำการอัปเดต order ที่มีอยู่แล้ว  
             $sql3 = "UPDATE bill_product SET shipping='50',total_price='$total_price',date_order='$date_order' WHERE id_order='$id_order'";
            $result3 = $con->query($sql3);



            $sql4 = "SELECT * FROM `bill_product`  WHERE id_member='$id_member' ";
            $result4 = $con->query($sql4);
            
            if($result4->num_rows > 0)
            {
              while($row4 = $result4->fetch_assoc())
              {
             
                   $order = $row4['id_order'];
                 

           
          
                   $sql1 = "UPDATE detail_bill SET id_order='$order' WHERE id_member='$id_member'";
                   $resul1 = $con->query($sql1);


            
                   echo "<script>window.location.href='bill.php?id_order=$order'</script>";   
      

              }
            }


              }
            }




?>