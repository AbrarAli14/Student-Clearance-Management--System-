

<!DOCTYPE HTML>


<html>

<title>HELLO FROM ABRAR
</title>
<link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">


<body>

<div class="logIn">

<form action="studentREcord.php" method="post">
<i class="fas fa-upload"></i></br>
    <input type="text" name="names" placeholder="Enter Username" required></br>
    <input type="text" name="idnum"  placeholder="Enter ID number" required></br>
    <textarea type="text" name="records" style="width:250px;height:100px;" placeholder="Enter record" required></textarea></br> 
    <input type="submit" name="foulsubmit" value="Add Record">
    
    <style>

        ::placeholder{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
font-weight:200;
            color:#1e3d59;
            font-size:14px;
        }
input[type="submit"],input[type="button"]{
    border:1px solid #fff;
        color:white;
        margin-top:12px;
        background:#3778c2;
        padding:12px;
        font-size:21px;
        align-items:center;
        outline:none;
        border-radius:15px;
        width:150px;
        cursor:pointer;
}

        </style>

</form>
</div>
<style>
    body{
        text-align:center;
        align-items:center;
        background:#28559a;
    }
.logIn{
margin-top:70px;
margin-left:30%;
background:transparent;
    width:500px;
    box-shadow:3px 0 0 10px white,0 3px 0 10px white;
    padding:8px;

}

.logIn input[type="text"],input[type="password"],input[type="email"]{
    margin:10px;
    padding:8px;
    font-size:16px;
    outline:none;
    border-radius:5px;
    border:1px solid #ccc;
    width:250px;
    background:#fff;
    color:#333;
}
.logIn textarea{
resize:none;
    margin:10px;
    padding:8px;
    font-size:16px;
    outline:none;
    border-radius:5px;
    border:1px solid #ccc;
    width:250px;
    background:#fff;
    color:#333;
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
    color:#d902ee;
    
}50%{

   color:#fe3a9e;
  

}
100%{
    
    color:#ffea04;
}
}

    </style>



<?php
$connection=mysqli_connect("localhost","root","","sequrity");
if(isset($_POST['foulsubmit'])){
    $names=$_POST['names'];
    $idnum=$_POST['idnum'];
    $records=$_POST['records'];
    $froms=$row['name'];
    $random_id=rand(time(),10000000);
    $id_query="SELECT  * FROM foul WHERE idnum='$idnum'";
    $id_query_run=mysqli_query($connection,$id_query);

    if(mysqli_num_rows($id_query_run)>0){
        $_SESSION['status']="Student is already suspended in other case please go on search and add another record";
        $_SESSION['status_code']="error";
        header('Location:studentREcord.php');
        

    }else{
        

        $query="INSERT INTO foul(un_id,names,idnum,records,froms) VALUES ('$random_id','$names','$idnum','$records','$froms')";
        $query_run=mysqli_query($connection,$query);
    
        if($query_run){
        
        
            $_SESSION['status']="Record added succussfully";
            $_SESSION['status_code']="success";
        }else{
            $_SESSION['status']="Record not added";
            $_SESSION['status_code']="error";
            header('Location:studentREcord.php');        
      }}
    
    }







?>
</body>
</html>
