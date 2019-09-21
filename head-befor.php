<!--   <li class="header-account dropdown default-dropdown"  >
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">

									<img src="images/member/<?php echo $img; ?>"width="25" alt="profile" class="img-profile-member w3-circle"/>

								<strong class="text-uppercase"><font color="white">
								<p>เข้าสู่ระบบ/สม</p>
								</strong><i class="fa fa-caret-down"></i></font></strong>

							</div>
							<br/>

							<ul class="custom-menu">
								<li><a href="profile.php?id_member=<?php echo $id_member; ?>"><i class="fa fa-user-o"></i>บัญชีของฉัน</a></li>
								<li><a href="order-list-user.php?id_member=<?php echo $id; ?>"><i class="fa fa-heart-o"></i> รายการซื้อ</a></li>
								<li><a href="cart-total.php?id_member=<?php echo $id; ?>"><i class="fa fa-exchange"></i> ตะกร้าสินค้า</a></li>
								<li><a href="return-detail.php?id_member=<?php echo $id; ?>"><i class="fa fa-window-close-o"></i> การส่งคืนและ<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ยกเลิกสินค้า</a></li>
								<li><a href="logout.php" ><i class="fa fa-sign-out"></i> ออกจากระบบ</a></li>
							</ul>
						</li>
 -->

<!-- Account -->
<!-- Account -->
<li class="header-account dropdown default-dropdown">
	                        <i class="fa fa-sign-in" aria-hidden="true" style="color: white"></i> 
							<a id="btnSignin" class=""><font color="white">เข้าสู่ระบบ |</font></a> 
							<div class="dropdown">
								 <i class="fa fa-user-plus" aria-hidden="true" style="color: white"></i> 
								<a onclick="myFunction()" class="dropbtn">สมัครสมาชิก</a>
								<div id="myDropdown" class="dropdown-content">
										<a id="Register">ผู้ใช้ทั่วไป</a>
										<a id="Registermanager">ขายของกับเรา</a>
								</div>
							</div>
							<!-- องค์ประกอบของ Modal -->
							<div id="modalSignin" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">สมาชิกเข้าสู่ระบบ</h5>
											<button class="close" data-dismiss="modal">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
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
									</div>
								</div>
							</div>
                            

                           
 
							<!-- /องค์ประกอบของ Signin -->
							<!-- องค์ประกอบของ Register User-->
							<div id="modalRegister" class="modal fade">
								<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
								<h3 class="modal-title" >สมัครสมาชิก</h3>
								<button class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
								<form action="save_member.php" method="POST" enctype="multipart/form-data">
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="user-name">Username:</label>
								<input  type="text" id="pswd" placeholder="Password" 
									name="Username_member" class="form-control"></div>
                                    
                                    
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="pswd">Password: <small>รหัสอย่งน้อย 8 หลัก</small></label>
								<input  type="password" id="pswd" placeholder="Password" 
									name="Password_member" class="form-control" pattern="[A-Za-z0-9]{8}" title="รหัสอย่างน้อย 8 หลัก">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="re-pswd">Confirm Password:</label> 
									<input  type="password" id="re-pswd" placeholder="Re-Password" 
									class="form-control" name="Confirm" pattern="[A-Za-z0-9]{8}" title="รหัสอย่างน้อย 8 หลัก">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="login">Email:</label>
								<input  type="email" id="login" placeholder="example@hotmail.com" 
									class="form-control" name="email">
								</div>
								
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="tel">name:</label>
									<input  type="tel" id="tel" placeholder="Jesse Lingard" 
									class="form-control" name="name_member" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร">
								</div>

								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="name">lastname:</label>
									<input  type="text" id="name" placeholder="Jesse Lingard" 
									class="form-control" name="lastname_member" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร">
								</div>

								

								

								 <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								      <label for="comment">address:</label>
								      <textarea class="form-control" rows="5" id="comment" name="address_member"></textarea>
								    </div>

								  <!--   <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="tel">วันเกิด:</label>
									<input  type="tel" id="tel" placeholder="วว/ดด/ปป" 
									class="form-control" name="date_member">
								</div> -->
								
								

								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="name">phone:</label>
									<input  type="text" id="name" placeholder="08x-xxx-xxxx" 
									class="form-control" name="phone_member" required pattern="[0-9\s]{10}" title="กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง">
								</div>

								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="name">เพศ:</label><br>
									 <input type="radio" name="gender_member" value="1" checked>ชาย
									 <input type="radio" name="gender_member" value="0"> หญิง<br><br>
									

									   
								</div>

								

								<div class="form-group">
				                    <label for="name">เพิ่มรูปโปสเตอร์</label>
				                    <input class="form-control-file" id="e_profile" type="file"  name="img_member" >
				                  </div>
								
								

								
								
								</div>
								<div class="modal-footer" style="border-top:1px solid #ffffff; margin-top:210px;">
								<button class="btn btn-primary">ตกลง</button>
								<button class="btn btn-link">ยกเลิก</button>
								</form>
								</div>
								</div>
							</div>
							</div>
 						<!-- /องค์ประกอบของ Register User-->
						<!-- องค์ประกอบของ Register Manager-->
						<div id="modalRegistermanager" class="modal fade">
								<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
								<h3 class="modal-title" >สมัครสมาชิก(ผู้ขาย)</h3>
								<button class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
								<form action="save-member-manager.php" method="POST" enctype="multipart/form-data">
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="user-name">Username:</label>
								<input  type="text" id="pswd" placeholder="Password" 
									name="Username_member" class="form-control"></div>
                                    
                                    
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="pswd">Password: <small>รหัสอย่งน้อย 8 หลัก</small></label>
								<input  type="password" id="pswd" placeholder="Password" 
									name="Password_member" class="form-control" pattern="[A-Za-z0-9]{8}" title="รหัสอย่างน้อย 8 หลัก">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="re-pswd">Confirm Password:</label> 
									<input  type="password" id="re-pswd" placeholder="Re-Password" 
									class="form-control" name="Confirm" pattern="[A-Za-z0-9]{8}" title="รหัสอย่างน้อย 8 หลัก">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="login">Email:</label>
								<input  type="email" id="login" placeholder="example@hotmail.com" 
									class="form-control" name="email">
								</div>
								
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="tel">name:</label>
									<input  type="tel" id="tel" placeholder="Jesse Lingard" 
									class="form-control" name="name_member" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร">
								</div>

								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="name">lastname: </label>
									<input  type="text" id="name" placeholder="Jesse Lingard" 
									class="form-control" name="lastname_member" required pattern="[a-zA-Zก-ุฯ-๙\s]*" title="กรุณากรอกตัวอักษร">
								</div>

								

								

								 <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								      <label for="comment">address:</label>
								      <textarea class="form-control" rows="5" id="comment" name="address_member"></textarea>
								    </div>

								  <!--   <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="tel">วันเกิด:</label>
									<input  type="tel" id="tel" placeholder="วว/ดด/ปป" 
									class="form-control" name="date_member">
								</div> -->
								
								

								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="name">phone:</label>
									<input  type="text" id="name" placeholder="08x-xxx-xxxx" 
									class="form-control" name="phone_member" required pattern="[0-9\s]{10}" title="กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง">
								</div>

								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="name">เพศ:</label><br>
									 <input type="radio" name="gender_member" value="ชาย" checked>ชาย
									 <input type="radio" name="gender_member" value="หญิง"> หญิง<br><br>
									

									   
								</div>

								

								<div class="form-group">
				                    <label for="name">เพิ่มรูปโปสเตอร์</label>
				                    <input class="form-control-file" id="e_profile" type="file"  name="img_member" >
				                  </div>
								
								
								</div>
								<div class="modal-footer" style="border-top:1px solid #ffffff; margin-top:216px;">
								<button class="btn btn-primary">ตกลง</button>
								<button class="btn btn-link">ยกเลิก</button>
								
								</div>
								</form>
								</div>
								
							</div>
							</div>
 						<!-- /องค์ประกอบของ Register Manager -->	
						</li>
                        <!-- /Account -->
                        
                      
						 <li  class="header-cart dropdown default-dropdown">
							<a id="btnSignin1" 	  aria-expanded="true">
								<div class="header-btns-icon">
									<!-- <i class="fa fa-shopping-cart"></i> -->
								</div>
							</a>
						</li> 