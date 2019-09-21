<?php 
	session_start();
    include_once('connect.php');
    mysqli_query($con, "SET NAMES UTF8");
?>

<?php
 $id_type=$_REQUEST['id_type'];


  echo "<script>window.location.href='index-t.php?id_type=$id_type'</script>";


?>