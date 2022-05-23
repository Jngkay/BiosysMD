<html>
	<?php 
		include('../include/header.php');
		include('../include/navbar.php');
		include('../database/db.php');

		$sql = "SELECT * FROM products"; //get all products
		$result = $conn->query($sql);
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


				$("#myBtn").click(function(){
					$("#myModal").show();
				});

				$(".next").click(function(e){
					e.preventDefault();
					$("#myModal").hide();
					$("#addPurchaseOrder").show();
					
					for(var x = 1; x <= $("#numorder").val(); x++){
						$("#items-add").append(`
							<h4 id="Title">Item ${x}: </h4>
							
							<select class="form-select">
								<?php if ($result->num_rows > 0): ?>
									<?php while($row = $result->fetch_assoc()): ?>				
											<option value="<?php echo $row["ProdId"]?>"> <?php echo $row["ProdDescription"]?> </option>
									<?php endwhile; ?>
								<?php endif; ?>
							</select>

							<div class="form-group">
								<input type="text" class="form-control" name="unitprice" placeholder="Quantity">
							</div>
						`);
					};
				});

				$("#add-submit").click(function(){
					alert("Test");
					$("#addPurchaseOrder").hide();
					$("#items-add").empty();
				});

				$(".close").click(function(){
					$("#myModal").hide();
				});

				$(".close").click(function(){
					$("#addPurchaseOrder").hide();
					$("#items-add").empty();
				});

			} );
		</script>
</html>
