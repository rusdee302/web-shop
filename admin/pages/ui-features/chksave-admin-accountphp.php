<?php 
  session_start();
    include_once('../../../connect.php');
    $id_member=$_SESSION['mid'];
     mysqli_query($con, "SET NAMES UTF8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<?php



$address_member=$_POST['address_member'];
$date_member=date("Y-m-d H:i:s");

$name_member = $_POST['name_member'];
$lastname_member = $_POST['lastname_member'];

$Password_member = $_POST['Password_member'];
$email_member = $_POST["email_member"];
$phone_member = $_POST["phone_member"];
$gender_member = $_POST["gender_member"];
$type_member = $_POST["type_member"];
$Username_member = $_POST["Username_member"];
//$date_product = date("Y-m-d H:i:s");



// $img = $_FILES["product_img"]["name"];


            
            $sql = "INSERT INTO member (id_member,type_member,name_member,Username_member,Password_member,date_member,email_member,gender_member,address_member,phone_member,lastname_member,img_member)
            VALUES (null, '$type_member','$name_member','$Username_member','$Password_member','$date_member','$email_member'
           ,'$gender_member','$address_member','$phone_member','$lastname_member','".$_FILES["img_member"]["name"]."')";

             $target_dir = "../../../images/member/"; // namefolder
            $target_file = $target_dir.basename($_FILES["img_member"]["name"]);
            move_uploaded_file($_FILES["img_member"]["tmp_name"],$target_file);
            $result = $con->query($sql);





    echo "<script>window.location.href='admin_accountshow_member.php'</script>";









           
 


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