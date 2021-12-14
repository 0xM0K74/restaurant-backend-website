<?php
include_once("../html/addmeal.html");
include_once("query.php");
//image
if(isset($_POST['up'])){
    $file=$_FILES['filename'];
    $filename =$file['name'];
    $filetype=$file['type'];
    $filetmp=$file['tmp_name'];
    $filesize=$file['size'];
    $boolupload=move_uploaded_file($filetmp,"../images/".$filename);
if($boolupload){
    echo "OK Uploaded";
}else{
    echo "error";
}
}
if(isset($_POST['subbb'])){
    $productName=$_POST['product_name'];
    $productPrice=$_POST['price'];
    $productPhoto=$_POST['photo'];
    $productave=$_POST['product_availability'];
    

    $AddData=addData("products","product_name,product_price,product_availability,product_photo","'$productName','$productPrice','$productave','$productPhoto'");
    if($AddData){
        echo "done";
    }else{
        echo "errooor";
    }
    

}

?>