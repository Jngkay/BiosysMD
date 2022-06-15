<script>
	$(document).ready(function () {

		var itemprice = {};
	
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
					<select class="form-select" name="productId[]" id="select-products${x}">
						<?php if ($res->num_rows > 0): ?>
							<?php while($row = $res->fetch_assoc()): ?>	
                                ${itemprice[<?php echo $row["ProdId"] ?>] = "<?php echo sprintf('%0.2f', $row["ProdUnitPrice"])?>"};					
								<?php if($row["ProdQuantity"] > 0): ?>
								<option value="<?php echo $row["ProdId"]?>"> <?php echo $row["ProdDescription"]?> </option>
								<?php endif; ?>	
							<?php endwhile; ?>
						<?php endif; ?>
					</select>
					<div class = "form-group">
						<input type="text" class="form-control" name="qty[]" placeholder="Quantity">
					</div>
					<div class="input-group">
						 <div class="input-group-prepend">
						        <span class="input-group-text" id="inputGroupPrepend">₱</span>
						 </div>
	                        <input type="text" class="form-control" id="price${x}" name="unitPrice[]" placeholder="Unit Price ₱">
					</div>
					
						`);

						var getProductId = $("#select-products1 :selected").val();
						$("#price" + x).val(itemprice[getProductId]);
					};

					$('select').change(function () {
						var getItemId = $(this).prop("id");
						var getnumber = parseInt(getItemId.replace(/[^0-9.]/g, ""));
						var getProductId = $("#" + getItemId + ' :selected').val();
						$("#price" + getnumber).val(itemprice[getProductId]);
					}); 
				});

		$(".close").click(function () {
			$("#myModal").hide();
		});

		$(".close").click(function () {
			$("#addClientOrder").hide();
			$("#items-add").empty();
		});
        $("#add-submit").click(function(){
            $("#addClientOrder").hide();
            $("#items-add").empty();
        });

		$(".viewbtn").click(function () {
			id_order = $(this).attr('id')
			$.ajax({url: "../actions/vieworder.php",
			method: 'post',
			data:{order_id:id_order},
			success: function(result){
				$(".modalbody").html(result)
			}});
			$("#vieworderModal").show();

		});

		$(".close").click(function () {
			$("#vieworderModal").hide();
		});
	

		$(".close").click(function () {
			$("#updateStatus").hide();
		});
		
		$(".update").click(function(){
			$("#updateStatus").show();
			var status = $(this).data("status");
			var clientorderno = $(this).data("clientorderno");
			
			$("#OrderStatus").val(status);
			$("#clientorderno").val(clientorderno);
		});

	});
</script>