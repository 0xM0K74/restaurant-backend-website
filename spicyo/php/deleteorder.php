<html>
    <body style="color: azure;" bgcolor="black" >
   <form action="deleteorder.php" method="POST">
       <input type="text" name="order_id" placeholder="Enter order id"><br>
       <input type="submit" name="delete" value="Delete"><br>

   </form>
</body>
</html>
<?php
require_once("query.php");
if(isset($_POST['delete'])){
    $orderID=$_POST['order_id'];
    $selectData=getData("customr_has_product","*","order_id='$orderID'");
   
    $delete=removeData("customr_has_product","order_id='$orderID'");
    if($delete){
    header("Location: manageorder.php");
    }
}





?>