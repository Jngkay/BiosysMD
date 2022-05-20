<html>
	<?php include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
	<?php include('../database/db.php');?> 
	<body>
		<div class="label productList">Product List
			<button id="myBtn">Add</button>
			<!-- The Modal -->
				<div id="myModal" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
						<form action="../actions/product_add.php" method="POST">
							<div class="header">
							<h3 id="Title">Create Product</h3>
							<span class="close">&times;</span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="productdesc"placeholder="Product Description">
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  name="productqty"placeholder="Product Quantity">
							</div>
							<div class="form-group">	
								<input type="text" class="form-control" name="productunit" placeholder="Product Unit">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="unitprice"placeholder="Product Unit Price">
							</div>
							<div class="form-group">
								<input type="date" class="form-control" name="expiry" placeholder="Product Expiration Date">
							</div>
							<div class="form-group">
								<button type="submit" name="submit"class="btn btn-primary">Add</button>
							</div>
						</form>
					</div>
				</div>
		</div>
		<table id="product_list" class="display">
			<thead>
				<tr>
					<th>Item ID</th>
					<th>Item Description</th>
					<th>Quantity</th>
					<th>Unit</th>	
					<th>Unit Price</th>
					<th>Exp. Date</th>
					<th>Action</th>
				</tr>
			</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM products"; //get all products
						$result = $conn->query($sql);
					?>

					<?php if ($result->num_rows > 0): ?>
						<?php while($row = $result->fetch_assoc()): ?>
							<tr>
								<td><?php echo $row["ProdId"]; ?></td>
								<td><?php echo $row["ProdDescription"]; ?></td>	
								<td><?php echo $row["ProdQuantity"]; ?></td>	
								<td><?php echo $row["ProdUnit"]; ?></td>	
								<td><?php echo $row["ProdUnitPrice"]; ?></td>	
								<td><?php echo $row["ProdExpiry"]; ?></td>	
								<td><button class="action update">Update</button>
								<a href="../actions/product_delete.php?pid=<?php echo $row["ProdId"];?>" class="action delete">Delete</td>	
							</tr>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php
						$conn->close();
					?>
				</tbody>
		</table>
		
	<script>
			$(document).ready( function () {
					$('#product_list').DataTable();
			} );
	</script>
	<script src="../include/modalscript.js"></script>
	</body>
</html> 