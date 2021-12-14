<html>
    <body style="color: azure;" bgcolor="black">
    </body>
    </html>
<?php
require_once("query.php");
$selectData=getData("customr","*","1=1");

echo'<center><h1>All customer</h1></center>';
while($Data=mysqli_fetch_assoc($selectData)){
    $customr_id = $Data['customr_id'];
    $customerr=$Data['customr_name'];
    
    echo "customr_id: $customr_id , customer_name: $customerr  <br/>";
    
    echo "<hr/>";
    


}