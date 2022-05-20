<div id="myModal" class="modal">
    <div class="modal-content">
		<form action="../actions/client_add.php" method="POST">
		    <div class="header">
				<h3 id="Title">Create Client</h3>
				<span class="close">&times;</span>
			</div>
			<div class="form-group">
			    <input type="text" name="clientname" class="form-control" placeholder="Client Name">
			</div>
			<div class="form-group">
				<input type="text" name="clientaddress"class="form-control"  placeholder="Client Address">
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Add</button>
			</div>
		</form>
	</div>
</div>