<?php
session_start();
include_once('adminnav.php');

?>
<!DOCTYPE HTML>
<html>
<title>HELLO FROM ABRAR
</title>
<link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
<body>
    <div class="search">
    <form action="studentResource.php" method="post">
<input type="text" name="Seid" placeholder="Search here"></input>
<button type="submit" name="search"  style="font-weight:bold">Search</button>
</form>
    </div>  
<style>
    body{

        background:#3778c2;
    }
    .search button[type="submit"]{
        color:white;
        margin-top:12px;
        background:#e56b1f;
        padding:8px;
        font-size:15px;
        border:none;
        text-align:center;
        outline:none;
        border-radius:6px;
        border-top-left-radius:0px;
        border-bottom-left-radius:0px;
        width:100px;
        cursor:pointer;
        margin-left:-105px;
}
.search input[type="text"]{
    margin-top:100px;
    margin-left:500px;
    padding:8px;
    font-size:15px;
    outline:none;
    border-radius:6px;
    border:0.5px solid #728ca3;
    width:300px;
}
    </style>
<?php

$connection=mysqli_connect("localhost","root","","sequrity");
if(isset($_POST['search'])){
    $idnum=$_POST['Seid'];
    //cheeking existance of id
  $id_query="SELECT  * FROM laptop WHERE idnum='$idnum'";
    $id_query_run=mysqli_query($connection,$id_query);

    if(mysqli_num_rows($id_query_run)>0){
        //display user info single
    $query="SELECT * FROM laptop WHERE idnum='$idnum'";
$query_run=mysqli_query($connection,$query);
?><table></br></br>
    <div class="lov"><h1 >Laptop</h1>
</div>
    
<style>
.lov h1{
    text-align:center;
    color:white;
    background:#ff6e40;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
</style><thead> <tr>
        <th>Name</th>
        <th>ID</th>
        <th>serial</th>
        <th>brand</th>
        <th>color</th>
        <th>Edit</th>
        <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                <?php
if(mysqli_num_rows($query_run)>0){
   while($row=mysqli_fetch_assoc($query_run))
    {
      ?>
          <tr>
                  <td><?php echo $row['user'];?></td>
                  <td><?php echo $row['idnum'];?></td>
                  <td><?php echo $row['serial'];?></td>
                  <td><?php echo $row['brand'];?></td>
                  <td><?php echo $row['color'];?></td>

                  <form action="edit.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['idnum'];?>">
                  <td><button type="submit"  name="edit_btn" style="background:#00743f">EDIT</button></td>
                 
    </form>
    <form action="db.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['idnum'];?>">
                  <td><button  type="submit" name="deletebutton" style="background:#d71b3b">DELETE</button></td>
            </tr>
    </form>
            <?php
    }}//end of both query if and while statemnt
            else{//else of ifquery
                $_SESSION['status']=" No Result found please enter another id";
    $_SESSION['status_code']="error";

   }//close of ifquery else
   ?>
<?php
}else{

    $_SESSION['status']=" No Result found please enter another id";
    $_SESSION['status_code']="error";


}
}
else{
      
}
?>
<?php
?>
<?php

$connection=mysqli_connect("localhost","root","","sequrity");
if(isset($_POST['search'])){
    $ids=$_POST['Seid'];
    //cheeking existance of id
  $id_query="SELECT  * FROM cloth WHERE ids='$ids'";
    $id_query_run=mysqli_query($connection,$id_query);

    if(mysqli_num_rows($id_query_run)>0){
        //display user info single
    $query="SELECT * FROM cloth WHERE ids='$ids'";
$query_run=mysqli_query($connection,$query);
?><table>
    </br></br>
    <h1 >Cloth and other Resource</h1>

<style>
h1{
    text-align:center;
    color:white;
    background:#ff6e40;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}

</style><thead> <tr>
            <th>Name</th>
            <th>id</th>
       <th>TROUSER</th>
       
        <th>jacket</th>
        <th>blanket</th>
        <th>shoes</th>
        <th>t-shirt</th>
        <th>shemiz</th>
        <th>sport</th>
        <th>other</th>

        <th>edit</th>
        <th>delte</th>
            </tr>
            </thead>
            <tbody>
                <?php
if(mysqli_num_rows($query_run)>0){
   while($row=mysqli_fetch_assoc($query_run))
    {
      ?>
          <tr>
                 <td><?php echo $row['fname'];?></td>
                 <td><?php echo $row['ids'];?></td>
                  <td><?php echo $row['trouser'];?></td>
                  
                  <td><?php echo $row['jacket'];?></td>
                  <td><?php echo $row['blanket'];?></td>
                  <td><?php echo $row['shoes'];?></td>
                  <td><?php echo $row['tshirt'];?></td>
                  <td><?php echo $row['shemiz'];?></td>
                  <td><?php echo $row['sport'];?></td>
                  <td><?php echo $row['other'];?></td>
                  

                  <form action="clothedit.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['ids'];?>">
                  <td><button type="submit"  name="edit_btn" style="background:#00743f">EDIT</button></td>
                 
    </form>
    <form action="db.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['ids'];?>">
                  <td><button  type="submit" name="deletebutton" style="background:#d71b3b">DELETE</button></td>
            </tr>
    </form>
            <?php
    }}//end of both query if and while statemnt
            else{//else of ifquery
                $_SESSION['status']="There is no such type of user!!1";
                $_SESSION['status_code']="error";
                
   }//close of ifquery else
   ?>
<?php
}else{
   
   
}}

else{
   
   
}

?>
            <style>
table{
    
    width:100%;

}
table th{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
text-align:left;   
 background:#1d3c45;
    color:#fff;
    text-transform:uppercase;
    border:none;
    margin:0px;

    padding:4px;
}table tr{
    border:3px solid green;
    font-size:18px;
    padding:0px;
    line-height:25px;
}
table tr td{
    text-transform:uppercase;
    background:#408ec6;
    color:#fff;
    padding:8px;
    border-radius:5px;
    font-size:20px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight:bold;

}
table tr td button{
    text-align:center;
    align-items:center;
    float:center;
    color:white;
    padding:9px;
    outline:none;
    border:none;
    border-radius:12px;
    width:70px;
    
}

</style>
<script src="js/sweetalert.min.js"></script>
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