<?php 
	$id_mem = $_GET['id_member']; 
	
?>					
<!-- Account -->
<li class="header-account dropdown default-dropdown">
	<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
		<div class="header-btns-icon">
			<i class="fa fa-user-o"></i>
		</div>
		<strong class="text-uppercase">
			<?php
			echo $_SESSION['mname'];
			?>
		</strong>
		<i class="fa fa-caret-down"></i></strong>
	</div>
	<a href="logout.php" class="">Logout</a>
	<ul class="custom-menu">
		<li><a href="manager.php?id_member=<?php echo $id_mem; ?>#profile"><i class="fa fa-user-o"></i> My Account</a></li>
		<li><a href="manager.php?id_member=<?php echo $id_mem; ?>#product"><i class="fa fa-heart-o"></i> My Product</a></li>
		<li><a href="add-product.php?id_member=<?php echo $id_mem; ?>"><i class="fa fa-exchange"></i> Add Product</a></li>
	</ul>
</li>
<!-- /Account -->
                        