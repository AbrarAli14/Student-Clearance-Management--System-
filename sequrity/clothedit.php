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
    $ids=$_POST['edit_id'];
$query="SELECT * FROM cloth WHERE ids='$ids' ";
$query_run=mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($query_run))
    
    {
        ?>

  
   <form action="clothedit.php" method="post">
       <input type="hidden"  name="edited_ids" value="<?php echo $row ['ids']?>">
<i class="fas fa-user"></i>   </br>
 <input type="text" name="fname" value="<?php echo $row ['fname']?>" placeholder="Enter Username"></br>
    <input type="text" name="ids" value="<?php echo $row ['ids']?>"  placeholder="Enter id"></br>
    <input type="text" name="trouser" value="<?php echo $row ['jacket']?>" placeholder="Enter trouser"></br>
    <input type="text" name="shemiz" value="<?php echo $row ['shemiz']?>"  placeholder="Enter shemiz"></br>
    <input type="text" name="blanket" value="<?php echo $row ['blanket']?>" placeholder="Enter blanket"></br>
    <input type="text" name="shoes" value="<?php echo $row ['shoes']?>"  placeholder="Enter shoes"></br>
    <input type="text" name="tshirt" value="<?php echo $row ['tshirt']?>"  placeholder="enter tshirt" >
    <input type="text" name="sport" value="<?php echo $row ['sport']?>" placeholder="Enter sport"></br>
    <input type="text" name="jacket" value="<?php echo $row ['jacket']?>" placeholder="Enter jacket"></br>
    <input type="text" name="other" value="<?php echo $row ['other']?>"  placeholder="Enter other"></br></br>

    
    <button type="submit" name="clothupdatebutton" value="Update">Update</button>
    <button style="background:red;color:#fff"><a href="viewresult.php">cancel</a></button >
    </form>
    <?php
}
}else{
   
}
?>
    
<?php

$connection=mysqli_connect("localhost","root","","sequrity");
if(isset($_POST['clothupdatebutton'])){


    $id=$_POST['edited_ids'];
    $names=$_POST['fname'];
    $trouser=$_POST['trouser'];  
    $shoes=$_POST['shoes'];
    $other=$_POST['other'];
    $sport=$_POST['sport'];
    $jacket=$_POST['jacket'];
    $shemiz=$_POST['shemiz'];
    $blanket=$_POST['blanket'];
    
        $query=" UPDATE  cloth SET trouser='$trouser',ids='$id',fname='$names',shoes='$shoes',other='$other',sport='$sport',jacket='$jacket',shemiz='$shemiz',blanket='$blanket' WHERE ids='$id' ";
        $query_run=mysqli_query($connection,$query);
        
        if($query_run){
        
        
            $_SESSION['status']="resource updated";
            $_SESSION['status_code']="success";
            header('Location:index.php');

        
        }else{
            $_SESSION['status']="resource not updated Try zAgain";
            $_SESSION['status_code']="error";
        
      }
    
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
button{
        color:white;
        background:#0abda0;
        padding:7px;
        font-size:18px;
        border:none;
        align-items:center;
        outline:none;
        border-radius:15px;
        width:200px;
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
    margin:5px;
    padding:6px;
    font-size:16px;
    outline:none;
    border-radius:6px;
    border:5px solid transparent;
    width:250px;
}.logIn a{
font-size:18px;
border:none;
text-decoration:none;
border-radius:20px;
 padding:7px;
 outline:none;
 color:#fff;

}
.logIn i{
            text-align:center;
            font-size:50px;
            color: red;
            
           
            
            
        }

    </style>


<?php


$connection=mysqli_connect("localhost","root","","sequrity");
if(isset($_POST['deletebutton'])){


    $id=$_POST['delete_ids'];
    


    
        $query="DELETE  FROM cloth WHERE ids='$id' ";
        $query_run=mysqli_query($connection,$query);
        
        if($query_run){
    

        
            $_SESSION['status']="Resource DELTED Succusfully";
            $_SESSION['status_code']="success";
        
        }else{
            $_SESSION['status']="Resource not DELTED Try Again";
            $_SESSION['status_code']="error";
        
      }
    
    }




?>