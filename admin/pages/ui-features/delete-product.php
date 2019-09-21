<?php 
	session_start();
    include_once('../../../connect.php');

    // $id_mem = $_GET['id_member'];
    $id_product = $_GET['id_product'];

    $sql = "DELETE FROM `product` WHERE `product`.`id_product` = $id_product";

    $result = $con->query($sql) or die("Error in query: $sql " . mysqli_error());

    if ($result) {
        echo "Delete Success<br/><a href='admin_shop_editproduct.php'>กลับดูสินค้า</a>";
    }
    else{
        echo "Can't Delete<br/><a href='admin_shop_editproduct.php'>กลับดูสินค้า</a>";
    }
?>