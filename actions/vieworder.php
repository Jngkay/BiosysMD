<?php include('../database/db.php');

if(isset($_POST['order_id'])){
    $output = " ";

    $query = "SELECT OrderItem, ItemQty,ItemPrice FROM clientorder WHERE ClientOrderNo ='".$_POST['order_id']. "'";
    $REsult = mysqli_query($conn,$query);

    $output .='
    <div class="table-responsive">
        <table class="table table-bordered">';
    while($row = mysqli_fetch_array($REsult))
    {
        $output .= '
        <tr>
            <td width="30%"><label> Order Item</label></td>
            <td width="70%"> ' .$row["OrderItem"]. '</td>
        </tr>
        <tr>
            <td width="30%"><label> Item Qty</label></td>
            <td width="70%"> ' .$row["ItemQty"]. '</td>
        </tr>
        <tr>
            <td width="30%"><label> Item Price</label></td>
            <td width="70%"> ' .$row["ItemPrice"]. '</td>
        </tr>
        ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>