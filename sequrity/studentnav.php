<?php
?>

<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatiable" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loginvssignup.css">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
</head>

<body>

<nav>
<div class="right_items">
<h1><i class="fas fa-key" style="font-size:40px;"></i> COMMUNITY</h1>


</div>
<div class="left_items">
<ul>
<li><a href="index.php"><i class="fas fa-home"></i></a></li>
<li><a href="add.php" >My Resource</a></li>
<li><a href="search.php" >Cheek Celerance</a></li>
<li><a href="studentfoul.php" > Message</a></li>
</ul>
</div>
<?php
include_once("config.php");
$sql=mysqli_query($conn,"SELECT *FROM judb WHERE unique_id={$_SESSION['unique_id']}");
if(mysqli_num_rows($sql)>0){
    $row=mysqli_fetch_assoc($sql);
}

?>
<div class="end_item" style="display: flex;justify-content: space-between;">
    <p style="padding:16px;"><?php echo $row['uname']?></p>
<p><img src="images/<?php echo $row['img']?>"style="width:50px;height:50px;border-radius:100%;border:2px solid #fff"></p>

</div>
</nav>



<?php
?>