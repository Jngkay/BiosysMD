<?php include('../database/db.php');

if(isset($_POST['POorder_id'])){
    $output = " ";

    $query = "SELECT Orders, OrderQty,OrderPrice FROM purchaseorder WHERE PurchaseorderNo ='".$_POST['POorder_id']. "'";
    $REsult = mysqli_query($conn,$query);

    $output .='
    <div class="table-responsive">
        <table class="table table-bordered">';
    while($row = mysqli_fetch_array($REsult))
    {
        $output .= '
        <tr>
            <td width="30%"><label> Order Item</label></td>
            <td width="70%"> ' .$row["Orders"]. '</td>
        </tr>
        <tr>
            <td width="30%"><label> Item Qty</label></td>
            <td width="70%"> ' .$row["OrderQty"]. '</td>
        </tr>
        <tr>
            <td width="30%"><label> Item Price</label></td>
            <td width="70%"> ' .$row["OrderPrice"]. '</td>
        </tr>
        ';
    }
    $output .= '</table></div>';
    echo $output;
}