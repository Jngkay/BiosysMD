<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<form action="../actions/supplier_add.php" method="POST">
			<div class="header">
				<h3 id="Title">Create Supplier</h3>
				<span class="close">&times;</span>
			</div>
			
            <div class="form-group">
				<input type="text" name="supname"class="form-control" placeholder="Supplier Name">
			</div>
			<div class="form-group">
				<input type="text" name="supaddress"class="form-control"  placeholder="Supplier Address">
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Add</button>
			</div>
		</form>
	</div>
</div>