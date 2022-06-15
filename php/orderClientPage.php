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
				<th>Orders</th>
				<th>Status</th>
				<th>Action</th>
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
						<td><button class="viewbtn" id="<?php echo $row["ClientOrderNo"]; ?>">View Order</button></td>
						<td><?php echo $row["orderStatus"]; ?></td>	
						<td><button class="action update" 
						data-status="<?php echo $row["orderStatus"]; ?>"
						data-clientorderno="<?php echo $row["ClientOrderNo"]; ?>">Update Status</button>
						<a class="action delete" onclick="return alert('Client Order Deleted');" href="../actions/orderclient_delete.php?clientorderno=<?php echo $row["ClientOrderNo"];?>">Delete</a></td>
					</tr>

				<?php endwhile; ?>
			<?php endif; ?>

			<?php $conn->close(); ?>
					
		</tbody>
	</table>
</body>

<?php include('../include/modalscript_orderClient.php');?>
</html>