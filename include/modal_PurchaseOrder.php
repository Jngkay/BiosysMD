<div id="myModal" class="modal">
	<!-- Modal content -->
		<div class="modal-content">
			<form name="form" action="#" method="get">

				<div class="header">
					<h3 id="Title">Create Purchase Order</h3>
					<span class="close">&times;</span>
				</div>

					<div class="form-group">
						<input type="number" class="form-control" name="numorder" id="numorder" placeholder="Number of Order Items">
					</div>
				
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary next">Next</button>
					</div>
			</form> 
		</div>
</div>

<div id="addPurchaseOrder" class="modal">
	<!-- Modal content -->
		<div class="modal-content">
		<form onsubmit="return alert('Purchase Order added.');" action="../actions/orderpurchase_add.php" method="POST">
				<input type="hidden" name="numorder" id="inputnum">
				<div class="header">
					<h3 id="Title">Add Purchase Order</h3>
					<span class="close">&times;</span>
				</div>

				<?php
					$Sql = "SELECT * FROM supplier"; 
					$Result = $conn->query($Sql);	
				?>
					<div class="form-group pono">
						<input type="text" class="form-control" name="purchaseorderno" value="<?php echo date('dHis'); ?>"placeholder="Purchase Order No.">
					</div>

                    <select class="form-select" name="supplierName">
						<?php if ($Result->num_rows > 0): ?>
							<?php while($row = $Result->fetch_assoc()): ?>				
								<option value="<?php echo $row["SupName"]?>"> <?php echo $row["SupName"]?> </option>
							<?php endwhile; ?>
						<?php endif; ?>
					</select>

				    <hr>

                    <!-- Here are the items form generated -->
                    <div id="items-add"></div>

					<div class="form-group">
						<label>Order Status</label>
						<select name="orderstatus" class="form-control">
							<option value="New">New</option>
							<option value="Complete">Complete</option>
							<option value="Cancelled">Cancelled</option>
						</select>
					</div>


					<div class="form-group">
						<button type="submit" name="submit"  class="btn btn-primary">Create Purchase Order</button>
					</div>
			</form>
		</div>
</div>
<div id="viewPO" class="modal">
	<div class="modal-content">
		<div class="header">
			<h3 id="Title">Purchase Order Details</h3>
			<span class="close">&times;</span>
		</div>
		<div class="modalbody">
		</div>
	</div>
</div>


<div id="updateStatus" class="modal">
	<div class="modal-content">
		<div class="header">
			<h3 id="Title">Update Order Status</h3>
			<span class="close">&times;</span>
		</div>
			<form action="../actions/orderpurchase_update.php" method="POST">
				<div class="form-group">
					<select name="orderstatus" class="form-control" id="orderStatus">
						<option value="New">New</option>
						<option value="Complete">Complete</option>
						<option value="Cancelled">Cancelled</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" name="submit"class="btn btn-primary">Update</button>
				</div>
				<input type="hidden" id="poID" name="purchaseOrderID">
			</form>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#next').click(function(){
			var numberOrder = $('#numorder').val();
			$('#inputnum').val(numberOrder);
		});
	});
	</script>				