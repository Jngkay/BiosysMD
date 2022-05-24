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
			<form action="../actions/orderclient_add.php" method="POST">
				<input type="hidden" name="numorder" id="inputnum">
				<div class="header">
					<h3 id="Title">Add Client Order</h3>
					<span class="close">&times;</span>
				</div>
				<?php
					$sqll = "SELECT * FROM clients"; 
					$resultt = $conn->query($sqll);	
				?>
					<div class="form-group">
						<input type="text" class="form-control" name="clientId" placeholder="Client Id">
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
						<input type="text" class="form-control" name="orderStatus" placeholder="Order Status">
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Create Order</button>
					</div>
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