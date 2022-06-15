<html>
	<?php $page = 'viewPage'; include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
	<?php include('../database/db.php');?> 
	<body>
		<div class="label productList">Product List
			<button id="myBtn">Add</button>
				<!-- The Modal -->
				<?php include('../include/modal_Product.php');?>
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
								<td><?php echo number_format($row["ProdUnitPrice"], 2); ?></td>	
								<td><?php echo $row["ProdExpiry"]; ?></td>	
								<td><button class="action update" 
								data-id="<?php echo $row["ProdId"]; ?>"
								data-desc="<?php echo $row["ProdDescription"]; ?>"
								data-qty="<?php echo $row["ProdQuantity"]; ?>"
								data-unit="<?php echo $row["ProdUnit"]; ?>"
								data-uprice="<?php echo $row["ProdUnitPrice"]; ?>"
								data-expiry="<?php echo $row["ProdExpiry"]; ?>"
								>Update</button>
								<a onclick="return alert('Product Deleted');" href="../actions/product_delete.php?pid=<?php echo $row["ProdId"];?>" class="action delete">Delete</td>	
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
			});
	</script>
	<script src="../include/modalscript.js"></script>
	</body>
</html> 