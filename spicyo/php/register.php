<?php
session_start();
include_once("query.php");
if(isset($_POST['sub'])){
    $username=$_POST['name'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $add=addData("customr","customr_name,password,gender","'$username','$password','$gender'");
    if($add){
        $getData=getData("customr","customr_id","customr_name='$username' AND password='$password'");
        $Data=mysqli_fetch_assoc($getData);
        $id=$Data['customr_id'];
        $_SESSION['user']=$id;
        header('Location:service.php');
    }
    else{
        echo "Error try agian!!";
        include_once("../html/register.html");

    }

}
else{
    include_once("../html/register.html");
}







?>