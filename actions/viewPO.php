<?php include('../database/db.php');

if(isset($_POST['POorder_id'])){
    $output = " ";

    $query = "SELECT products.ProdDescription, OrderQty, OrderPrice 
        FROM purchaseorder
        INNER JOIN products ON purchaseorder.Orders = products.ProdId
        WHERE PurchaseorderNo ='".$_POST['POorder_id']. "'";

    $REsult = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($REsult))
    {
        $peso_format = 
        $output .= '
        <div class="table-responsive">
            <table class="table table-bordered"
            <tr>
                <td width="30%"><label> Order Item</label></td>
                <td width="70%"> ' .$row["ProdDescription"]. '</td>
            </tr>
            <tr>
                <td width="30%"><label> Item Qty</label></td>
                <td width="70%"> ' .$row["OrderQty"]. '</td>
            </tr>
            <tr>
                <td width="30%"><label> Item Price</label></td>
                <td width="70%"> ₱ ' .number_format($row["OrderPrice"],2). '</td>
            </tr>
            </table>
        </div>
        ';
    }
    echo $output;
}