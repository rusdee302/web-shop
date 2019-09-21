<?php 
session_start();
      include_once('connect.php');
      // $mname=$_SESSION['mname'];
      // $id_member=$_SESSION['mid'];
      // $price_product=$_SESSION['price_product'];
      $id_order=$_REQUEST['id_order'];
      $date_order=date("Y-m-d H:i:s");
      // $price_product=$_SESSION['qty'];
      $total_price=$_SESSION['amoun'];
 
         $id_member=$_SESSION['mid'];

         // echo $date_order;
         // echo $total_price;
         // echo $id_member;
         // echo $id_order;
         
  

         // $id_order=$_SESSION['id_order'];
         // $id_order=$_REQUEST['id_order'];


            // $shipping='50';
            
            // $sql = "INSERT INTO bill_product (id_member,shipping,total_price,date_order)
            // VALUES ('$id_member','$shipping','$total_price','$date_order')";
            // $result = $con->query($sql);

              $sql = "INSERT INTO bill_product (id_member,shipping,total_price,date_order,payment,bank_name,account_number,CVV_CVC,img_bank,status_payment, status_admin)
            VALUES ('$id_member','50','$total_price','$date_order','0','0','0','0','0','0','0')";
             $result = $con->query($sql);


              // if ($con->query($sql) === TRUE) {
              //                 echo "New record created successfully";
              //             } else {
              //                 echo "Error: " . $sql . "<br>" . $con->error;
              //             }


                  $sql1 = "SELECT * FROM `bill_product`  WHERE id_member='$id_member' ";
                  $result1 = $con->query($sql1);
                  
                      if($result1->num_rows > 0)
                      {
                        while($row1 = $result1->fetch_assoc())
                        {
                          
                           $_SESSION['date_order'] = $row1['date_order'];

                           $order = $row1['id_order'];
                           $status_payment = $row1['status_payment'];

                           

                           $sql2 = "UPDATE detail_bill SET id_order='$order' WHERE id_member='$id_member' and detail_payment =0 ";
                           $resul2 = $con->query($sql2);
                       


                      
                           echo "<script>window.location.href='bill.php?id_order=$order'</script>";   
                         
                        }
                      }
             

      

?>