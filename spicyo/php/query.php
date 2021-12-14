<?php
function addData($table, $col, $value){
    $sqlLink=mysqli_connect("localhost","root","");
    $dbconnect=mysqli_select_db($sqlLink,"grocery");
    $addquery="INSERT INTO $table ($col) VALUES ($value)";
    $add=mysqli_query($sqlLink, $addquery);
    mysqli_close($sqlLink);
    if($add){
        return true;
    }
    else{
        return false;
    }
}
function removeData($table, $cond){
    $sqlLink=mysqli_connect("localhost","root","");
    $dbconnect=mysqli_select_db($sqlLink,"grocery");
    $removequery="DELETE FROM $table WHERE $cond";
    $remove=mysqli_query($sqlLink, $removequery);
    mysqli_close($sqlLink);
    if($remove){
        return true;
    }
    else{
        return false;
    }
}
function getData($table, $col, $cond){
    $sqlLink=mysqli_connect("localhost","root","");
    $dbconnect=mysqli_select_db($sqlLink,"grocery");
    $getquery="SELECT $col FROM $table WHERE $cond";
    $get=mysqli_query($sqlLink, $getquery);
    mysqli_close($sqlLink);
    if(mysqli_num_rows($get) > 0){
        return $get;
    }
    else{
        return false;
    }
}
function editData($table, $colAndVal, $cond){
    $sqlLink=mysqli_connect("localhost","root","");
    $dbconnect=mysqli_select_db($sqlLink,"grocery");
    $editquery="UPDATE $table SET $colAndVal WHERE $cond";
    $edit=mysqli_query($sqlLink, $getquery);
    mysqli_close($sqlLink);
    if(mysqli_affected_rows($edit) > 0){
        return true;
    }
    else{
        return false;
    }
}



?>