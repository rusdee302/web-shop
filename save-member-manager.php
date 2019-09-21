<?php 

include 'connect.php';

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

$img_member = $_FILES["img_member"]["name"];


 		  
       if ($Password_member!=$Confirm) {
         echo "<script>alert('รหัสไม่ตรงกัน')</script>";
         echo "<script>window.location.href='index.php'</script>";
       } 
       else {
          if($_FILES["img_member"]["name"] != "") {
            if(move_uploaded_file($_FILES["img_member"]["tmp_name"],"images/member/".$_FILES["img_member"]["name"])){
                $sql = "INSERT INTO `member` (`id_member`, `type_member`, `name_member`, `Username_member`, `Password_member`, `date_member`, `email_member`, `gender_member`, `address_member`, `phone_member`, `lastname_member`, `img_member`) VALUES (NULL, '2', '$name_member', '$Username_member', '$Password_member', CURRENT_TIMESTAMP, '$email_member', '$gender_member', '$address_member', '$phone_member', '$lastname_member', '$img_member')";

                $result = $con -> query($sql) or die("Error: $sql" .mysql_error($con));

                if ($result) {
                  echo "<script>alert('สมัครสมาชิกเรียบร้อย');</script>";
                  echo "<script>window.location.href='index.php'</script>";
                }
                else{
                  echo "Error: ".mysql_error($con);
                }
            }
            else{
              echo "Error: ".mysql_error($con);
              
            }
          }
          else{
            echo "<script>alert('กรุณาเพิ่มรูปภาพประจำตัว');</script>";
            echo "<script>window.location.href='index.php'</script>";
          }
       }


?>