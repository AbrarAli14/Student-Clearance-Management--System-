<?php

session_start(); 
include_once("config.php");

$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$pass=mysqli_real_escape_string($conn,$_POST['pass']);

if(!empty($uname)&& !empty($pass)){
$sql=mysqli_query($conn,"SELECT *FROM judb WHERE uname='{$uname}' AND pass='{$pass}'");
if(mysqli_num_rows($sql)>0){


    $row=mysqli_fetch_assoc($sql);

    $_SESSION['unique_id']=$row['unique_id'];
    $_SESSION['passing']=$row['pass'];
    $status="online";
    $sql2=mysqli_query($conn,"UPDATE judb SET status='{$status}' WHERE unique_id={$_SESSION['unique_id']}");
    echo "success";
}else{

echo "In correct Username or Id";


}



}else{

    echo "Please all input fill require";
}
?>