<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    
    include_once('connect.php');
    
    $name = $_POST["product_name"];
    $price = $_POST["product_price"];
    $number = $_POST["product_number"];
    $img = $_FILES["product_img"]["name"];
    $detail = $_POST["product_detail"];
    $type = $_POST["product_type"];
    $id_member = $_POST["id_member"];

    if(move_uploaded_file($_FILES["product_img"]["tmp_name"],"images/product/".$_FILES["product_img"]["name"]))
    {
        $sql = "INSERT INTO `product` (`id_product`, `name_product`, `type_product`, `price_product`, `saled`, `stock`, `detail_product`, `img_product`, `date_product`, `id_member`) 
        VALUES (NULL, '$name', '$type', '$price', '0', '$number', '$detail', '$img', current_timestamp(), '$id_member')";
        
        $result = $con->query($sql);

        if ($result) {
            echo "<script>
              alert('เพิ่มสินค้าเรียบร้อยแล้ว');
              window.location.assign('manager.php?id_member=$id_member')
            </script>
            ";
        }
        else {
            echo "<script>
              alert('การเพิ่มสินค้าล้มเหลว');
              window.location.assign('manager.php?id_member=$id_member')
            </script>
            ";
        }
    }
    else {
        echo "<script>
              alert('เกิดข้อผิดพลาดในการเพิ่มรูปภาพ');
              window.location.assign('manager.php?id_member=$id_member')
            </script>
            ";
    }
    
?>
</body>
</html>