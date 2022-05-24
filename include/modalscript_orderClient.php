<script>
	$(document).ready(function () {
		$('#clientOrder_list').DataTable();

		$("#myBtn").click(function () {
			$("#myModal").show();
		});

		$(".close").click(function () {
			$("#myModal").hide();
		});

		$(".next").click(function (e) {
			e.preventDefault();
			$("#myModal").hide();
			$("#addClientOrder").show();


			for (var x = 1; x <= $("#numorder").val(); x++) {
				$("#items-add").append(`
					<h4 id="Title">Item ${x}: </h4>
					<select class="form-select" name="productId[]">
						<?php if ($res->num_rows > 0): ?>
							<?php while($row = $res->fetch_assoc()): ?>				
								<option value="<?php echo $row["ProdId"]?>"> <?php echo $row["ProdDescription"]?> </option>
							<?php endwhile; ?>
						<?php endif; ?>
					</select>
					<div class = "form-group">
						<input type="text" class="form-control" name="qty[]" placeholder="Quantity">
					</div>
					<div class = "form-group">
						<input type="text" class="form-control" name="unitPrice[]" placeholder="Unit Price">
					</div>
				`);
			};
		});

		$(".close").click(function () {
			$("#myModal").hide();
		});

		$(".close").click(function () {
			$("#addClientOrder").hide();
			$("#items-add").empty();
		});
        $("#add-submit").click(function(){
            alert("Test");
            $("#addClientOrder").hide();
            $("#items-add").empty();
        });

	});
</script>