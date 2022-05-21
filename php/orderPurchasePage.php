<html>
	<?php include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
<body>
	<div class="label clientOrder">List of Purchase Orders</div>
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
				<tr>
					<td>BMT0001</td>
					<td>Bioline Medical System</td>	
					<td>Solution Pack Expand</td>	
					<td>Complete</td>	
					<td>
						<button class="action update">Update</button>
						<button class="action delete">Delete</button>
						<button class="action" style="background: #57B471; color: white">Receipt</button>
					</td>	
				</tr>
			</tbody>
		</table>
</body>
			<script>
			$(document).ready( function () {
    $('#purchaseOrder_list').DataTable();
} );
		</script>
	
</html>
