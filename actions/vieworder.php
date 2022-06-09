<?php include('../database/db.php');

if(isset($_POST['order_id'])){
    $output = " ";

    $query = "SELECT products.ProdDescription,ItemQty,ItemPrice 
    FROM clientorder 
    INNER JOIN products ON clientorder.OrderItem = products.ProdId 
    WHERE ClientOrderNo ='".$_POST['order_id']. "'";
    $REsult = mysqli_query($conn,$query);
    

    while($row = mysqli_fetch_array($REsult))
    {
        $output .= '
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td width="30%"><label> Order Item</label></td>
                    <td width="70%"> ' .$row["ProdDescription"]. '</td>

                </tr>
                <tr>
                    <td width="30%"><label> Item Qty</label></td>
                    <td width="70%"> ' .$row["ItemQty"]. '</td>
                </tr>
                <tr>
                    <td width="30%"><label> Item Price</label></td>
                    <td width="70%"> ₱ ' .number_format($row["ItemPrice"],2). '</td>
                </tr>
             </table>
        </div>
        ';
    }
    echo $output;
}
?>