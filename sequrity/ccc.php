if($row['role']==="Sequrity"){

echo "success";
}else if($row['role']==="Record"){
    echo "good";

}
else if($row['role']==="control"){
    echo "control";

}else {
    echo "true";


}///
$_SESSION['role']=$row['role'];
if($_SESSION['role']=="Sequrity"){
include_once("adminnav.php");
}else{
    include_once("studentrecordadmin.php");
    
}
////

 else if(data=="good"){
    
    location.href="insertPc.php";    
}
else if(data=="control"){

    location.href="adsignupg.php";    
}
else if(data=="true"){

    location.href="index.php";    
}

echo "data adeddddd";
}
else
{ 
 echo "your data is going wrongg";

}
    $sql2="SELECT pass * FROM judb WHERE pass='$pass'";
            $sqlquery2=mysqli_query($conn,$sql2);
            if(mysqli_num_rows($sqlquery2)>0){
                $row=mysqli_fetch_assoc($sql2);
                $_SESSION['unique_id']=$row['unique_id'];.error-txt{
    display: none;
    color:#721c24;
    background:#440eda;
    text-align: center;
    border-radius: 5px;
    padding:8px 10px;
    font-weight:500;
    margin-bottom: 10px;
    border:1px solid #f5c6cb;
    

}

if(data=="success"){

console.log(data);           }
           else{
error_txt.textContent=data;
error_txt.style.display="block";

           }//////////////////////










           http://localhost/sequrity/index.php




