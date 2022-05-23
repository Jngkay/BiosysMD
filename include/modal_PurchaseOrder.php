<div id="myModal" class="modal">
	<!-- Modal content -->
		<div class="modal-content">
			<form name="form" action="#" method="get">

				<div class="header">
					<h3 id="Title">Number</h3>
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
			<!-- <form action="#" method="POST"> -->

				<div class="header">
					<h3 id="Title">Add Purchase Order</h3>
					<span class="close">&times;</span>
				</div>

					<div class="form-group">
						<input type="text" class="form-control" name="unitprice" placeholder="Purchase Order ID">
					</div>

					<?php
						$s = "SELECT * FROM supplier"; //get all products
						$r = $conn->query($s);
					?>

					<select class="form-select">
						<?php if ($r->num_rows > 0): ?>
							<?php while($row = $r->fetch_assoc()): ?>				
									<option value="<?php echo $row["SupId"]?>"> <?php echo $row["SupName"]?> </option>
							<?php endwhile; ?>
						<?php endif; ?>
					</select>

				    <hr>

                    <!-- Here are the items form generated -->
                    <div id="items-add"></div>

					<div class="form-group">
						<button type="submit" name="submit" id="add-submit" class="btn btn-primary next">Add</button>
					</div>
			<!-- </form> -->
		</div>
</div>

<!-- <div id="updateModal" class="modal"> -->
	<!-- Modal content -->
	<!-- <div class="modal-content">
		<form action="" method="POST">

			<div class="header">
				<h3 id="Title">Update Product</h3>
				<span class="close">&times;</span>
			</div>

				<div class="form-group">
					<input type="text" id="proddesc" class="form-control" name="productdesc" placeholder="Product Description">
				</div>
				<div class="form-group">
					<input type="text" id="prodqty" class="form-control"  name="productqty" placeholder="Product Quantity">
				</div>
				<div class="form-group">	
					<input type="text" id="produnit" class="form-control" name="productunit" placeholder="Product Unit">
				</div>
				<div class="form-group">
					<input type="text" id="prodUprice"class="form-control" name="unitprice" placeholder="Product Unit Price">
				</div>
				<div class="form-group">
					<input type="date" id="expiry" class="form-control" name="expiry" placeholder="Product Expiration Date">
				</div> -->
                <!-- Product ID -->
                <!-- <input name="ProdId" id="ProdId" type="hidden">
				<div class="form-group">
					<button type="submit" name="submit"class="btn btn-primary">Add</button>
				</div>
		</form>
	</div>
</div>                 -->