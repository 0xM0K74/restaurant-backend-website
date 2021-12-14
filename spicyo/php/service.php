<?php

session_start();
include_once("query.php");

$products=getData("products","*","1=1");
$id=$_SESSION['user'];
$customer=getData("customr","customr_name","customr_id='$id'");

if($customer){
    include_once("../html/header.html");
    include_once("../html/recipe.html");
    include_once("../html/footer.html");
}
if($products){
    include_once("../html/header.html");
    include_once("../html/recipe.html");
    include_once("../html/footer.html");
}else{
    echo "error";

}








?>