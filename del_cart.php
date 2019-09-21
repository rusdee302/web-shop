 <?php session_start();
      include_once('connect.php');
      $mname=$_SESSION['mname'];
      $id_member=$_SESSION['mid'];
      // $id_product = $_REQUEST['id_product'];
      $id_cart=$_REQUEST['del_id']; 

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>save</title>
  </head>
  <body>
    <?php

 
            
            $sql = "DELETE FROM cart where id_cart='$id_cart'";
            $result = $con->query($sql);
            
            echo "<script>window.location.href='cart-total-test3.php'</script>";
     
          
      ?>

  </body>
</html>