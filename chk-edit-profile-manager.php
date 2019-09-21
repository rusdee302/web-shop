<?php
include_once('connect.php');

$id_mem = $_GET['id_member'];
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$oldimg = $_POST['oldimg'];

// echo $name , $email , $gender , $address , $tel , $oldimg;

//ฟังก์ชั่นวันที่
date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");	
//ฟังก์ชั่นสุ่มตัวเลข
$numrand = (mt_rand());

$path = "images/member/";

//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
$type = strrchr($_FILES['img']['name'],".");

//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="images/member/".$newname;

if($_FILES["img"]["name"] != "")
{
    if(move_uploaded_file($_FILES["img"]["tmp_name"],$path_copy))
    {
        //*** Delete Old File ***//			
        @unlink("images/member/".$oldimg);

        $sql ="UPDATE `member` SET 
            `name_member` = '$name', 
            `email_member` = '$email', 
            `gender_member` = '$gender', 
            `address_member` = '$address', 
            `phone_member` = '$tel', 
            `img_member` = '$newname' 
        WHERE `member`.`id_member` = $id_mem";
        
        $result = $con->query($sql) or die ("Error in query: $sql " . mysqli_error($con));

        if($result)
        {
            header("location:manager.php?id_member=$id_mem");
        }
        else 
        {
            echo "Can't update1";
        }
    }
    else 
    {
        echo "Upload files is Failed<br/><a href='update-product.php?id_product=$id'>ลองอีกครั้ง</a>";
    }
}
else 
{
    $sql ="UPDATE `member` SET 
            `name_member` = '$name', 
            `email_member` = '$email', 
            `gender_member` = '$gender', 
            `address_member` = '$address', 
            `phone_member` = '$tel', 
            `img_member` = '$oldimg' 
    WHERE `member`.`id_member` = $id_mem";
        
    $result = $con->query($sql) or die ("Error in query: $sql " . mysqli_error());

    if($result)
    {
        header("location:manager.php?id_member=$id_mem");
    }
    else 
    {
        echo "Can't update2";
    }
}
?>