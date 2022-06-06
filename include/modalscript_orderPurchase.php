<script>
			$(document).ready( function () {
				$('#purchaseOrder_list').DataTable();


				$("#myBtn").click(function(){
					$("#myModal").show();
				});

				$(".next").click(function(e){
					e.preventDefault();
					$("#myModal").hide();
					$("#addPurchaseOrder").show();
					
					for(var x = 1; x <= $("#numorder").val(); x++){
						$("#items-add").append(`
							<h4 id="Title">Item ${x}: </h4>
							<select class="form-select" name="productId[]">
                                <?php if ($res->num_rows > 0): ?>
                                    <?php while($row = $res->fetch_assoc()): ?>				
                                        <option value="<?php echo $row["ProdId"]?>"> <?php echo $row["ProdDescription"]?> </option>
                                    <?php endwhile; ?>
                                <?php endif; ?>
					        </select>

							<div class="form-group">
                                <input type="text" class="form-control" name="qty[]" placeholder="Quantity">
							</div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="unitPrice[]" placeholder="Unit Price">
							</div>
						`);
					};
				});

				$(".close").click(function(){
					$("#myModal").hide();
				});

				$(".close").click(function(){
					$("#addPurchaseOrder").hide();
				});

				$(".viewbtn").click(function () {
					id_POorder = $(this).attr('id')
					$.ajax({url: "../actions/viewPO.php",
					method: 'post',
					data:{POorder_id:id_POorder},
					success: function(result){
						$(".modalbody").html(result)
					}});
					$("#viewPO").show();

				});

				$(".close").click(function () {
					$("#viewPO").hide();
				});


			    $('#next').click(function(){
				        var numberOrder = $('#numorder').val();
				        $('#inputnum').val(numberOrder);
					});

			    // Update Status
			    $(".update").click(function(){
			    	var status = $(this).data("status");
					var poID = $(this).data("id");
					$("#orderStatus").val(status);
					$("#poID").val(poID);

					$("#updateStatus").show();
				});

			    $(".close").click(function(){
					$("#updateStatus").hide();
				});

			} );


</script>