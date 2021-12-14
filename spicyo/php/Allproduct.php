<html>
    <body style="color: azure;" bgcolor="black">
    </body>
    </html>
<?php
require_once("query.php");
$selectData=getData("products","*","1=1");

echo'<center><h1>All product </h1></center>';
while($Data=mysqli_fetch_assoc($selectData)){
    $product_id = $Data['product_id'];
    $product_name=$Data['product_name'];
   
    echo "prduct_id: $product_id, product_name: $product_name  <br/>";
    echo "<hr/>";
    


}