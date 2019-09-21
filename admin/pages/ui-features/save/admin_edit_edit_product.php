<?php

    include_once('../../../../connect.php');
    mysqli_query($con, "SET NAMES UTF8");



    // $id_mem = $_GET['id_member'];
    $id = $_GET['id_product'];
    $name_product = $_POST['name_product'];
    $price_product = $_POST['product_price'];
    $detail_product = $_POST['product_detail'];
    $stock = $_POST['stock'];
    $img_product = $_FILES['img_product']['name'];
    $oldimg = $_POST['oldimg'];

    // echo "$price_product";
    // echo "$detail_product";
    // echo "$img_product";
    // echo "$oldimg";

    if ($img_product=='') {
      $img=$oldimg;
    } else  {
      $img=$img_product;
      $target_dir = "../../../../images/product/"; // namefolder
        $target_file = $target_dir.basename($_FILES["img_product"]["name"]);
        move_uploaded_file($_FILES["img_product"]["tmp_name"],$target_file);
    }

    
        $sql = "UPDATE `product` SET 
                `name_product` = '$name_product', 
                `price_product` = '$price_product', 
                `detail_product` = '$detail_product',  
                `stock` = '$stock', 
                `img_product` = '$img'
            WHERE `product`.`id_product` = $id";

            if ($con->query($sql) === TRUE) {
    echo "<script>window.location.href='../admin_shop_editproduct.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
  



  

    

    

?>

