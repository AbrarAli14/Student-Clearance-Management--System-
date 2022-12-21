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
<nav>

    <div class="right_items">
    <h1><i class="fas fa-key" style="font-size:40px;"></i> COMMUNITY</h1>
    </div>
    <div class="left_items">
    <ul>
    <li><a href="chat.php"><i class="fas fa-home"></i> Home </a></li>
    <li><a href="stviewresource.php" ><i class="fas fa-eye"></i> View Resource</a></li>
    <li><a href="stfoul.php" >Foul</a><span class="msg"></span></li>
    <li><a href="about.php" ><i class="fas fa-desktop"></i> About</a></li>
    </ul>
    </div>
    
</div>
    <div class="end_item"><a href="../logout.php"><button>Log Out</button></a></div>

<style>


    
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
    width: 30%;
    float:left;
    
}
.right_items h1 {
    margin:3px;
    padding:1px;
    float:left;
    
}

.left_items{
    width: 50%;
    text-align:center;
    margin-right: 100px;
}
.left_items ul{
    display: flex;
    
}
.left_items ul li{
    margin:3px;
    padding:15px;
    list-style: none;
   
    

}
.left_items ul li a{
    font-size:15px;
    text-decoration: none;
    color: #fff;
}
.left_items ul li a:hover{
text-decoration: underline;
color: #1e3f;
}



.end_item button{
    text-align: center;
    float:right;
    border:none;
    background:#fff;
    color:#333;
    outline:none;
    margin-top:12px;
    margin-right:42px;
    padding:6px;
    border-radius: 7px;
    font-size:16px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
cursor: pointer;
font-weight: bold;
}



</style>
</nav>


