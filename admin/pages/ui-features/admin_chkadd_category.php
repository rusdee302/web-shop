<?php 
 // session_start();
  include_once('../../../connect.php');
    //$id_member=$_SESSION['mid'];
     mysqli_query($con, "SET NAMES UTF8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<?php



//$address_member=$_POST['address_member'];
// $date_member=date("Y-m-d H:i:s");

$name_type = $_POST['name_type'];
//$img_icon = $_POST['img_icon'];


$date_member = date("Y-m-d H:i:s");
 $img_icon = $_FILES["img_icon"]["name"];


            
           $sql = "INSERT INTO type_product (name_type,date_member,icon)
 			VALUES ('$name_type','$date_member','".$_FILES["img_icon"]["name"]."')";

             $target_dir = "../../../category/"; // namefolder
            $target_file = $target_dir.basename($_FILES["img_icon"]["name"]);
            move_uploaded_file($_FILES["img_icon"]["tmp_name"],$target_file);
            $result = $con->query($sql);



           
       echo "<script>window.location.href='admin_Category.php'</script>";


?>

 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
  <?php
 // echo "$name_type";
//echo "$type_product";

//echo "$price_product";

//echo "$detail";

//echo "$type";

//echo "$date_product";
//echo "$stock";
?>  
</body>
</html>