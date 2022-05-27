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
<<<<<<< HEAD
	<?php include('../include/modalscript_orderPurchase.php');?>
=======
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
>>>>>>> d2300a056f1d11ff0de43de4d996d1d29e41268c
</html>
