
<?php
session_start();
include_once("config.php");
if(isset($_POST['submit'])){
$user=mysqli_real_escape_string($conn,$_POST['user']);
$idnum=mysqli_real_escape_string($conn,$_POST['idnum']);
$serial=mysqli_real_escape_string($conn,$_POST['serial']);
$brand=mysqli_real_escape_string($conn,$_POST['brand']);
$color=mysqli_real_escape_string($conn,$_POST['color']);
$gcdate=mysqli_real_escape_string($conn,$_POST['gcdate']);


if(!empty($user) && !empty($idnum) && !empty($serial) && !empty($brand) && !empty($color) && !empty($gcdate)){

    $id_query="SELECT  * FROM laptop WHERE idnum='$idnum'";
    $id_query_run=mysqli_query($conn,$id_query);

    if(mysqli_num_rows($id_query_run)>0){
        $_SESSION['status']="id is already exist try Another";
        $_SESSION['status_code']="error";
        header('Location:insertPc.php');
        

    }else{
        $query="INSERT INTO laptop(user,idnum,serial,brand,color,gcdate) VALUES ('$user','$idnum','$serial','$brand','$color','$gcdate')";
        $query_run=mysqli_query($conn,$query);
    
        if($query_run){
        
        
            $_SESSION['status']="Laptop succussfully registerd";
            $_SESSION['status_code']="success";
            header('Location:insertPc.php');
        
        }else{
            $_SESSION['status']="Laptop not registerd";
            $_SESSION['status_code']="error";
            header('Location:insertPc.php');
        
      }}
    
    }else{
        $_SESSION['status']="ALL INPUT FILL REQUIRED";
        $_SESSION['status_code']="error";
        header('Location:insertPc.php');
    }
}





///////////////cloth insertttttttt

if(isset($_POST['clothaddsub'])){
    
    $trouser=$_POST['trouser'];

    $id=$_POST['id'];
    $jacket=$_POST['jacket'];
    

    $blanket=$_POST['blanket'];
    $shoes=$_POST['shoes'];
    $tshirt=$_POST['tshirt'];
    $shemiz=$_POST['shemiz'];
    $sport=$_POST['sport'];
    $other=$_POST['other'];
    $fname=$_POST['fname'];

    $id_query="SELECT  * FROM clothe WHERE id='$id'";
    $id_query_run=mysqli_query($connection,$id_query);

    if(mysqli_num_rows($id_query_run)>0){
        $_SESSION['status']="id is already exist try Another";
        $_SESSION['status_code']="error";
        header('Location:clothadd.php');
        

    }else{
        
        $query="INSERT INTO clothe(trouser,id,jacket,blanket,shoes,tshirt,shemiz,sport,other,fname) VALUES ('$trouser','$id','$jacket','$blanket','$shoes','$tshirt','$shemiz','$sport','$other','$fname')";
        $query_run=mysqli_query($connection,$query);
    
        if($query_run){
        
        
            $_SESSION['status']="resource registerd";
            $_SESSION['status_code']="success";
            header('Location:clothadd.php');
        
        }else{
            $_SESSION['status']="resource not registerd booomm";
            $_SESSION['status_code']="error";
            header('Location:clothadd.php');
        
      }}
    
    }









    ?>