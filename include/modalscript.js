
$(".update").click(function(){
  $("#updateModal").show();
  var desc = $(this).data("desc");
  var qty = $(this).data("qty");
  var unit = $(this).data("unit");
  var unitprice = $(this).data("uprice");
  var expiry = $(this).data("expiry");
  var prodId = $(this).data("id");

  $("#proddesc").val(desc);
  $("#prodqty").val(qty);
  $("#produnit").val(unit);
  $("#prodUprice").val(unitprice);
  $("#expiry").val(expiry);
  $("#ProdId").val(prodId);
});

$(".close").click(function(){
  $("#updateModal").hide();
});

$("#myBtn").click(function(){
  $("#myModal").show();
});

$(".close").click(function(){
  $("#myModal").hide();
});
