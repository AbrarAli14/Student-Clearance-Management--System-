<?php

session_start(); 
include_once("config.php");

$name=mysqli_real_escape_string($conn,$_POST['name']);
$passwordd=mysqli_real_escape_string($conn,$_POST['passwordd']);

if(!empty($name)&& !empty($passwordd)){
$sql=mysqli_query($conn,"SELECT *FROM juadmin WHERE name='{$name}' AND passwordd='{$passwordd}'");
if(mysqli_num_rows($sql)>0){


    $row=mysqli_fetch_assoc($sql);
    $_SESSION['un_id']=$row['un_id'];
    $state="online";
    $sql2=mysqli_query($conn,"UPDATE juadmin SET state='{$state}' WHERE un_id={$_SESSION['un_id']}");
          if($row['role']=='Control'){
        echo "success";
    }else if($row['role']=='Sequrity'){
        echo "good";
    }else if($row['role']==="Record"){
        echo "rec";

    } else{
        echo "false";
    }
}else{

echo "not correct id";


}



}else{

    echo "all input file rquire";
}
?>