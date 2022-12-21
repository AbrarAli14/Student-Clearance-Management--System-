
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatiable" content="ie=edge">

<link rel="stylesheet" href="achat.css">

<link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
</head>

<body style="background:#3778c2">
<?php

include_once("adminnav.php");

?>

<!--container php modified-->

<div class="container">
<div class="left_container">

<div class="left_element">

  
<div class="wrapper" style="color:#fff;background:#32064a;">
<section class="users"  style="color:#fff;background:#32064a;">
<div class="search">
    <input type="text" placeholder="Search Here">
    <button><i class="fas fa-search"></i></button>
</div>
<div class="user-list"  style="color:#fff;background:#32064a;">

</div>

</section>


</div>

</div>


</div>
<div class="right_container">
<?php
?>
 
<style>

   .left_container{

      background-color:#32064a;
   }
  .left_element{ background-color:#32064a;
  }
   
  .left_container{
            position: sticky;
            flex-basis:35%;
            background-color: #32064a;
            height:auto;
            top:70;
            overflow: hidden;
            }
            
            .right_container{
            
            flex-basis:80%;
            background:#3778c2;
            height: 100vh;
            overflow: hidden;
            display: inline-block;
            background-size: cover;
            margin-left:12px;
            color:#fff;
            }
            :is(.right_container)::-webkit-scrollbar{
            width:0;
            }
            
           
   .left_element a{
      text-transform:capitalize;
      
   }
  .left_element a:hover{
            color:#fff;
            padding:7px;
            background-color:#32064a;
            
            }

</style>

</body>
</html>
<script src="aduser.js"></script>