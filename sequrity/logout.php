<?php
session_start();
if(isset($_SESSION['un_id'])){


    include_once("config.php");
    $logout_id=mysqli_real_escape_string($conn,$_GET['logout_id']);

    if(isset($logout_id)){


        $state="offline";



        $sql=mysqli_query($conn,"UPDATE juadmin SET state='{$state}'");

        if($sql){

            session_unset();
            session_destroy();
            header("location:studentchat/stlogin.php");

        }
    }else{
        header("location:index.php");


    }
}else{
    header("location:studentchat/stlogin.php");


}
?>