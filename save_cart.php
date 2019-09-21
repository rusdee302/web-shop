<?php session_start();
      include_once('connect.php');
      $mname=$_SESSION['mname'];
      $id_member=$_SESSION['mid'];
      $price_product=$_SESSION['price_product'];
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
          if ($id_member==null) {
        echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
         echo "<script>window.location.href='product-page.php'</script>";
       } else {

            $num = $_POST["number"];
            $price_sum = $price_product * $num;
            
            $sql = "INSERT INTO cart (id_cart,id_product,id_member,num,price_sum)
            VALUES ('$id_cart','$id_product','$id_member','".$_POST["number"]."','$price_sum')";
            $result = $con->query($sql);

            
            echo "<script>window.location.href='cart-total-test3.php'</script>";
      }
          
      ?>
  </body>
</html>