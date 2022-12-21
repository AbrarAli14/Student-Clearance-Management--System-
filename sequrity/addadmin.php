<?php
session_start();

if(!isset($_SESSION['un_id'])){

    header("location:login.php");
}
include_once("adminnav.php");
?>

<?php
include_once("container.php");

?>

<div class="right_container">

<div class="logIn">

<form action="addpcdb.php" method="post">
<i class="fas fa-desktop"></i></br>
    <input type="text" name="user" placeholder="enter user name"></br>
    <input type="text" name="idnum"  placeholder="Enter ID number" ></br>
    <input type="text" name="serial" placeholder="Enter serial number" ></br>
    <input type="text" name="brand"  placeholder="Enter brand" ></br>
    <input type="text" name="color"  placeholder="Enter color" ></br>
    <input type="text" name="gcdate"  placeholder="Enter graduation date" ></br>


    
    <a href="clothadd.php"><input type="button" name="submit" value="Clothe"></a>

    

    <input type="submit" name="submit" value="Register">
    
    <a href="adcloth.php"><input type="button" name="submit" value="Other"></a>    <style>
input[type="submit"],input[type="button"]{
        color:white;
        margin-top:12px;
        background:#0abda0;
        padding:12px;
        font-size:21px;
        border:none;
        align-items:center;
        outline:none;
        border-radius:15px;
        width:150px;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
text-transform:uppercase;
}

        </style>

</form>
</div>
<style>
    body{
        text-align:center;
        align-items:center;
    }
.logIn{
margin-left:5%;
margin-right:5%;
background:#003d73;
    width:900px;
    border-radius:20px;
    padding:2px;

}

.logIn input[type="text"],input[type="password"],input[type="email"]{
    margin:10px;
    padding:12px;
    font-size:16px;
    outline:none;
    border-radius:5px;
    border:3px solid transparent;
    width:250px;
    text-transform:uppercase;
    color:#36688d;

}
.logIn input[type="text"]::placeholder{

    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size:13px;
}

.logIn i{
            text-align:center;
            font-size:100px;
            color: #1876f2;
            padding:1px;
            
            animation:life 8s linear infinite;
        }

        @keyframes life{

25%{
    color:#ffea04;
    
}50%{

    color:#ffea04;
  

}
100%{
    
    color:#ffea04;
}
}

    </style>


</div>






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