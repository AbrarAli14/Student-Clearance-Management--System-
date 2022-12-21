<?php
session_start();





//edittttttttttttt



    $connection=mysqli_connect("localhost","root","","sequrity");
    if(isset($_POST['updatebutton'])){


        $id=$_POST['edited_id'];
        $name=$_POST['user'];
        $serial=$_POST['serial'];  
        $brand=$_POST['brand'];
        $color=$_POST['color'];
        
            $query=" UPDATE  laptop SET user='$name',idnum='$id',serial='$serial',brand='$brand',color='$color' WHERE idnum='$id' ";
            $query_run=mysqli_query($connection,$query);
            
            if($query_run){
            
            
                $_SESSION['status']="resource updated";
                $_SESSION['status_code']="success";
                header('Location:viewresult.php');                
            
            }else{
                $_SESSION['status']="resource not updated Try zAgain";
                $_SESSION['status_code']="error";
                header('Location:viewresult.php');                
            
          }
        
        }

        //delete
        $connection=mysqli_connect("localhost","root","","sequrity");
        if(isset($_POST['deletebutton'])){
    
    
            $id=$_POST['delete_idddd'];
            


            
                $query="DELETE  FROM laptop WHERE idnum='$id' ";
                $query_run=mysqli_query($connection,$query);
                
                if($query_run){
            

                
                    $_SESSION['status']="Resource DELTED Succusfully";
                    $_SESSION['status_code']="success";
                    header('Location:viewresult.php');                
                }else{
                    $_SESSION['status']="Resource not DELTED Try Again";
                    $_SESSION['status_code']="error";
                    header('Location:viewresult.php');                
                
              }
            
            }

            $connection=mysqli_connect("localhost","root","","sequrity");
            if(isset($_POST['deletebuttona'])){
        
        
                $id=$_POST['deletea_id'];
                
    
    
                
                    $query="DELETE  FROM juadmin WHERE passwordd='$id' ";
                    $query_run=mysqli_query($connection,$query);
                    
                    if($query_run){
                
    
                    
                        $_SESSION['status']="Admin DELTED Succusfully";
                        $_SESSION['status_code']="success";
                        header('Location:removeadmin.php');                
                    }else{
                        $_SESSION['status']="Admin not DELTED Try Again";
                        $_SESSION['status_code']="error";
                        header('Location:removeadmin.php');                
                    
                  }
                
                }
    
           
            //////////////////////adddd studentttt recorrrrdddddddd




            ///////////////////deltet by alll gcccccc

            $connection=mysqli_connect("localhost","root","","sequrity");
if(isset($_POST['deltebtn'])){
    $searid=$_POST['searid'];
    //cheeking existance of id
    $id_query="SELECT  * FROM laptop WHERE gcdate='$searid'";
    $id_query_run=mysqli_query($connection,$id_query);

    if(mysqli_num_rows($id_query_run)>0){
    $query="DELETE  FROM laptop WHERE gcdate='$searid' ";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
            
        $_SESSION['status']="Resource DELTED Succusfully";
        $_SESSION['status_code']="success";
                
        header('Location:gcdel.php');    }
                    else{


        
        $_SESSION['status']="Resource not DELTED Succusfully";
       
        $_SESSION['status_code']="error";
        header('Location:gcdel.php');
                    }} else{

                        $_SESSION['status']="not found";
       
                        $_SESSION['status_code']="error";
                        header('Location:gcdel.php');

                    }
                    }


////////////////modify student recorddd//////


$connection=mysqli_connect("localhost","root","","sequrity");
if(isset($_POST['reupdatebutton'])){


    $id=$_POST['edited_id'];
    $names=$_POST['names'];
    $records=$_POST['records'];  
   
        $query=" UPDATE  foul SET names='$names',idnum='$id',records='$records' WHERE idnum='$id' ";
        $query_run=mysqli_query($connection,$query);
        
        if($query_run){
        
        
            $_SESSION['status']="record  updated";
            $_SESSION['status_code']="success";
            header('Location:viewrecord.php');                
        
        }else{
            $_SESSION['status']="record not updated Try zAgain";
            $_SESSION['status_code']="error";
            header('Location:viewrecord.php');                
        
      }
    
    }





////////////////end of student record modify/////////////

/////////////delte recorddddddddddddddddddddd////////////
$connection=mysqli_connect("localhost","root","","sequrity");
if(isset($_POST['redeltebutton'])){


    $id=$_POST['delete_id'];
    


    
        $query="DELETE  FROM foul WHERE idnum='$id' ";
        $query_run=mysqli_query($connection,$query);
        
        if($query_run){
    

        
            $_SESSION['status']="record DELTED Succusfully";
            $_SESSION['status_code']="success";
            header('Location:viewrecord.php');                
        }else{
            $_SESSION['status']="record not DELTED Try Again";
            $_SESSION['status_code']="error";
            header('Location:viewrecord.php');                
        
      }
    
    }
  ////////////end of delte recorddddd/////////      
    
    /*
///admin add database
$connection=mysqli_connect("localhost","root","","mtuadmin");
if(isset($_POST['adsubmit'])){
    $username=$_POST['username'];
    $id=$_POST['id'];
    
    $id_query="SELECT  * FROM admindb WHERE id='$id'";
    $id_query_run=mysqli_query($connection,$id_query);

    if(mysqli_num_rows($id_query_run)>0){
        $_SESSION['status']="id is already exist try Another";
        $_SESSION['status_code']="error";
        header('Location:adminAdd.php');
        

    }else{
        $query="INSERT INTO admindb(username,id) VALUES ('$username','$id')";
        $query_run=mysqli_query($connection,$query);
    
        if($query_run){
        
        
            $_SESSION['status']="Admin registerd";
            $_SESSION['status_code']="success";
            header('Location:admin.php');
        
        }else{
            $_SESSION['status']="Admin not registerd";
            $_SESSION['status_code']="error";
            header('Location:add.php');
        
      }}
    
    }
    
    ////adding recordddd  adminnnn
    $connection=mysqli_connect("localhost","root","","mtuadmin");
    if(isset($_POST['record'])){
        $username=$_POST['user'];
        $id=$_POST['id'];
        
       
            $query="INSERT INTO record(user,id) VALUES ('$username','$id')";
            $query_run=mysqli_query($connection,$query);
        
            if($query_run){
            
    
                $_SESSION['status']="Admin registerd";
                $_SESSION['status_code']="success";
                header('Location:adrecord.php');
            
            }else{
                $_SESSION['status']="Admin not registerd";
                $_SESSION['status_code']="error";
                header('Location:adrecord.php');
            
          }
        
        }

//sequrity log in
$connection=mysqli_connect("localhost","root","","mtuadmin");
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $id=$_POST['id'];
    
    $id_query="SELECT  * FROM admindb WHERE id='$id' AND username='$username'";
    $id_query_run=mysqli_query($connection,$id_query);

    if(mysqli_num_rows($id_query_run)>0){
        $_SESSION['username']=$username;
        header('Location:index.php');
        

    }else{
        $_SESSION['status']="please cheek your id or username";
        $_SESSION['status_code']="error";
        header('Location:login.php');
        }
    
    }
   ///////////////admin login 
   $connection=mysqli_connect("localhost","root","","mtuadmin");
if(isset($_POST['malogins'])){
    $username=$_POST['user'];
    $id=$_POST['pass'];
    
    $id_query="SELECT  * FROM control WHERE pass='$id' AND user='$username'";
    $id_query_run=mysqli_query($connection,$id_query);
  
    if(mysqli_num_rows($id_query_run)>0){
        $_SESSION['usernames']=$username;
        header('Location:admin.php');
        

    }else{
        $_SESSION['status']="please cheek your id or username";
        $_SESSION['status_code']="error";
        header('Location:adminLogin.php');
        }
    
    }












*/

//clothhhh+++++hhhhhhhhhh adddddd



$connection=mysqli_connect("localhost","root","","sequrity");
if(isset($_POST['clothaddsub'])){
    
    $trouser=$_POST['trouser'];

    $ids=$_POST['ids'];
    $jacket=$_POST['jacket'];
    

    $blanket=$_POST['blanket'];
    $shoes=$_POST['shoes'];
    $tshirt=$_POST['tshirt'];
    $shemiz=$_POST['shemiz'];
    $sport=$_POST['sport'];
    $other=$_POST['other'];
    $fname=$_POST['fname'];
   
    $id_query="SELECT  * FROM cloth WHERE ids='$ids'";
    $id_query_run=mysqli_query($connection,$id_query);

    if(mysqli_num_rows($id_query_run)>0){
        $_SESSION['status']="id is already exist try Another";
        $_SESSION['status_code']="error";
        header('Location:add.php');
        

    }else{
        
        $random_id=rand(time(),10000000);
        
        $query="INSERT INTO cloth(unique_id,fname,ids,trouser,jacket,blanket,tshirt,shoes,shemiz,sport,other) VALUES ('$random_id','$fname','$ids','$trouser','$jacket','$blanket','$shoes','$tshirt','$shemiz','$sport','$other')";
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



////edit cloth

///delte clothhhhh
//////////////////////adddd studentttt recorrrrdddddddd
/*
$connection=mysqli_connect("localhost","root","","mtuadmin");
if(isset($_POST['foulsubmit'])){
    $name=$_POST['name'];
    $id=$_POST['id'];
   
    $record=$_POST['record'];
    

    $fromt=$_POST['fromt'];
    
    $id_query="SELECT  * FROM foul WHERE id='$id'";
    $id_query_run=mysqli_query($connection,$id_query);

    if(mysqli_num_rows($id_query_run)>0){
        $_SESSION['status']="Student is already suspended in other case please go on search and add another record";
        $_SESSION['status_code']="error";
        header('Location:add.php');
        

    }else{
        $random_id=rand(time(),10000000);

        $query="INSERT INTO foul(name,id,record,fromt) VALUES ('$name','$id','$record','$fromt')";
        $query_run=mysqli_query($connection,$query);
    
        if($query_run){
        
        
            $_SESSION['status']="Record added succussfully";
            $_SESSION['status_code']="success";
            header('Location:index.php');
        
        }else{
            $_SESSION['status']="Record not added";
            $_SESSION['status_code']="error";
            header('Location:add.php');
        
      }}
    
    }




    */



   






?>
