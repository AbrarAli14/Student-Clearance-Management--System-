 <?php

session_start();
include_once("config.php");
$outgoing_id=$_SESSION['un_id'];
$sql=mysqli_query($conn, "SELECT *FROM juadmin WHERE NOT un_id={$outgoing_id}");
$output = "";
if(mysqli_num_rows($sql) == 1){
    $output .= "No User found";
}elseif(mysqli_num_rows($sql)>0){

include_once("adminchatdata.php");


}
echo $output;

?>