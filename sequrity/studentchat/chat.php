<?php


session_start();


include_once("config.php");
$sql=mysqli_query($conn,"SELECT *FROM judb WHERE unique_id={$_SESSION['unique_id']}");
if(mysqli_num_rows($sql)>0){
    $row=mysqli_fetch_assoc($sql);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatiable" content="ie=edge">

<link rel="stylesheet" href="chat.css">

<link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
</head>

<body>
<?php

include_once("studentnav.php");
?>

<div class="wrapper">




<header>
<div class="content">

<img src="../images/<?php echo $row['img']?>" alt="">
<div class="details">
<span><?php echo $row['uname']?></span>

<p><?php echo $row['status']?></p>

</div>

</div>


</header>
<section class="users">


<div class="search">
   
    <input type="text" placeholder="enter serach herar">
    <button><i class="fas fa-search"></i></button>
    

</div>
<div class="user-list">




</div>

</section>


</div>


</body>
</html>

<script src="users.js"></script>