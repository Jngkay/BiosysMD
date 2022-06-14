<div id="myModal" class="modal">
    <div class="modal-content">
		<form action="" method="">
		    <div class="header">
				<h3 id="Title">Create Order Client</h3>
				<span class="close">&times;</span>
			</div>
			<div class="form-group">
			    <input type="number" name="numorder" id="numorder"class="form-control" placeholder="Number of Order items">
			</div>
            <div class="form-group">
			    <button class="action next" id="next">Next</button>
			</div>
		</form>
	</div>
</div>

<div id="addClientOrder" class="modal">
    <div class="modal-content">
			<form onsubmit="return alert('Client Order added.');" action="../actions/orderclient_add.php" method="POST">
				<input type="hidden" name="numorder" id="inputnum">
				<div class="header">
					<h3 id="Title">Add Client Order</h3>
					<span class="close">&times;</span>
				</div>
				<?php
					$sqll = "SELECT * FROM clients"; 
					$resultt = $conn->query($sqll);	
				?>
					<div class="form-group clientorderno">
						<input type="text" class="form-control" name="clientId" value="<?php echo date('dHis'); ?>" placeholder="Client Order No">
					</div>
					<select class="form-select" name="clientName">
						<?php if ($resultt->num_rows > 0): ?>
							<?php while($row = $resultt->fetch_assoc()): ?>				
								<option value="<?php echo $row["ClientName"]?>"> <?php echo $row["ClientName"]?> </option>
							<?php endwhile; ?>
						<?php endif; ?>
					</select>

                    

				    <hr>
                    <!-- Here are the items form generated -->
                    <div id="items-add"></div>
					<div class="form-group">
						<label>Order Status</label>
						<select name="orderStatus" class="form-control">
							<option value="New">New</option>
							<option value="Complete">Complete</option>
							<option value="Cancelled">Cancelled</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Create Order</button>
					</div>
			</form>
	 </div>
</div>
<div id="vieworderModal" class="modal">
	<div class="modal-content">
		<div class="header">
			<h3 id="Title">Order Details</h3>
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
		<form action="../actions/orderclient_update.php" method="POST">
			<div class="form-group">
					<select name="orderStatus" class="form-control" id="OrderStatus">
						<option value="New">New</option>
						<option value="Complete">Complete</option>
						<option value="Cancelled">Cancelled</option>
					</select>
			</div>
			<div class="form-group">
					<button type="submit" name="submit"class="btn btn-primary">Update</button>
			</div>
				<input name="clientorderno" id="clientorderno" type="hidden">
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