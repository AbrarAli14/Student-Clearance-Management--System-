


<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatiable" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
</head>

<body>

<nav>
<div class="right_items">
<h1 style="font-size:20px;"><i class="fas fa-key" style="font-size:20px;"></i> COMMUNITY</h1>


</div>
<div class="left_items">
<ul>
<li><a href="index.php" style="font-size:17px;"><i class="fas fa-home"></i> Home</a></li>
<li><a href="add.php" style="font-size:17px;"><i class="fas fa-search"></i> Search Resource</a></li>
<li><a href="search.php" style="font-size:17px;"><i class="fas fa-check-circle"></i> Cheek Celerance</a></li>
<li><a href="reportmsg.php"style="font-size:17px;" ><i class="fas fa-comment"></i> Reported Message</a></li>
</ul>
</div>
<div class="end_item" style="display: flex;justify-content: space-between;">
    <p style="padding:8px;"></p>
<p><img src="images"style="width:35px;height:35px;border-radius:100%;border:2px solid #fff"></p>

</div>
</nav>
<div class="container">
<div class="left_container">

<div class="left_element">
<?php
include_once("chat.php");

?>


</div>
</div>

<div class="right_container">


</div>
</div>
<style>

*{

margin: 0px;
padding: 0px;
}
.body{
text-align: center;
overflow-y: auto;
font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
:is(body)::-webkit-scrollbar{
width:0;
}


nav{
text-align: center;
background-color:#212027;
width:100%;
display:flex;
position: sticky;
top: 0;
z-index:100;
color:#fff;
padding:1px;
font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
border-bottom: 1px solid #ccc;


}

.right_items{
width: 15%;
float:left;

}
.right_items h1 {
margin:3px;
padding:7px;
float:left;
font-size: 22px;

}

.left_items{
width: 60%;
text-align:center;
margin-left:200px;
}
.left_items ul{
display:flex;

}
.left_items ul li{
margin:7px;
padding:11px;
list-style: none;



}
ul li a{
font-size:17px;
text-decoration: none;
color: #fff;
}
.left_items ul li a:hover{
text-decoration: underline;
color: #1e3f;
}
.end_item{
text-align: center;
width:auto;
float:right;
margin-top:5px;
margin-right:12px;
padding:0;
font-size:16px;
font-weight:bold;
color:#00743f;
}

.container{
height:100vh;
overflow-y: auto;
display: flex;
font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
justify-content: space-between;

}

:is(.container)::-webkit-scrollbar{
width:0;
}

.left_container{
position: sticky;
flex-basis:40%;
background-color: #fff;
height:700px;
top:70;
overflow: hidden;
}

.right_container{

flex-basis:80%;
background:#003d73;
height: 100vh;
overflow: hidden;
display: inline-block;
background-size: cover;
}
:is(.right_container)::-webkit-scrollbar{
width:0;
}


.left_element a{
    display: flex;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-weight:400;

    font-size: 16px;
    text-decoration: none;
    display: flex;
    margin-top:10px;
    margin-left:2px;
    padding: 5px;
    color:#fff;
    width:100%;
    border-bottom: 1px solid #ccc;
}

.left_element a:hover{
color:#fff;
background-color:#121f40;
transition: 0.4s ease-in;

}
.left_element i{


display: flex;
padding:7px;
}
    </style>