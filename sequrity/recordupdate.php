<?php
session_start();
include_once("adminnav.php");
?>
<?php


include_once("container.php");




?>

<div class="right_container">
<div class="logIn">
<?php 
$connection=mysqli_connect("localhost","root","","sequrity");
if(isset($_POST['edit_btn'])){
    $idnum=$_POST['edit_id'];
$query="SELECT * FROM foul WHERE idnum='$idnum' ";
$query_run=mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($query_run))
    {
        ?>

   <form action="db.php" method="post">
       <input type="hidden"  name="edited_id" value="<?php echo $row ['idnum']?>">
<i class="fas fa-user"></i>   </br>
 <input type="text" name="names" value="<?php echo $row ['names']?>" placeholder="Enter Username"></br>
    <input type="text" name="idnum" value="<?php echo $row ['idnum']?>"  placeholder="Enter id"></br>
    <textarea type="text" name="records" value="<?php echo $row ['records']?>" placeholder="enter record"></textarea></br>
    

    
    <button type="submit" name="reupdatebutton" value="Update">Update</button>
    <a href="viewresult.php" style="font-size:25px;color:white;background:red;border:none;text-decoration:none;border-radius:20px; padding:15px;underline:none">cancel</a>
    </form>
    <?php
}
}else{
    echo "somttttttt";
}
?>
    


</div>

</div>
<style>
    body{
        text-align:center;
        align-items:center;
    }
    
    .lables{
font-weight:bold;
font-size:20px;
float:left;

    }
button[type="submit"]{
        color:white;
        margin-top:12px;
        background:#0abda0;
        padding:12px;
        font-size:25px;
        border:none;
        align-items:center;
        outline:none;
        border-radius:15px;
        width:100px;
        cursor:pointer;
}
       

.logIn{
margin-top:10px;
margin-left:15%;
background:transparent;
    width:500px;
    border-radius:20px;
    padding:8px;

}

.logIn input[type="text"],input[type="password"],input[type="email"],textarea{
    margin:10px;
    padding:12px;
    font-size:16px;
    outline:none;
    border-radius:6px;
    border:5px solid transparent;
    width:300px;
}

.logIn i{
            text-align:center;
            font-size:100px;
            color: #1876f2;
            padding:8px;
            width:100px;
            height:100px;
            border-radius:100%;
            
            
        }

    </style>


<?php

?>