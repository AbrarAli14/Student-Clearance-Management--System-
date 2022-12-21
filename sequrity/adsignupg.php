<?php

include_once("superadmin.php");

?>

<div class="wrapper">


    <section class="form signupsg" >


        <header>Add admin</header>

        <form action="adsigndbg.php" method="post" enctype="multipart/form-data">

            <div class="er_text"></div>

            <style>
  .er_text{


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
<div class="name-details">
<div class="field supe">

<label>Name</label>
<input type="text" placeholder="Enter your Name" name="name">
</div>

<div class="field">

<label>Password</label>

<input type="password" placeholder="Enter your ID" name="passwordd">
<i class="fas fa-eye"></i>


</div>

<div class="field">

<label>Role</label>
<select name="role">

<option  value="Sequrity">Sequrity </option>
<option  value="Record">Record </option>
<option  value="Control">Control </option>


</select>
</div>

<div class="field">

<label>Image</label>
<input type="file" name="image" >
</div>



<div class="field buttonsg">
<input type="button" value="Register" name="signupBtns">
</div>
</div>

        </form>

        
    </section>



</div>



<style>
section{
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

font-weight:bold;
}
.wrapper{
margin:8px;
 padding:5px;
 background:#fff;
 width:400px;
 box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),0 32px 64px -48px rgba(0, 0, 0,0.5);
}

header{
    text-transform:Capitalize;

}
label{
margin-left:22px;
}
.name-details{

    padding:3px;
}
.name-details .field{
    padding:3px;
    margin:3px;
}

.name-details .field input[type="text"],input[type="password"],input[type="file"],select{
    background:transparent;
    padding:8px;
    border:1px solid #ccc;
    outline:none;
    margin-left:22px;
border-radius:5px;
width:300px;
}

.name-details .field input[type="text"]::placeholder{
    text-transform:Capitalize;
font-weight:bold;
    background:none;
}
.name-details .field input[type="password"]::placeholder{
    background:none;
    text-transform:Capitalize;
    font-weight:bold;

}

.field input[type="button"]{
    text-transform:Capitalize;

    margin-left:22px;
padding:8px;
background:#3eb650;
color:#fff;
border:none;
width:300px;
cursor:pointer;

}



.form{
border-radius: 7px;
padding:1px;
 margin:0px;}
.form header{
text-align: center;
font-size:20px;
font-weight: bold;
padding-bottom:10px;
border-bottom:1px solid #e6e6e6;
}

.form form  .field{
padding:2px;
display:flex;
position: relative;
flex-direction: column;
margin-bottom: 8px;
}
.form form  .field i{
position: absolute;
margin-left:55%;
color:#ccc;

}


.form form select{
width:300px;
border-radius: 5px;
outline: none;
padding:8px;
border:1px solid #ccc;
color:purple;
font-weight: bold;

}


.form form  option{

color:red;
font-weight:700;
font-family: Georgia, 'Times New Roman', Times, serif;

}




.link-al{
text-align: center;
}
.link-al a:hover{
text-decoration: underline;
}
</style>
</html>
<script src="adminadd.js">



</script>