<?php 
  session_start();
    include_once('../../../../connect.php');
    $id_member=$_SESSION['mid'];
     mysqli_query($con, "SET NAMES UTF8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<?php



//$address_member=$_POST['address_member'];
// $date_member=date("Y-m-d H:i:s");

$name_product = $_POST['name_product'];
$type_product = $_POST['product_type'];

$price_product = $_POST['product_price'];
$detail = $_POST["product_detail"];
$type = $_POST["product_type"];
$stock = $_POST["stock"];
$date_product = date("Y-m-d H:i:s");
// $img = $_FILES["product_img"]["name"];


            
            $sql = "INSERT INTO product (id_product,id_mamber,name_product,type_product,price_product,saled,stock,detail_product,img_product,date_product,retail_price,wholesale_price)
            VALUES (NULL,'$id_member','$name_product','$type_product','$price_product','0','$stock','$detail'
            ,'".$_FILES["img_product"]["name"]."','$date_product','0','0')";

             $target_dir = "../../../../images/product/"; // namefolder
            $target_file = $target_dir.basename($_FILES["img_product"]["name"]);
            move_uploaded_file($_FILES["img_product"]["tmp_name"],$target_file);
            $result = $con->query($sql);



           
       echo "<script>window.location.href='../admin_shop_editproduct.php'</script>";


?>

 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
  <!--  <?php
  echo "$name_product";
echo "$type_product";

echo "$price_product";

echo "$detail";

echo "$type";
echo "$id_member";
echo "$date_product";
echo "$stock";
?>  -->
</body>
</html>