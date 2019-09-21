<?php 
	session_start();
    include_once('../../../connect.php');

    $id_type = $_GET['id_type'];
   // $id_product = $_GET['id_product'];

    $sql = "DELETE FROM `type_product` WHERE `type_product`.`id_type` = $id_type";

    $result = $con->query($sql) or die("Error in query: $sql " . mysqli_error());

    /*if ($result) {*/
       // echo "Delete Success<br/><a href='manage_products.php?id_product=<?php echo $id_product;'>กลับหน้าร้าน</a>";
        echo "<script>window.location.href='admin_Category.php'</script>";
   /* }
    else{
       // echo "Can't Delete<br/><a href='manager_product.php?id_member=$id_mem'>กลับหน้าร้าน</a>";
    }*/
?>