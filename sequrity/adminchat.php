<?php


session_start();


include_once("config.php");
$sql=mysqli_query($conn,"SELECT *FROM juadmin WHERE un_id={$_SESSION['un_id']}");
if(mysqli_num_rows($sql)>0){
    $row=mysqli_fetch_assoc($sql);
}

?>
<?php
include_once("tochat.php");
?>