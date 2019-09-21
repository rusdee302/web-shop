<?php 
  session_start();
    include_once('connect.php');
    $id_member=$_SESSION['mid'];
    $id_product=$_REQUEST['id_product'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<?php



//$address_member=$_POST['address_member'];
date_default_timezone_set('Asia/Bangkok');
$date_reviews=date("Y-m-d H:i:s");
$comment = $_POST['comment'];
$score = $_POST["score"];
$img_comment = $_FILES["img_comment"]["name"];

// echo "$id_member";
// echo "$id_product";
// echo "$date_member";
// echo "$comment";
// echo "$score";
// echo "$img_comment";
// echo "$id_member";


            mysqli_query($con, "SET NAMES UTF8");
            $sql = "INSERT INTO reviews_product (id_reviews,id_product,id_member,comment,img_comment,score,date_reviews)
            VALUES (NULL,'$id_product','$id_member','$comment','".$_FILES["img_comment"]["name"]."','$score','$date_reviews')";

             $target_dir = "images/product/img_comment/"; // namefolder
            $target_file = $target_dir.basename($_FILES["img_comment"]["name"]);
            move_uploaded_file($_FILES["img_comment"]["tmp_name"],$target_file);
            $result = $con->query($sql);

            echo "<script>window.location.href='index.php'</script>";

            
      


?>

 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>

</body>
</html>