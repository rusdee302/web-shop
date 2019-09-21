<!-- Account -->


					<?php

					$id = $_SESSION['mid'];

						$sql = "SELECT * FROM `member` WHERE `id_member` = $id";
						$result = $con->query($sql);

						if($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{
								$img = $row['img_member'];
							}
						}
					?>

					

						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">

									<img src="images/member/<?php echo $img; ?>" class="img-profile-member"/>

								<strong class="text-uppercase">
								<?php
									echo $_SESSION['mname'];
								?>
								</strong><i class="fa fa-caret-down"></i></strong>

							</div>
							<br/>
							<!-- <a href="logout.php" class="btn btn-xs btn-danger">ออกจากระบบ</a> -->
							<ul class="custom-menu">
								<li><a href="profile.php?id_member=<?php echo $id_member; ?>"><i class="fa fa-user-o"></i>บัญชีของฉัน</a></li>
								<li><a href="order-list-user.php?id_member=<?php echo $id; ?>"><i class="fa fa-heart-o"></i> รายการซื้อ</a></li>
								<li><a href="cart-total.php?id_member=<?php echo $id; ?>"><i class="fa fa-exchange"></i> ตะกร้าสินค้า</a></li>
								<li><a href="return-detail.php?id_member=<?php echo $id; ?>"><i class="fa fa-window-close-o"></i> การส่งคืนและยกเลิกสินค้า</a></li>
								<li><a href="logout.php"><i class="fa fa-window-close-o"></i> ออกจากระบบ</a></li>
							</ul>
						</li>
                        <!-- /Account -->
