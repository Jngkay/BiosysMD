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
					<th>Total Amount</th>	
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>BMT0001</td>
					<td>Bioline Medical System</td>	
					<td>Solution Pack Expand</td>	
					<td>Complete</td>	
					<td>104,000.00</td>	
					<td><button class="action delete">Delete</button></td>	
				</tr>
				<tr>
					<td>BMT0002</td>
					<td>JMB Medical Trading</td>	
					<td>LightWeight WheelChair</td>	
					<td>Complete</td>	
					<td>50,000.00</td>	
					<td><button class="action delete">Delete</button></td>	
				</tr>
				<tr>
					<td>BMT0003</td>
					<td>Labsolution Technologies Inc.</td>	
					<td>HBA1C IChroma</td>	
					<td>Complete</td>	
					<td>5,000.00</td>	
					<td><button class="action delete">Delete</button></td>	
				</tr>
				<tr>
					<td>BMT0004</td>
					<td>Bioline Medical System</td>	
					<td>Urine Strips 4SG</td>	
					<td>Complete</td>	
					<td>90,400.00</td>		
					<td><button class="action delete">Delete</button></td>	
				</tr>
				<tr>
					<td>BMT0005</td>
					<td>Sterilab Co.</td>	
					<td>Specimen Colection Cup</td>	
					<td>Complete</td>	
					<td>2,400.00</td>		
					<td><button class="action delete">Delete</button></td>	
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
