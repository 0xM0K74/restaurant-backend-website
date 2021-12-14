<html>
    <body style="color: azure;" bgcolor="black">
    </body>
    </html>
<?php
session_start();
include_once("query.php");
$customerID=$_SESSION['user'];

if(isset($_POST['send'])){
    $product_name = $_POST['product_name'];

    $Data=getData("products","product_id","product_name='$product_name'");
    if($Data){
    $data=mysqli_fetch_assoc($Data);
        $id=$data['product_id'];
        $AddData=addData("customr_has_product","customr_id,product_id","'$customerID','$id'");
    if($AddData){
        echo "Done";
    }else{
        echo "error";
    }
}else{
    echo "<h1>product Not available</h1>";
}
    
    

}
else{
    echo"Please type your order";
}