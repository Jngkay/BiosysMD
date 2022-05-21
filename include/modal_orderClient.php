<div id="myModal" class="modal">
    <div class="modal-content">
		<form>
		    <div class="header">
				<h3 id="Title">Create Order Client</h3>
				<span class="close">&times;</span>
			</div>
			<div class="form-group">
			    <input type="text" name="" id="numorder"class="form-control" placeholder="Number of Order items">
			</div>
            <div class="form-group">
			    <button  type="submit" class="action next" id="next">Next</button>
			</div>
		</form>
	</div>
</div>

<div id="addClientOrder" class="modal">
    <div class="modal-content">
			<!-- <form action="#" method="POST"> -->
				<div class="header">
					<h3 id="Title">Add Client Order</h3>
					<span class="close">&times;</span>
				</div>

					<div class="form-group">
						<input type="text" class="form-control" name="" placeholder="Client Order ID">
					</div>

                    <div class="form-group">
						<input type="text" class="form-control" name="" placeholder="Client Name">
					</div>

				    <hr>
                    <!-- Here are the items form generated -->
                    <div id="items-add"></div>

					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary next">Add</button>
					</div>
			<!-- </form> -->
	 </div>
</div>
