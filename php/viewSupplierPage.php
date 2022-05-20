<html>
	<?php include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
	<?php include('../database/db.php');?> 
	<link href="../css/ViewOrder.css" rel="stylesheet" type="text/css" />
	<body>
		<div class="label SupplierList">Supplier List
			<button id="myBtn">Add</button>
				<!-- The Modal -->
				<?php include('../include/modal_Supplier.php'); ?>
		</div>
		<table id="supplier_list" class="display">
			<thead>
				<tr>
					<th>Supplier ID</th>
					<th>Supplier Name</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
			</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM supplier"; //get all products
						$result = $conn->query($sql);
					?>

					<?php if ($result->num_rows > 0): ?>
						<?php while($row = $result->fetch_assoc()): ?>
							<tr>
								<td><?php echo $row["SupId"]; ?></td>
								<td><?php echo $row["SupName"]; ?></td>	
								<td><?php echo $row["SupAddress"]; ?></td>	
								<td><a href="../actions/supplier_delete.php?sid=<?php echo $row["SupId"];?>" class="action delete">Delete</td>	
							</tr>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php
						$conn->close();
					?>
				</tbody>
			</table>
				<script>
					$(document).ready( function () {
					$('#supplier_list').DataTable();
					} );
				</script>
				<script src="../include/modalscript.js"></script>
	</body>
	
</html>