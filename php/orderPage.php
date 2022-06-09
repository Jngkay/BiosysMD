<html>
	<?php $page = 'orderPage'; include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
	<link href="../css/orderPage.css" rel="stylesheet" type="text/css" />
	<body>
			<div class="card-group">
				
			  <div class="card">
				  <div class="card-body">
					  <h5 class="card-title">Client Orders</h5>
						<img src="../img/product.png" class="card-img-top" alt="...">
						<a href="orderClientPage.php"><button class="buttons-view">View</button></a>
				  </div>
			  </div>
				
			  <div class="card">
				  <div class="card-body">
					  <h5 class="card-title">Purchase Orders</h5>
						<img src="../img/client.png" class="card-img-top" alt="...">
						<a href="orderPurchasePage.php"><button class="buttons-view">View</button></a>
				  </div>
			  </div>
		</div>
	</body>
</html>