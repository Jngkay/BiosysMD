<html>
	<?php 
		include('../include/header.php');
		include('../include/navbar.php');
		include('../database/db.php');
		
		$s = "SELECT * FROM products"; 
		$res = $conn->query($s);	
	?>

<body>
	<div class="label clientOrder">
		List of Purchase Orders
		<button id="myBtn">Add</button>
		<!-- The Modal -->
		<?php include('../include/modal_PurchaseOrder.php');?>
	</div>
		<table id="purchaseOrder_list" class="display">
			<thead>
				<tr>
					<th>Purchase Order No.</th>
					<th>Supplier Name</th>
					<th>Order List</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$sql = "SELECT DISTINCT PurchaseorderNo,SupplierName,OrderStatus FROM purchaseorder";
					$result = $conn->query($sql);
				?>
					<?php if ($result->num_rows > 0): ?>
						<?php while($row = $result->fetch_assoc()): ?>
							<tr>
								<td><?php echo $row["PurchaseorderNo"]; ?></td>
								<td><?php echo $row["SupplierName"]; ?></td>	
								<td><button class="viewbtn" id="<?php echo $row["PurchaseorderNo"]; ?>">View Order</button></td>
								<td><?php echo $row["OrderStatus"]; ?></td>	
								<td>
									<button class="action update" id="update-status" 
									data-id="<?php echo $row["PurchaseorderNo"]; ?>" 
									data-status="<?php echo $row["OrderStatus"]; ?>" >
										Update Status
									</button>

									<a onclick="return alert('Purchase Order Deleted');" href="../actions/purchaseorder_delete.php?cid=<?php echo $row["PurchaseorderNo"]; ?>">
										<button class="action delete" href="">Delete</button>
									</a>
								</td>
							</tr>
		
						<?php endwhile; ?>
					<?php endif; ?>
		
					<?php $conn->close(); ?>
		
			</tbody>
		</table>
</body>
	<?php include('../include/modalscript_orderPurchase.php');?>
</html>
