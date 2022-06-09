<html>

	<?php $page = 'dashboard'; include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
	<?php include('../database/db.php');?> 
	<link href="../css/dashboard.css" rel="stylesheet" type="text/css" />	
	<body>
	<div class="container">
		<div class="row dashboard">
			<div class="col-sm-12">Dashboard</div>
		</div>
		<div class="row analytics" >
			<div class="col-sm-4">
				<div class="card-group">
					<div class="card">
							<div class="card-body">
								<img src="../img/1.png" class="col-sm-3" alt="" id="icon">
								<?php 
								$sql = "SELECT * FROM products";
								if ($result=mysqli_query($conn,$sql)) {
   							 	$rowcount=mysqli_num_rows($result);}?>
								<p class="card-text"><?php echo "<span id='supplier'> $rowcount </span>"  . "<br>Products"?></p>
							</div>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
								<img src="../img/3.png" class="col-sm-3" alt="" id="icon">
							<?php 
								$sqll = "SELECT * FROM supplier";
								if ($Result=mysqli_query($conn,$sqll)) {
								$rowcounter=mysqli_num_rows($Result);}
							?>
							<p class="card-text"><?php echo "<span id='supplier'> $rowcounter </span>"  . "<br>Suppliers"?></p>
							</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
								<img src="../img/2.png" class="col-sm-3" alt="" id="icon">
							
							<?php 
								$Sqll = "SELECT * FROM clients";
								if ($Resultt=mysqli_query($conn,$Sqll)) {
								$Rowcounter=mysqli_num_rows($Resultt);}
							?>
							<p class="card-text"><?php echo "<span id='supplier'> $Rowcounter </span>"  . "<br>Clients"?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row orders" >
			<div class="col-sm-6">
				<div class="card-group">
					<div class="card">
							<div class="card-body">
								<h5 class="card-title orders">Sales Orders</h5>
								<table id="recent_clientorder" class="display">
										<thead>
											<tr>
												<th>Client Order No.</th>
												<th>Client Name</th>
												<th>Status</th>
											</tr>
										</thead>
											<tbody>
												<?php 
													$sql = "SELECT DISTINCT ClientOrderNo,ClientName,orderStatus FROM clientorder ORDER BY ClientOrderNo DESC LIMIT 3";
													$result = $conn->query($sql);
													?>
													<?php if ($result->num_rows > 0): ?>
														<?php while($row = $result->fetch_assoc()): ?>
															<tr>
																<td><?php echo $row["ClientOrderNo"]; ?></td>
																<td><?php echo $row["ClientName"]; ?></td>	
																<td><?php echo $row["orderStatus"]; ?></td>	
															</tr>
														<?php endwhile; ?>
													<?php endif; ?>
											</tbody>
									</table>
							</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title orders">Purchase Orders</h5>
							<table id="recent_purchaseorder" class="display">
								<thead>
									<tr>
										<th>Purchase Order No.</th>
										<th>Supplier Name</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
										<?php 
											$SSql = "SELECT DISTINCT PurchaseorderNo,SupplierName,OrderStatus FROM purchaseorder ORDER BY PurchaseorderNo DESC LIMIT 3  ";
											$RResult = $conn->query($SSql);
											?>
											<?php if ($RResult->num_rows > 0): ?>
												<?php while($row = $RResult->fetch_assoc()): ?>
													<tr>
														<td><?php echo $row["PurchaseorderNo"]; ?></td>
														<td><?php echo $row["SupplierName"]; ?></td>	
														<td><?php echo $row["OrderStatus"]; ?></td>	
													</tr>
												<?php endwhile; ?>
											<?php endif; ?>
									</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	</body>
	<script>
	$(document).ready(function () {
		$('#recent_clientorder').DataTable();
		$('#recent_purchaseorder').DataTable();
		
	});
	var table = $('#recent_clientorder').DataTable({
    pageLength : 3,
    lengthMenu: [[3], [3]]
  })
  	var potable = $('#recent_purchaseorder').DataTable({
    pageLength : 3,
    lengthMenu: [[3], [3]]
  })
	</script>
</html>