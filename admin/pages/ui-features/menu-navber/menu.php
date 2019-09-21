<!-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">หน้าหลัก</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">จัดการสินค้า</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/manage_products.php">สินค้าทั้งหมด</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/add_product.php">เพิ่มสินค้า</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/show_updet_products.php">แก้ไข/ลบ</a></li>
              </ul>
            </div>
          </li>

     
          <li class="nav-item">
            <a class="nav-link" href="../../pages/ui-features/show_order.php">
              <i class="mdi mdi-content-paste menu-icon"></i>
              <span class="menu-title">จัดส่งสินค้า(ด่วน)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/ui-features/show_finish_send.php">
              <i class="mdi mdi-checkbox-marked-outline menu-icon"></i>
              <span class="menu-title">สินค้าที่ส่งแล้ว</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/ui-features/manage_profile.php">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">โปรไฟล์</span>
            </a>
          </li> -->
         <!--  <li class="nav-item">
            <a class="nav-link" href="../../pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
      <!--   </ul>
      </nav> -->

      <!-- ______________________________ -->
       <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">หน้าหลัก</span>
            </a>
          </li>
         
          <!-- ____________________________________________________ -->
         
          <!-- ____________________________________________________ -->
          <li class="nav-item">
            <a class="nav-link" href="../../pages/ui-features/show_order.php">
              <i class="mdi mdi-content-paste menu-icon"></i>
               <?php
                            // $id_mem = $_GET['id_member'];
                            $sql2 = "SELECT count(id_order) as order_id FROM `bill_product` where account_number !='0' and status_admin ='0'";
                            $result2 = $con->query($sql2);
                            
                            if($result2->num_rows > 0)
                            {
                                while($row2 = $result2->fetch_assoc())
                                {
                                    $order_id = $row2['order_id'];
                                   
                                    // $img_bank = $row2['img_bank'];
                            
                        ?>
              <span class="menu-title">ตรวจสอบการชำระเงิน(<?php echo $order_id;?>)</span>
            <?php } } ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/ui-features/check_send.php">
              <i class="mdi mdi-send menu-icon"></i>
                   <?php
                            // $id_mem = $_GET['id_member'];
                            $sql2 = "SELECT count(id_detail) as detail_id FROM `detail_bill` where status_send ='1' and status_admin_send ='0' ";
                            $result2 = $con->query($sql2);
                            
                            if($result2->num_rows > 0)
                            {
                                while($row2 = $result2->fetch_assoc())
                                {
                                    $detail_id = $row2['detail_id'];
                                 
                                    // $img_bank = $row2['img_bank'];
                            
                        ?>
              <span class="menu-title">ตรวจสอบการขนสินค้า(<?php echo $detail_id;?>)</span>
            <?php } } ?>
            </a>

            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-clipboard-flow menu-icon"></i>
              <span class="menu-title">คืนสินค้า</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/admin_return_show_product.php">โอนเงินคืน</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/admin_return_Money_transfer_history.php">ประวัติการโอนเงเงิน(คืนสินค้า)</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="#">แก้ไข/ลบ</a></li> -->
               <!--  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">แก้ไข/ลบ</a></li> -->
              </ul>
            </div>
          </li>

          </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">จัดการสินค้า</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/admin_products.php">สินค้าทั้งหมด</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/add_product.php">เพิ่มสินค้า</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/admin_shop_editproduct.php">แก้ไข/ลบ</a></li>
               <!--  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">แก้ไข/ลบ</a></li> -->
              </ul>
            </div>
          </li>
      

            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-folder-account menu-icon"></i>
              <span class="menu-title">จัดการ Account</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/admin_accountshow_member.php">Account ทั้งหมด</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/add_account.php">เพิ่ม Account</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/admin_account_member.php">แก้ไข/ลบ Account</a></li>
               <!--  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">แก้ไข/ลบ</a></li> -->
              </ul>
            </div>
          </li>



            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-checkbox-marked-outline menu-icon"></i>
              <span class="menu-title">จัดการประเภทสินค้า</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/admin_showCategory.php">ประเภทสินค้าทั้งหมด</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/admin_add_category.php">เพิ่มประเภทสินค้า</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/admin_Category.php">แก้ไข/ลบประเภทสินค้า</a></li>
               <!--  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">แก้ไข/ลบ</a></li> -->
              </ul>
            </div>
          </li>

            <li class="nav-item">
            <a class="nav-link" href="../../pages/ui-features/edit_banner.php">
              <i class="mdi mdi-settings menu-icon"></i>

              <span class="menu-title">ตั้งค่าหน้าเว็บ</span>
            </a>
          </li>


             <li class="nav-item">
            <a class="nav-link" href="../../pages/ui-features/manage_profile.php">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">โปรไฟล์</span>
            </a>
          </li>
       <!--    <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>