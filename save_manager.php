<?php include 'connect.php';

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<?php



$Username_member = $_POST['Username_member'];
//$type_member = $_POST['type_member'];
$Password_member = $_POST['Password_member'];

//$address_member=$_POST['address_member'];
// $date_member=date("Y-m-d H:i:s");

$Confirm = $_POST['Confirm'];
$email_member = $_POST['email'];
$name_member = $_POST['name_member'];
$address_member = $_POST['address_member'];
$lastname_member = $_POST['lastname_member'];
$phone_member = $_POST['phone_member'];
$gender_member = $_POST['gender_member'];
$date_member = date("Y-m-d H:i:s");



 		  
       

          if ($Password_member!=$Confirm) {
         echo "<script>alert('รหัสไม่ตรงกัน')</script>";
         echo "<script>window.location.href='index.php'</script>";
       } else {

       	 	// $type_member=1;
        mysqli_query($con, "SET NAMES UTF8");
            
            $sql = "INSERT INTO member ( id_member,type_member,name_member,Username_member,Password_member,date_member,email_member,gender_member,address_member,phone_member,lastname_member,img_member)
            VALUES ('$id_member','2','$name_member','$Username_member','$Password_member','$date_member','$email_member','$gender_member','$address_member','$phone_member','$lastname_member','".$_FILES["img_member"]["name"]."')";

             $target_dir = "images/member/"; // namefolder
			    $target_file = $target_dir.basename($_FILES["img_member"]["name"]);
			    move_uploaded_file($_FILES["img_member"]["tmp_name"],$target_file);
            $result = $con->query($sql);



             echo "<script>alert('สมัครสำเร็จ เข้าสู่ระบบอีกครั่ง')</script>";
            echo "<script>window.location.href='index.php'</script>";
      }

/*if($name_member=="" or $Username_member=="" or $Password_member==""){
	
	
msgbox('กรุณากรอกข้อมููลให้ครบ','register.php');
}
//msgbox('ÃËÑÊÊÁÒªÔ¡ËÃ×Íª×èÍà¢éÒãªé§Ò¹«éÓ','register.php');

$sql = "SELECT * FROM member WHERE Password_member='$Password_member'";// ฟังชั่นเช็ค ว่าสมัครสมาชิกชื่อซำ้กันหรือไม่
 $result = mysqli_query($con,$sql);#ทำการอ่านค่าที่ก็บอยู่ $sql
 if ($result->num_rows > 0) //ห้ามซำ้กันตรงเช็คค่า =0 
 
 {  
echo "<script language='javascript'>alert('Username ซ้ำ');</script>";
echo "<meta http-equiv='refresh' content='0;url=register.php' />";
 } else 
 
  ///////////////// ถ้าไม่ซำ้  ให้ insert บันทึกฐานข้อมูลเลย////////////
 
 {

$query ="INSERT INTO `member`(`id_member`,`name_member`,`Username_member`, `Password_member`, `date_member`, `email_member`, `gender_member`, `address_member`, `phone_member`) VALUES ('0','$name_member','$Username_member','$Password_member','$date_member','$email_member','$gender_member','$address_member','$phone_member')";
print_r($query);
die();
$result = mysqli_query($con,$query);
	echo "<script language='javascript'>alert('complete');</script>";
echo "<meta http-equiv='refresh' content='0;url=index.php' />";

	}*/
?>

 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><body>
</body>
</html>