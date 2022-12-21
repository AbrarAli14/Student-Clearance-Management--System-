<?php
session_start();
include_once('adminnav.php');
?>
<?php

include_once("container.php");





?>

<div class="right_container">

<div class="logIn">

<form action="db.php" method="post">
<i class="fas fa-tshirt"></i></br>
    <div class="divo">
    <input type="text" name="fname" placeholder="Enter Username" required>
    <input type="text" name="ids" placeholder="Enter id" required>
    </div>
    
    <div class="divt">
    <textarea type="text" name="trouser"  placeholder="Enter touser" ></textarea>

    <textarea type="text" name="jacket"  placeholder="Enter jacket" ></textarea>
    </div>
    
    <div class="divt">
    <textarea type="text" name="blanket"  placeholder="Enter blanket" ></textarea>

    <textarea type="text" name="shoes" placeholder="Enter shoes" ></textarea>
    </div>
    
    <div class="divf">
    <textarea type="text" name="tshirt"  placeholder="Enter tshirt" ></textarea>
    <textarea type="text" name="shemiz"  placeholder="Enter shemiz" ></textarea>

    </div>
    
    <div class="divf">
    <textarea type="text" name="sport" placeholder="Enter sport" ></textarea>

    <textarea type="text" name="other"  placeholder="Enter other" ></textarea>
    
    </div>
    
<div class="button_place">
    
    <a href="insertPc.php"><input type="button" name="clothaddsub" value="Pc"></a>
    <input type="submit" name="clothaddsub" value="Register"style="background:#e56b1f;">
    <input type="submit" name="clothaddsub" value="Other">
    </div>
    <style>

        .button_place{

            text-align:center;
        }
input[type="submit"]{
        color:white;
        margin-top:12px;
        background:#32064a;
        padding:10px;
        font-size:20px;
        border:none;
        align-items:center;
        outline:none;
        border-radius:15px;
        width:150px;
        margin-right:20px;
        cursor:pointer;
}
input[type="button"]{
    margin-right:20px;
        color:white;
        margin-top:12px;
        background:#32064a;
        padding:10px;
        font-size:20px;
        border:none;
        align-items:center;
        outline:none;
        border-radius:15px;
        width:150px;cursor:pointer;
}
        </style>

</form>
</div>
</div>

<style>
    body{
        text-align:center;
        align-items:center;
    }
.logIn div{
    display:flex;

margin-left:20%;
background:transparent;
    width:500px;
    border-radius:20px;
    border:2px solid transparent;
    
}

.logIn input[type="text"],input[type="password"],input[type="email"]{
    display:flex;
    margin:10px;
    padding:12px;
    font-size:16px;
    outline:none;
    border-radius:5px;
    border:3px solid transparent;
    width:250px;
    text-transform:capitalize;
}
.logIn textarea{
    resize:none;
    display:flex;
    margin:10px;
    padding:12px;
    font-size:16px;
    outline:none;
    border-radius:5px;
    border:3px solid transparent;
    width:250px;
    text-transform:capitalize;


}
.logIn input[type="text"]::placeholder{

font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
font-size:13px;
}
.logIn i{

    margin-top:15px;
            text-align:center;
            font-size:50px;
            color: #1876f2;
            padding:1px;
            margin-right:150px;
            animation:life 8s linear infinite;
        }

        @keyframes life{

25%{
    color:#d902ee;
    
}50%{

   color:#fe3a9e;
  

}
100%{
    
    color:#ffea04;
}
}

    </style>


<script src="js/sweetalert.min.js"></script><script src="js/sweetalert.min.js"></script>
<?php
if(isset($_SESSION['status'])&& $_SESSION['status']!=''){
    ?><script>
    swal({
           title: "<?php echo $_SESSION['status'];?>",
            //text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status_code'];?>",
             button: "Ok",
});
</script><?php
    unset($_SESSION['status']);

}


?>