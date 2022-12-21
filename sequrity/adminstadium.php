
<?php
session_start();

?>


<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatiable" content="ie=edge">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
</head>

<body>

<?php
include_once("adminnav.php");

?>
<div class="right_container">
    <div class="wrapper">
   
        <section class="chat-area">
            <header>

            <?php

include_once("config.php");
$u_id=mysqli_real_escape_string($conn,$_GET['u_id']);
$sql=mysqli_query($conn,"SELECT *FROM juadmin WHERE un_id={$u_id}");
if(mysqli_num_rows($sql)>0){
    $row=mysqli_fetch_assoc($sql);
}



?>
                <a href="adminchat.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="images/<?php echo $row['images'];?>" alt="">

                <div class="details">
                    <span ><?php echo $row['name']; ?></span>
                    <p><?php  echo $row['state'];?></p>

                </div>

            </header>

            <div class="chat-box">




               
                
            </div>


   

    <form method="#" class="typing_area" autocomplete="off">
    <input type="text" name="outgoing_id" value="<?php echo $_SESSION['un_id'];  ?>" hidden>
    <input type="text" name="incoming_id" value="<?php echo $u_id; ?>" hidden>

        <input type="text" name="messaga" class="input-field" placeholder="Type Message Here">
        <button><i class="fab fa-telegram"></i></button>
        
        </form>

    </section>

    </div>

    </div>
<style>

*{


margin:0;
padding:0;
text-decoration: none;
box-sizing: border-box;

}body{
    background:#3778c2;
font-weight: 700;
align-items:center;
justify-content:center;
font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.wrapper{

background:#32064a;

width:400px;
border:1px solid #0f2557; 
}



.chat-area header{

display: flex;
align-items: center;
padding: 18px 30px;
background: #0f2557;
}
.chat-area header .back-icon{

font-size: 18px;
color:#fff;
}

.chat-area header img{

margin:0 15px;
width:50px;
height:50px;
border-radius: 100%;


}

.chat-area header a{
background:transparent;
font-size: 21px;
padding: 8px;
width: 30px;
color:#111111;
 
}


.chat-area header span{
font-size: 20px;
text-transform:capitalize;
font-weight: 500;
}
.chat-area header p{
color:green;
padding-left:12px;
}
.chat-box{
height: 450px;
padding:10px 20px 30px 20px;
background:#efefef;
overflow-y:auto;
box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%),
            inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
} 
:is(.chat-box)::-webkit-scrollbar{
width:0;
}

.chat-box .chat{

margin: 15px 0;
}
.chat-box .chat p{
font-size: 13px;
word-wrap: break-word;
padding: 8px 16px;
box-shadow: 0 0 32px rgb(0 0 0 /8%),
        0 16px 32px -16px rgb(0 0 0 /10%);

}


.chat-box .outgoingMsg{
display: flex;
}

.outgoingMsg .details {

margin-left:auto;
max-width: calc(100% - 130px);
display: flex;
padding:0px;

}
.outgoingMsg .details p{
background: #333;
color:#fff;
border-radius: 18px 18px 0 18px;

}

.chat-box .incomingMsg{
display: flex;
align-items: flex-end;    
}




.chat-box .incomingMsg .details {
    justify-content:space-between;
    display: flex;
    margin-left:10px;
    padding:0px;
    max-width: calc(100% - 130px);
    
   

}
.chat-box .incomingMsg img{
    border-radius: 50%;
    align-items:center;
    margin-right: 8px;
    padding:1px;
    height: 35px;
    width: 35px;
} 
.incomingMsg .details p{
    color:#333;
    background-color:#fff;
    border-radius: 18px 18px 18px 0;
    word-wrap: break-word;
    
}




.chat-area .typing_area{

 display: flex;
 
}
.chat-area .typing_area input{
width:100%;
 padding:8px;
 border:1px solid #ccc;
 outline:none;
 border-radius:5px;
}.chat-area .typing_area button{
 
 outline: none;
 background:#000000;
 color:#fff;
 border:1px solid #ccc;
 border-radius: 5px;
padding: 5px;
 text-align: center;
 margin:2px;
 
}
.chat-area .typing_area i{
 font-size: 32px;

 
 
}
 .right_container{
            
            flex-basis:80%;
            background:#3778c2;
            height: 100vh;
            overflow: hidden;
            display: inline-block;
            background-size: cover;
            color:#fff;
            }
            :is(.right_container)::-webkit-scrollbar{
            width:0;
            }

</style>



</body>

</html>

<script src="adminstadium.js"></script>