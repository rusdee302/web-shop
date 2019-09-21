
<?php

   session_start();
    include_once('../../../connect.php');
    mysqli_query($con, "SET NAMES UTF8");
     $id_member=$_SESSION['mid'];
     $id_member=$_REQUEST['id_member'];
    



 	$img_member = $_FILES["img_member"]["name"];

    $name_member = $_POST['name_member'];
	$email_member = $_POST['email_member'];

	//$type = $_POST["product_type"];
	$gender_member = $_POST["gender_member"];
	$address_member = $_POST["address_member"];
	date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");
	//$date_product = date("Y-m-d H:i:s");
	$phone_member = $_POST["phone_member"];
	 // echo "$price_product";
    // echo "$detail_product";
    // echo "$img_product";
    // echo "$oldimg";

    if ($img_member=='') {
      $img_member=$img_member;
    } else  {
      $img_member=$img_member;
      $target_dir = "../../../images/member/"; // namefolder
        $target_file = $target_dir.basename($_FILES["img_member"]["name"]);
        move_uploaded_file($_FILES["img_member"]["tmp_name"],$target_file);
    }

    
        $sql ="UPDATE `member` SET 
            `name_member` = '$name_member', 
            `email_member` = '$email_member', 
            `gender_member` = '$gender_member', 
            `address_member` = '$address_member', 
            `phone_member` = '$phone_member', 
            `img_member` = '$img_member' 
        WHERE `member`.`id_member` = $id_member";

            if ($con->query($sql) === TRUE) {
    echo "<script>window.location.href='manage_profile.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
  



  

    

    

?>

