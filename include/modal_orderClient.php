<div id="myModal" class="modal">
    <div class="modal-content">
		<form>
		    <div class="header">
				<h3 id="Title">Create Order Client</h3>
				<span class="close">&times;</span>
			</div>
			<div class="form-group">
			    <input type="number" name="" id="numorder"class="form-control" placeholder="Number of Order items">
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
				<div class="header">
					<h3 id="Title">Add Client Order</h3>
					<span class="close">&times;</span>
				</div>
				<?php
					$sqll = "SELECT * FROM clients"; 
					$resultt = $conn->query($sqll);	
				?>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Client Id">
					</div>
					<select class="form-select">
						<?php if ($resultt->num_rows > 0): ?>
							<?php while($row = $resultt->fetch_assoc()): ?>				
								<option value="<?php echo $row["ClientId"]?>"> <?php echo $row["ClientName"]?> </option>
							<?php endwhile; ?>
						<?php endif; ?>
					</select>

                    

				    <hr>
                    <!-- Here are the items form generated -->
                    <div id="items-add"></div>
					<div class="form-group">
						<input type="text" class="form-control" name="status" placeholder="Order Status">
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary next">Add</button>
					</div>
			</form>
	 </div>
</div>
