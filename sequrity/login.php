<!DOCTYPE html>


<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatiable" content="ie=edge">
<link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
</head>

<body>

<style>
body{
    background-image: linear-gradient(75deg ,rgba(129, 0, 129, 0.836),#160891cc);    background-size:cover;
overflow:hidden;
}
</style>
<div class="wrapper">


<section class="form signup">


<header><a href="studentchat/stlogin.php"><i class="fas fa-users"></i></a> </header>

<form action="logindb.php" method="post" enctype="multipart/form-data">

<div class="er_text"></div>

<style>
header a i{


font-size:150px;
color:#0584f2;

}
.er_text{
font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
display: none;
color:#e0d7f8;
background:#721c24;
text-align: center;
border-radius: 5px;
padding:8px 10px;
font-weight:500;
margin-bottom: 10px;
border:1px solid #f5c6cb;

}
</style>
<div class="name-details" >

<div class="field " >

<input type="text" placeholder="Enter User Name here " name="name">
</div>
<div class="field" >


<input type="password" placeholder="Enter your ID here" name="passwordd">
</div>
<div class="love button">
<input type="button" value="LOGIN" name="loginBtn">
</div>
</div>
</form>
<div class="link-al">
<small style="color:#0584f2;">create new account ? </small><a href="signup.php"> Sign in</a>

</div>
</section>
<style>



.wrapper{
margin-left:40%;
margin-top:50px;
text-align:center;
border-radius:10px;
padding:15px;
background:#fff;
width:300px;
box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),0 32px 64px -48px rgba(0, 0, 0,0.5);
}

input[type="text"],input[type="password"]{
margin:11px;
outline:none;
width:250px;
padding:13px;
border:none;
border-bottom:4px solid #0584f2;
}


.form form  .field i{
margin-left:55%;
color:#ccc;

}


input::placeholder{
font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
font-weight:bold;
color:#192e5b;
font-size:15px;
}
input[type="button"]{
margin-top:20px;
background:#0584f2;
border:none;
color:white;
width:200px;
font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
padding:8px;
border-radius:8px;
cursor:pointer;
}
.link-al{
margin-top:25px;

}
.link-al a{
text-decoration:none;
color:black;
}
.link-al a:hover{

text-decoration:underline;

}
</style>


</div>

</body>
</html>
<script src="login.js">



</script>