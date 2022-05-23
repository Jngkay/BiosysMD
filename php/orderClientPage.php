<html>
	<?php 
		include('../include/header.php');
		include('../include/navbar.php');	
		include('../database/db.php');
	
		$s = "SELECT * FROM products"; 
		$res = $conn->query($s);	
	?>

<body>
	<div class="label clientOrder">List of Client Orders
		<button id="myBtn">Add</button>
		<?php include('../include/modal_orderClient.php');?>
	</div>

	<table id="clientOrder_list" class="display">
		<thead>
			<tr>
				<th>Client Order No.</th>
				<th>Client Name</th>
				<th>Item Order</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql = "SELECT * FROM clientorder"; //get all products
				$result = $conn->query($sql);
			?>

				<?php if ($result->num_rows > 0): ?>
					<?php while($row = $result->fetch_assoc()): ?>
					<tr>
						<td>
							<?php echo $row["ClientOrderNo"]; ?>
						</td>
						<td>
							<?php echo $row["ClientName"]; ?>
						</td>
						<td>
							<?php echo $row["OrderItem"]; ?>
						</td>
						<td>
							<?php echo $row["Status"]; ?>
						</td>
						<td><button class="action receipt">Receipt</button>
							<button class="action update">Update</button>
							<a class="action delete">Delete
						</td>
					</tr>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php $conn->close(); ?>
		</tbody>
	</table>
</body>

<?php include('../include/modalscript_orderClient.php');?>
</html>