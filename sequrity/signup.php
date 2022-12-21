<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatiable" content="ie=edge">
    <link rel="stylesheet" href="loginvssignup.css">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
</head>
<body>
<style>
 body{

    background-image: linear-gradient(75deg ,rgba(129, 0, 129, 0.836),#160891cc);    background-size:cover;

 }

</style>
<div class="wrapper">


    <section class="form signup">


        <header style="color:#0f2557">JU COMMUNITY SIGN UP </header>

        <form action="signupdb.php" method="post" enctype="multipart/form-data">

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
<lable>Enter first name</lable>
                    <input type="text" placeholder="Enter your Name" name="fname">
                </div>
                <div class="field supe">
                <lable>Enter last name</lable>

                    <input type="text" placeholder="Enter Father Name" name="lname">
                </div>
                <div class="field supe">
                <lable>Enter username</lable>

                    <input type="text" placeholder="Enter UserName Name" name="uname">
                </div>
                <div class="field">

                <lable>Enter your id</lable>

                    <input type="password" placeholder="Enter your ID" name="pass">
                    <i class="fas fa-eye"></i>

                
                </div>
                <div class="field">

                    <input type="password" placeholder="Confirm ID " name="confimPass">
                </div>
                <div class="field">
                <lable>Enter your departemnt</lable>

                    <select name="deptSelect">
                        
                        <option  value="SOFTWARE">SOFTWARE </option>
                        <option  value="ELECTRICAL">ELECTRICAL </option>
                        <option   value="MECHANICAL">MECHANICAL </option>
                        <option   value="CIVIL">CIVIL </option>
                        <option   value="CHEMICAL">CHEMICAL </option>

                        

                    </select>
                </div>

                <div class="field">
                <lable>Enter your photo</lable>

                    <input type="file" name="image">
                </div>
                
                <div class="field">
                <lable>Enter Gc Date</lable>

                    <input type="text" placeholder="Date of Graduation" name="dgc">
                </div>

                <div class="field button">
                    <input type="button" value="Sign Up" name="signupBtn">
                </div>
            </div>

        </form>

        <div class="link-al" style="margin-top:-20px">

            <label style="color:#3eb650;">ALready have an account ? </label><a href="login.php"> Log in</a>

        </div>
    </section>



</div>



<style>

.wrapper{
margin:8px;
 padding:5px;
 background:#fff;
 width:400px;
border-radius:10px;

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
    margin-left:20px;
border-radius:5px;
width:300px;
}
.form form select{
    width:300px;
    border-radius: 5px;
    outline: none;
    padding:8px;
border:1px solid #ccc;
text-transform: capitalize;
color:#333;
font-weight: 500;
font-family: Georgia, 'Times New Roman', Times, serif;


}


.name-details select option{
    color:#333;
    font-weight:500;
    text-transform:capitalize;
    background:#fff;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

}
.name-details .field input[type="text"]::placeholder{
    background:none;
}
.name-details .field input[type="password"]::placeholder{
    background:none;
  
}

.field input[type="button"]{
    margin-left:20px;
padding:8px;
background:#3778c2;
color:#fff;
border:none;
width:300px;
cursor:pointer;

}

</style>

            </body>
</html><script src="js/button.js">



</script>
<script src="signup.js">



</script>