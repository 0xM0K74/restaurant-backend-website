<?php
session_start();
require_once('query.php');
if(isset($_POST['subb'])){
    $username=$_POST['name'];
    $password=$_POST['password'];
    $getData=getData("customr","*","customr_name='$username' AND password='$password'");
    if($getData){
       $Data=mysqli_fetch_assoc($getData);
        $id=$Data['customr_id'];
        $is_admin=$Data['IsAdmin'];
        $_SESSION['user']=$id;
        if($is_admin==1){
            header('Location:admin.php');
        

        }else{
          header('Location:service.php');
        }
    }else{
        echo "wrong username or password!!!!";
        include_once("../html/login.html");
    }

       

}else{
    include_once("../html/login.html");
}



?>