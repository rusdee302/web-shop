 <?php session_start();
      include_once('../../../../connect.php');
      $mname=$_SESSION['mname'];
      $id_member=$_SESSION['mid'];
      // $id_product = $_REQUEST['id_product'];
      $id_product=$_REQUEST['id_product']; 

?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>save</title>
  </head>
  <body>
    <?php

 
            
            $sql = "DELETE FROM product where id_product='$id_product'";
            $result = $con->query($sql);
            
            echo "<script>window.location.href='../admin_shop_editproduct.php'</script>";
     
          
      ?>

  </body>
</html>