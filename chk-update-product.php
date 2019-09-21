<?php
    include_once('connect.php');

    $id_mem = $_GET['id_member'];
    $id = $_GET['id_product'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $oldstock = $_POST['oldstock'];
    $saled = $_POST['saled'];
    $detail = $_POST['detail'];
    $oldimg = $_POST['imgName'];

    if($stock == "")
    {
        $stock = $oldstock;
    }
    else {
        $stock = $oldstock + $stock;
    }
    // echo $id , $name , $type , $price , $stock , $saled , $detail , $img;

    //ฟังก์ชั่นวันที่
    date_default_timezone_set('Asia/Bangkok');
	$date = date("Ymd");	
    //ฟังก์ชั่นสุ่มตัวเลข
    $numrand = (mt_rand());
    
    $path = "images/product/";

    //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
    $type = strrchr($_FILES['img']['name'],".");

    //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
    $newname = $date.$numrand.$type;
    $path_copy=$path.$newname;
    $path_link="images/product/".$newname;

    if($_FILES["img"]["name"] != "")
    {
        if(move_uploaded_file($_FILES["img"]["tmp_name"],$path_copy))
        {
            //*** Delete Old File ***//			
            @unlink("images/product/".$oldimg);
            
            $sql = "UPDATE `product` SET 
                `name_product` = '$name', 
                `type_product` = '$type', 
                `price_product` = '$price', 
                `saled` = '$saled', 
                `stock` = '$stock', 
                `img_product` = '$newname',
                `detail_product` = '$detail' 
            WHERE `product`.`id_product` = $id";

            $result = $con->query($sql) or die ("Error in query: $sql " . mysqli_error());
    
            if($result)
            {
                echo "Update Success<br/><a href='manager.php?id_member=$id_mem'>กลับไปที่หน้าร้าน</a>";
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
        $sql = "UPDATE `product` SET 
        `name_product` = '$name', 
        `type_product` = '$type', 
        `price_product` = '$price', 
        `saled` = '$saled', 
        `stock` = '$stock',
        `img_product` = '$oldimg', 
        `detail_product` = '$detail' 
        WHERE `product`.`id_product` = $id";

        $result = $con->query($sql) or die ("Error in query: $sql " . mysqli_error());
        
        if($result)
        {
            echo "Update Success<br/><a href='manager.php?id_member=$id_mem'>กลับไปที่หน้าร้าน</a>";
        }
        else {
            echo "Can't update2";
        }
    }
?>