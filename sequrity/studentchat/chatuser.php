<?php

session_start();
include_once("config.php");
$outgoing_id=$_SESSION['unique_id'];
$sql=mysqli_query($conn, "SELECT *FROM judb WHERE NOT unique_id={$outgoing_id}");
$output = "";
if(mysqli_num_rows($sql) == 1){
    $output .= "no user found";

}

elseif(mysqli_num_rows($sql)>0){

include_once("chatdata.php");


}
echo $output;

?>
