<?php 
 session_start();
      include_once('connect.php');
  $id_member=$_SESSION['mid'];
          // unset($_SESSION["amoun"]);
      // unset($_SESSION["qty"]); 





             $sql = "SELECT sum(id_order) as id_order FROM `detail_bill`  WHERE id_member='$id_member' ";
                    $result = $con->query($sql);
                    
                    if($result->num_rows > 0)
                    {
                      while($row = $result->fetch_assoc())
                      {
                         
                         
                         
                         // $detail_payment = $row['detail_payment'];
                         $id_order = $row['id_order'];



                        
                                               

           		// $id_order=$_SESSION['order'];
           		// echo $id_order;
                  		if($id_order==0){
                				echo "<script>window.location.href='save_bill_product.php?id_order=$id_order'</script>";
                			 }

                       else{
                        $sql1 = "SELECT * FROM `detail_bill`  WHERE id_member='$id_member' ";
                        $result1 = $con->query($sql1);
                        
                        if($result1->num_rows > 0)
                        {
                          while($row1 = $result1->fetch_assoc())
                          {
                             
                             
                             
                             $detail_payment = $row1['detail_payment'];
                             

                             if($detail_payment==1){

                             echo "<script>window.location.href='save_bill_product.php?id_order=$id_order'</script>";
                              # code...
                             }else{
                                echo "<script>window.location.href='update_bill_product.php?id_order=$id_order'</script>";
                            }

                          }
                        }

             }
            }
          }
 



?>