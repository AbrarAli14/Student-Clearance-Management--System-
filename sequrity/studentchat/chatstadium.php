
<?php
session_start();


?>


<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatiable" content="ie=edge">
    <link rel="stylesheet" href="chatstadium.css">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
</head>

<body>

    <div class="wrapper">

        <section class="chat-area">
            <header>

            <?php

include_once("config.php");
$user_id=mysqli_real_escape_string($conn,$_GET['user_id']);
$sql=mysqli_query($conn,"SELECT *FROM judb WHERE unique_id={$user_id}");
if(mysqli_num_rows($sql)>0){
    $row=mysqli_fetch_assoc($sql);
}



?>
                <a href="chat.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="../images/<?php echo $row['img'];?>" alt="">

                <div class="details">
                    <span><?php echo $row['uname']; ?></span>
                    <p><?php  echo $row['status'];?></p>

                </div>

            </header>

            <div class="chat-box">




               
                
            </div>


   

    <form method="#" class="typing_area" autocomplete="off">
    <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id'];  ?>" hidden>
    <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>

        <input type="text" name="message" class="input-field" placeholder="Type Message Here">
        <button><i class="fab fa-telegram"></i></button>
        
        </form>


    </section>

    </div>






</body>

</html>

<script src="chatstadium.js"></script>