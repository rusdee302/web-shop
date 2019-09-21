<?php

    include_once('../../../../connect.php');
     // $id_mem = $_GET['id_member'];
    $id_banner=$_REQUEST['id_banner'];
    $img_banner3 = $_FILES['img_banner3']['name'];
    /*$img_banner2 = $_FILES['img_banner2']['name2'];
    $img_banner3 = $_FILES['img_banner3']['name3'];
    $img_banner4 = $_FILES['img_banner4']['name4'];
    $img_banner5 = $_FILES['img_banne5r']['name5'];*/
   

     //echo "$img_banner1";
    // echo "$img_banner2";
    // echo "$img_banner3";
    // echo "$img_banner4";

    
      
      $target_dir = "../../../img/"; // namefolder
        $target_file = $target_dir.basename($_FILES["img_banner3"]["name"]);
        move_uploaded_file($_FILES["img_banner3"]["tmp_name"],$target_file);

    

    if($img_banner3){
        	$sql = "UPDATE `banner` SET 
                `img_banner3` = '$img_banner3'
                WHERE `id_banner` = $id_banner";

					if ($con->query($sql) == TRUE) {
				
              echo "<script>window.location.href='../edit_banner.php'</script>";
					} else {
					    echo "Error: " . $sql . "<br>" . $con->error;
					}
	}



    /*        if ($con->query($sql) === TRUE) {
    echo "<script>window.location.href='edit_banner.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}*/
  ?>
