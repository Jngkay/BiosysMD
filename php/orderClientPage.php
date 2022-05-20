<html>
	<?php include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
<body>
	<div class="label clientOrder">List of Client Orders</div>
		<table id="clientOrder_list" class="display">
			<thead>
				<tr>
					<th>Client Order No.</th>
					<th>Client Name</th>
					<th>Order List</th>
					<th>Status</th>
					<th>Total Amount</th>	
					<th>Invoice No.</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>11000</td>
					<td>Josmef Enterprises</td>	
					<td>Facemask</td>	
					<td>Complete</td>	
					<td>1,200.00</td>	
					<td>1614</td>	
					<td><button class="action update">Update</button><button class="action delete">Delete</button></td>	
				</tr>
				<tr>
					<td>11001</td>
					<td>Medicus Philippines Inc.</td>	
					<td>Urine Strips 10SG</td>	
					<td>Partial</td>	
					<td>15,000.00</td>	
					<td>1615</td>	
					<td><button class="action update">Update</button><button class="action delete">Delete</button></td>	
				</tr>
				<tr>
					<td>11002</td>
					<td>Medicus Philippines Inc.</td>	
					<td>Urine Strips 4SG</td>	
					<td>Partial</td>	
					<td>640.00</td>	
					<td>1616</td>	
					<td><button class="action update">Update</button><button class="action delete">Delete</button></td>	
				</tr>
				<tr>
					<td>11003</td>
					<td>Qualimed Hospital</td>	
					<td>Urine Strips 4SG</td>	
					<td>Complete</td>	
					<td>6,400.00</td>	
					<td>1617</td>	
					<td><button class="action update">Update</button><button class="action delete">Delete</button></td>	
				</tr>
				<tr>
					<td>11004</td>
					<td>HealthSense Laboratory</td>	
					<td>Solution Pack Calcium</td>	
					<td>Complete</td>	
					<td>9,800.00</td>	
					<td>1618</td>	
					<td><button class="action update">Update</button><button class="action delete">Delete</button></td>	
				</tr>
			</tbody>
		</table>
</body>
			<script>
			$(document).ready( function () {
    $('#clientOrder_list').DataTable();
} );
		</script>
	
</html>
