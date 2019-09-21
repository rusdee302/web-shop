<?php 
session_start();
      include_once('connect.php');
      $mname=$_SESSION['mname'];
      $id_member=$_SESSION['mid'];
      $price_product=$_SESSION['price_product'];
      $id_product=$_REQUEST['id_product'];
      $qty = $_POST['number'];
      unset($_SESSION["total_price"]);
      unset($_SESSION["date_order"]);
      $gender = $_POST['gender'];

      if($_REQUEST['gender']==null){

      }else{
        $gender=$_REQUEST['gender'];
        $in=$_REQUEST['in'];
        $id_type=$_REQUEST['id_type'];
        $search=$_REQUEST['search'];
      }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>save</title>
  </head>
  <body>
    <?php
          // $id_member=$_SESSION['mid'];
          $date_detail=date("Y-m-d H:i:s");

          if ($id_member==null) {
        echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
         echo "<script>window.location.href='index.php'</script>";
       } else {

            $qty_product =  $qty;
            $amounts = $price_product * $qty_product;

            $sql ="INSERT INTO detail_bill (id_member,id_product,id_order,qty_product,amounts,date_detail,detail_payment,status_send,status_admin_send)
            VALUES ('$id_member','$id_product',0,'$qty','$amounts','$date_detail',0,0,0)";

            $result = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error($con));

            if ($result) {
              if($gender==2){
              header("location:cart-total.php?id_member=$id_member&id_product=$id_member");
              }else{
                if($in==null){
                   header("location:product-page.php?id_product=$id_product");
                }elseif ($in==1) {
                  header("location:index.php");
                }elseif ($in==2) {
                  header("location:index-t.php?id_type=$id_type");
                }elseif ($in==3) {
                  header("location:index-search.php?search=$search");
                }else{

                }
               
              }
            }
            else {
              echo "NO";
            }
      }
          
      ?>
  </body>
</html>