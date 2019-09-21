<?php

    include_once('../../../../connect.php');


   
    $id_detail = $_REQUEST['id_detail'];
   
   
   // echo "$id_oeder";
   // echo "$payment";
   // echo "$bank_name";
   // echo "$CVV_CVC";
   // echo "$bank_num";
   // echo "$img_bank";


         mysqli_query($con, "SET NAMES UTF8");
       

    	  $sql = "UPDATE `detail_bill` SET 
                 `status_admin_send` = '1'    
            WHERE `detail_bill`.`id_detail` = '$id_detail'";

            


                        if ($con->query($sql) === TRUE) {
    echo "<script>window.location.href='../check_send.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

            
    // echo "<script>window.location.href='admin_shop_editproduct.php'</script>";

  

    

    

?>

