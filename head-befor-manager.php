
<!-- Account -->
<li class="header-account dropdown default-dropdown">
							<a id="btnSignin" class="">Login</a> / 
							<div class="dropdown">
								<a onclick="myFunction()" class="dropbtn">Register</a>
								<div id="myDropdown" class="dropdown-content">
										<a id="Register">User</a>
										<a id="Registermanager">Manager</a>
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
								<form>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="user-name">Username:</label>
								<input  type="test" id="pswd" placeholder="Password" 
									class="form-control">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="pswd">Password:</label>
								<input  type="password" id="pswd" placeholder="Password" 
									class="form-control">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="re-pswd">Confirm Password:</label> 
									<input  type="password" id="re-pswd" placeholder="Re-Password" 
									class="form-control">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="login">Email:</label>
								<input  type="text" id="login" placeholder="example@hotmail.com" 
									class="form-control">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="name">Fullname:</label>
									<input  type="text" id="name" placeholder="Jesse Lingard" 
									class="form-control">
								</div>
								
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="tel">Tel:</label>
									<input  type="tel" id="tel" placeholder="08x-xxx-xxxx" 
									class="form-control">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="lastname">Sex:</label> 
									<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
									<label class="form-check-label" for="inlineRadio1">Male</label>
									<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
									<label class="form-check-label" for="inlineRadio2">Female</label>
									</div>
								</div>
								
								</form>
								</div>
								<div class="modal-footer" style="border-top:1px solid #ffffff; margin-top:210px;">
								<button class="btn btn-primary">ตกลง</button>
								<button class="btn btn-link">ยกเลิก</button>
								
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
								<h3 class="modal-title" >สมัครสมาชิก</h3>
								<button class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
								<form>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="user-name">Username:</label>
								<input  type="test" id="pswd" placeholder="Password" 
									class="form-control">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="pswd">Password:</label>
								<input  type="password" id="pswd" placeholder="Password" 
									class="form-control">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="re-pswd">Confirm Password:</label> 
									<input  type="password" id="re-pswd" placeholder="Re-Password" 
									class="form-control">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<label for="email-com">Email:</label>
								<input  type="text" id="login" placeholder="example@hotmail.com" 
									class="form-control">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="name">Name:</label>
									<input  type="text" id="name" placeholder="Prayut" 
									class="form-control">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="lastname">Lastname:</label> 
									<input  type="text" id="lastname" placeholder="Chan-O-cha" 
									class="form-control">
								</div>
								<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<label for="tel">Tel:</label>
									<input  type="tel" id="tel" placeholder="08x-xxx-xxxx" 
									class="form-control">
								</div>
								
								</form>
								</div>
								<div class="modal-footer" style="border-top:1px solid #ffffff; margin-top:216px;">
								<button class="btn btn-primary">ตกลง</button>
								<button class="btn btn-link">ยกเลิก</button>
								
								</div>
								</div>
							</div>
							</div>
 						<!-- /องค์ประกอบของ Register Manager -->	
						</li>
                        <!-- /Account -->
                        
                        