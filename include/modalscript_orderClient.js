
$("#myBtn").click(function(){
    $("#myModal").show();
});
  
$(".close").click(function(){
    $("#myModal").hide();
});

$(".next").click(function(e){
    e.preventDefault();
    $("#myModal").hide();
    $("#addClientOrder").show();

    for(var x = 1; x <= $("#numorder").val(); x++){
        $("#items-add").append(`
            <h4 id="Title">Item ${x}: </h4>
                <div class="form-group">
                    <input type="text" class="form-control" name="" placeholder="Product">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="" placeholder="Quantity">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="" placeholder="Unit Price">
                </div>
        `);
    };
});

$(".close").click(function(){
    $("#myModal").hide();
});

$(".close").click(function(){
    $("#addClientOrder").hide();
    $("#items-add").empty();
});
