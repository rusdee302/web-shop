						
						<!-- 	<div class="product-btns">
								<div class="qty-input"><br>
									<span class="text-uppercase">
										<strong>จำนวน&nbsp;&nbsp;&nbsp;&nbsp;</strong> </span>
									<input class="input" type="number" name="number">
									&nbsp;&nbsp;&nbsp;&nbsp;มีสินค้าทั้งหมด:<?php echo $stock; ?> ชิ้น<br></div>
								</div><br>
								<a id="btnSignin"><button class="primary-btn add-to-cart "><i class="fa fa-shopping-cart"></i> เพิ่มไปยังรถเข็น</button></a>
								<a onclick="myFunction()" id="Register"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> ซื้อสินค้า</button></a>
								<br>
							
 -->
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




								<div class="product-btns">
								<div class="qty-input"><br>
									<span class="text-uppercase">
										<strong>จำนวน&nbsp;&nbsp;&nbsp;&nbsp;</strong> </span>
									<input class="input" type="number" name="number">
									&nbsp;&nbsp;&nbsp;&nbsp;มีสินค้าทั้งหมด:<?php echo $stock; ?> ชิ้น<br></div>
								</div><br>
								<button class="primary-btn add-to-cart " data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart"></i> เพิ่มไปยังรถเข็น</button>
								<button class="primary-btn add-to-cart" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart"></i> ซื้อสินค้า</button>
								<br>


															  <div class="modal" id="myModal">
							    <div class="modal-dialog">
							      <div class="modal-content">
							      
							        <!-- Modal Header -->
							        <div class="modal-header">
							          <h1 class="modal-title">เข้าสู่ระบบ</h1>
							          <button type="button" class="close" data-dismiss="modal">×</button>
							        </div>
							        
							        <!-- Modal body -->
							        <div class="modal-body">
							         
          <form action="chklogin.php" method="POST" name="form1" enctype="multipart/form-data">
												<div class="form-group">
													<label for="login">User:</label>
													<input  type="text" id="login" name="username"
															class="form-control">
													
												</div>
												<div class="form-group">
													<label for="pswd">Password:</label>
													<input  type="password" id="pswd" name="password"
														class="form-control">
												</div>
										<div class="modal-footer">
											<button class="btn btn-primary" name="submit">เข้าสู่ระบบ</button>
										  <button class="btn btn-warning">ลืมรหัสผ่าน</button>
											<button class="btn btn-info">สมัครสมาชิก</button>
										</div>
										</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
	                      <!--   <i class="fa fa-sign-in" aria-hidden="true" style="color: white"></i> 
							<a id="btnSignin" class=""><font color="white">เข้าสู่ระบบ |</font></a> 
							<div class="dropdown">
								 <i class="fa fa-user-plus" aria-hidden="true" style="color: white"></i> 
								<a onclick="myFunction()" class="dropbtn">สมัครสมาชิก</a>
								<div id="myDropdown" class="dropdown-content">
										<a id="Register">ผู้ใช้ทั่วไป</a>
										<a id="Registermanager">ขายของกับเรา</a>
								</div>
							</div> -->
							<!-- องค์ประกอบของ Modal -->
							

                           
 
							<!-- /องค์ประกอบของ Signin -->
							<!-- องค์ประกอบของ Register User-->
						
						