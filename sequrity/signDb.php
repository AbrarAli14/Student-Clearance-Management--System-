                    <?php

                    session_start();
                    include_once("config.php");
                    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
                    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
                    $uname=mysqli_real_escape_string($conn,$_POST['uname']);
                    $pass=mysqli_real_escape_string($conn,$_POST['pass']);
                    $dept=mysqli_real_escape_string($conn,$_POST['deptSelect']);
                    $dgc=mysqli_real_escape_string($conn,$_POST['dgc']);

    if(!empty($fname) && !empty($lname) && !empty($uname) && !empty($pass) && !empty($dgc)){
    $sql="SELECT  * FROM judb WHERE pass='$pass'";
        $sqlquery=mysqli_query($conn,$sql);

        if(mysqli_num_rows($sqlquery)>0){

        echo " password is already exist ";
    }
    
    else
       { //2

        $sql4="SELECT  * FROM judb WHERE  uname='$uname'";
        $sqlquery4=mysqli_query($conn,$sql4);

        if(mysqli_num_rows($sqlquery4)>0){

        echo " Username is already exist ";
    }else{
        
        
        if(isset($_FILES['image'])){


            $img_name=$_FILES['image']['name'];
            $tmp_name=$_FILES['image']['tmp_name'];
            
            ///lets exploade image 
            $img_exploade=explode('.',$img_name);
            $img_ext=end($img_exploade);
            $extension=['png','jpeg','jpg'];//file type png jpg or not
            if(in_array($img_ext,$extension)===true){  //if the user upload is matched or not
                $time=time();// i need time because of when user upload same image at the they can differnitae by its time
                    $new_image=$time.$img_name;


if( move_uploaded_file($tmp_name,"images/".$new_image)){ //if user upload image to our new folder succussfully

    $random_id=rand(time(),10000000);//creating random id for user
    $status="Active now"; //user online or not
// let add to db
$query="INSERT INTO judb(unique_id,fname,lname,uname,pass,deptSelect,dgc,img,status) VALUES ('$random_id','$fname','$lname','$uname','$pass','$dept','$dgc','$new_image','$status')";
$query_run=mysqli_query($conn,$query);

if($query_run){

$sql3=mysqli_query($conn,"SELECT * FROM judb WHERE pass='{$pass}'");
if(mysqli_num_rows($sql3)>0){

    $row=mysqli_fetch_assoc($sql3);
    $_SESSION['unique_id']=$row['unique_id'];

    echo "success";
}
                
    
 }else

    {
        echo "data failed";
    }

}else{


    echo "user not upload at correct place";
}


            }
            else{

                echo "no extension";
            }

        }
        else{


            echo "not set isset";
        }}
 }//id exist elsee end 2





    }///end of empty if
else{



    echo "please fill all input";
}


        ?>