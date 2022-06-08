<html>
	<?php include('../include/header.php');?>
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
								<h5 class="card-title">Products</h5>
								<?php 
								$sql = "SELECT * FROM products";
								if ($result=mysqli_query($conn,$sql)) {
   							 	$rowcount=mysqli_num_rows($result);}?>
								<p class="card-text"><?php echo $rowcount . " Items"?></p>
							</div>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Supplier</h5>
							<?php 
								$sqll = "SELECT * FROM supplier";
								if ($Result=mysqli_query($conn,$sqll)) {
								$rowcounter=mysqli_num_rows($Result);}
							?>
							<p class="card-text"><?php echo $rowcounter . " companies"?></p>
							</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Client</h5>
							<?php 
								$Sqll = "SELECT * FROM clients";
								if ($Resultt=mysqli_query($conn,$Sqll)) {
								$Rowcounter=mysqli_num_rows($Resultt);}
							?>
							<p class="card-text"><?php echo $rowcounter . " customers"?></p>
						</div>
					</div>
				</div>
			</div>
			</div>
		<div class="row sales">
			<div class="col-sm-12">
				<div class="card-group">
						<div class="card">
								<div class="card-body">
									<h5 class="card-title">Recent Sales</h5>
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
													$sql = "SELECT DISTINCT ClientOrderNo,ClientName,orderStatus FROM clientorder";
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
												<?php
													$conn->close();
												?>
											</tbody>
									</table>
								</div>
						</div>
				</div>
		</div>
		<div class="row purchase">
			<div class="col-sm-12">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Recent Purchase</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
		
	});
	var table = $('#recent_clientorder').DataTable({
    pageLength : 5,
    lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
  })
	</script>
</html>