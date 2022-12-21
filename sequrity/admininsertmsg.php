<?php


session_start();
if(isset($_SESSION['un_id'])){
include_once("config.php");
$outgoing_id=mysqli_real_escape_string($conn,$_POST['outgoing_id']);
$incoming_id=mysqli_real_escape_string($conn,$_POST['incoming_id']);

$messaga=mysqli_real_escape_string($conn,$_POST['messaga']);

if(!empty($messaga)){
$sql=mysqli_query($conn , "INSERT INTO messaga (incoming,outgoing,mesg) VALUES ({$incoming_id},{$outgoing_id},'{$messaga}')") or die();


if($sql){
echo "sucusssss";
}else{
echo "failedddd";

}


}

}else{

include_once("login.php");

}




?>