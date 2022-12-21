<?php

session_start();
include_once("config.php");
$name=mysqli_real_escape_string($conn,$_POST['name']);
$passwordd=mysqli_real_escape_string($conn,$_POST['passwordd']);
$role=mysqli_real_escape_string($conn,$_POST['role']);


if(!empty($name) && !empty($passwordd) && !empty($role)){
$sql="SELECT  * FROM juadmin WHERE passwordd='$passwordd'";
$sqlquery=mysqli_query($conn,$sql);

if(mysqli_num_rows($sqlquery)>0){

echo " password is already exist ";
}

else
{ //2

$sql4="SELECT  * FROM juadmin WHERE  name='$name'";
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
$state="Offline"; //user online or not
// let add to db
$query="INSERT INTO juadmin(un_id,name,passwordd,role,images,state) VALUES ('$random_id','$name','$passwordd','$role','$new_image','$state')";
$query_run=mysqli_query($conn,$query);

if($query_run){

$sql3=mysqli_query($conn,"SELECT * FROM juadmin WHERE passwordd='{$passwordd}'");
if(mysqli_num_rows($sql3)>0){

$row=mysqli_fetch_assoc($sql3);
$_SESSION['un_id']=$row['un_id'];
if($row['role']==="Sequrity"){

echo "success";
}else if($row['role']==="Record"){
    echo "good";

}
else if($row['role']==="control"){
    echo "control";

}else {
    echo "true";


}

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