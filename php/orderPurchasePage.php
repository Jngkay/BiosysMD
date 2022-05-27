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
				</tr>
			</thead>
			<tbody>
				<?php 
					$sql = "SELECT DISTINCT PurchaseorderNo,SupplierName,OrderStatus FROM purchaseorder";
					$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
				// output data of each row
					while($row = $result->fetch_assoc()) {
						echo '<tr>';
							echo '<td>' . $row['PurchaseorderNo'] . '</td>';
							echo '<td>' . $row['SupplierName'] . '</td>';
							echo '<td><button>View Order</button></td>';
							echo '<td>' . $row['OrderStatus'] . '</td>';

						echo '</tr>';
						}
				} 
				$conn->close();
				?>
			</tbody>
		</table>
</body>
	<?php include('../include/modalscript_orderPurchase.php');?>
</html>
