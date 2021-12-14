
<?php
require_once("query.php");
$selectData=getData("customr_has_product","*","1=1");

echo'<center><h1>Order History</h1></center>';
while($Data=mysqli_fetch_assoc($selectData)){
    $order_id = $Data['order_id'];
    $product_id = $Data['product_id'];
    $customr_id = $Data['customr_id'];
    $selectcustomername=getData("customr","customr_name","customr_id='$customr_id'");
    $customername=mysqli_fetch_assoc($selectcustomername);
    $customerr=$customername['customr_name'];
    $selectproductname=getData("products","product_name","product_id='$product_id'");
    $productname=mysqli_fetch_assoc($selectproductname);
    $productt=$productname['product_name'];
     

    echo "order_id: $order_id <br/>";
    echo "customr_id: $customr_id , customer_name: $customerr  <br/>";
    echo "prduct_id: $product_id, product_name: $productt  <br/>";
    echo "<hr/>";
    


}


?>
<html>
    <body style="color: azure;" bgcolor="black" >
    <center>
        <br />
    <a href="addorder.php">Add Order</a><br/>
    <a href="deleteorder.php">Delete Order</a><br/>
    <a href="Allcustomer.php">All customer</a><br/>
    <a href="Allproduct.php">All product</a><br/>

    
   </center>






</body>
</html>