	
	<form action="save_cart1.php?id_product=<?php echo $id_product; ?>" method="post" >
							<div class="product-btns">
								<div class="qty-input"><br>
									<span class="text-uppercase">
										<strong>จำนวน&nbsp;&nbsp;&nbsp;&nbsp;</strong> </span>
									<input class="input" type="number" name="number">
									&nbsp;&nbsp;&nbsp;&nbsp;มีสินค้าทั้งหมด:<?php echo $stock; ?> ชิ้น<br></div>
								</div><br>
								<button class="primary-btn add-to-cart " name="gender" value="1" checked><i class="fa fa-shopping-cart"></i> เพิ่มไปยังรถเข็น</button>
								<button class="primary-btn add-to-cart" name="gender" value="2" checked><i class="fa fa-shopping-cart"></i> ซื้อสินค้า</button>
								<br>
							</form>