<?php 
	session_start();
    include_once('../../../connect.php');

    $id_member1 = $_GET['id_mem'];
   // $id_product = $_GET['id_product'];

    $sql = "DELETE FROM `member` WHERE `member`.`id_member` = $id_member1";

    $result = $con->query($sql) or die("Error in query: $sql " . mysqli_error());

    /*if ($result) {*/
       // echo "Delete Success<br/><a href='manage_products.php?id_product=<?php echo $id_product;'>กลับหน้าร้าน</a>";
        echo "<script>window.location.href='admin_accountshow_member.php'</script>";
   /* }
    else{
       // echo "Can't Delete<br/><a href='manager_product.php?id_member=$id_mem'>กลับหน้าร้าน</a>";
    }*/
?>