<?php

    include_once('../../../../connect.php');


   
    $id_order = $_REQUEST['id_order'];
   
   
   // echo "$id_oeder";
   // echo "$payment";
   // echo "$bank_name";
   // echo "$CVV_CVC";
   // echo "$bank_num";
   // echo "$img_bank";

         mysqli_query($con, "SET NAMES UTF8");
    	  $sql = "UPDATE `bill_product` SET 
                 `status_admin` = '1'    
            WHERE `bill_product`.`id_order` = $id_order";


                        if ($con->query($sql) === TRUE) {
    echo "<script>window.location.href='../show_order.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

            
    // echo "<script>window.location.href='admin_shop_editproduct.php'</script>";

  

    

    

?>

