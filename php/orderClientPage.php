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
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql = "SELECT DISTINCT ClientOrderNo,ClientName,orderStatus FROM clientorder";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
				echo '<tr>';
					echo '<td>' . $row['ClientOrderNo'] . '</td>';
					echo '<td>' . $row['ClientName'] . '</td>';
					echo '<td><button>View Order</button></td>';
					echo '<td>' . $row['orderStatus'] . '</td>';

				echo '</tr>';
			  }
			} 
			$conn->close();
			?>
		</tbody>
	</table>
</body>

<?php include('../include/modalscript_orderClient.php');?>
</html>