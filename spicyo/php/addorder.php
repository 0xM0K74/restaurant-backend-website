<html>
    <body style="color: azure;" bgcolor="black" >
   <form action="addorder.php" method="POST">
       <input type="text" name="product_id" placeholder="Enter product id"><br>
       <input type="text" name="customer_id" placeholder="Enter customer id"><br>
       <input type="submit" name="Add" value="Add"><br>

   </form>
</body>
</html>
<?php
require_once("query.php");
if(isset($_POST['Add'])){
    $productID=$_POST['product_id'];
    $customerID=$_POST['customer_id'];


    $addData=addData("customr_has_product","customr_id,product_id","'$customerID','$productID'");
   
   
    if($addData){
    header("Location: manageorder.php");
    }
}




?>