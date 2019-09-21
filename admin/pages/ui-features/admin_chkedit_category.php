<?php

    include_once('../../../connect.php');
    mysqli_query($con, "SET NAMES UTF8");



    // $id_mem = $_GET['id_member'];
    $id_type = $_GET['id_type'];
    $name_type = $_POST['name_type'];
    // $price_product = $_POST['product_price'];
    // $detail_product = $_POST['product_detail'];
    // $stock = $_POST['stock'];
    $img_icon = $_FILES['img_icon']['name'];
    /*$oldimg = $_POST['oldimg'];*/

    // echo "$price_product";
    // echo "$detail_product";
    // echo "$img_product";
    // echo "$oldimg";

    if ($img_icon=='') {
      $img=$oldimg;
    } else  {
      $img=$img_icon;
      $target_dir = "../../../category/"; // namefolder
        $target_file = $target_dir.basename($_FILES["img_icon"]["name"]);
        move_uploaded_file($_FILES["img_icon"]["tmp_name"],$target_file);
    }

    
        $sql = "UPDATE `type_product` SET 
                `name_type` = '$name_type', 
               
                `icon` = '$img'
            WHERE `type_product`.`id_type` = $id_type";

            if ($con->query($sql) === TRUE) {
   echo "<script>window.location.href='admin_Category.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
  



  

    

    

?>

