<html>
	<?php include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
	<?php include('../database/db.php');?> 
	<body>
		<div class="label clientList">Client List
		<button id="myBtn">Add</button>
		<div id="myModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<form>
						<div class="header">
							<h3 id="Title">Create Client</h3>
							<span class="close">&times;</span>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Client Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control"  placeholder="Client Address">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Add</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<table id="client_list" class="display">
			<thead>
				<tr>
					<th>Client ID</th>
					<th>Client Name</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
			</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM clients"; //get all products
						$result = $conn->query($sql);
					?>

					<?php if ($result->num_rows > 0): ?>
						<?php while($row = $result->fetch_assoc()): ?>
							<tr>
								<td><?php echo $row["ClientId"]; ?></td>
								<td><?php echo $row["ClientName"]; ?></td>	
								<td><?php echo $row["ClientAddress"]; ?></td>
								<td><a href="../actions/client_delete.php?cid=<?php echo $row["ClientId"];?>" class="action delete">Delete</td>	
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
				$('#client_list').DataTable();
				} );
			</script>
			<script src="../include/modalscript.js"></script>
	</body>
	
</html>