<?php 
  session_start();
    include_once('../../../connect.php');
    $id_member=$_SESSION['mid'];
     mysqli_query($con, "SET NAMES UTF8");
     $id_return=$_REQUEST['id_return'];
     date_default_timezone_set("Asia/Bangkok");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<?php



//$address_member=$_POST['address_member'];
 $date_payblack=date("Y-m-d H:i:s");

//$id_return = $_POST['id_return'];
//$type_product = $_POST['product_type'];


 $img_bankpayback = $_FILES["img_bankpayback"]["name"];


            
          $sql = "INSERT INTO pay_back (id_payback,id_return,img_bankpayback,date_payblack)
            VALUES (NULL,'$id_return','$img_bankpayback','$date_payblack')";

             $target_dir = "../../../img/img_payback/"; // namefolder
            $target_file = $target_dir.basename($_FILES["img_bankpayback"]["name"]);
            move_uploaded_file($_FILES["img_bankpayback"]["tmp_name"],$target_file);
            $result = $con->query($sql);



           
       echo "<script>window.location.href='admin_return_show_product.php'</script>";
 

?>

 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
 <?php
  //echo "$id_return";
  //echo "$img_bankpayback";


?>  
</body>
</html>