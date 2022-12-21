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
       
    <form action="search.php" method="post">
<input type="text" name="Seid" placeholder="Enter student id here">
<button type="submit" name="search"  style="font-weight:bold;color:#0f2557"><i class="fas fa-search"></i></button>
</form>
<button onclick="toggleButtonTest()">how to search </button>
        <div class="chance">
        <p>step 1. click text input</p>
        <p>step 2. enter student id</p>
        <p>step 3. enter or clik search i con</p>
        </div>
        <style>
            button i{
                background:#efefef;
                padding:9px;
                border-radius:50%;
            }
            button{
                text-transform:capitalize;
                background:#e56b1f;
                color:#fff;
                padding:10px;
                outline:none;
                border:none;
                border-radius:10px;
                cursor:pointer;
                margin-top:40px;
                text-align:center;
            }
            .chance{
                display:none;
            }
            .chance p{
                margin-top:25px;
                letter-spacing:4px;
                text-transform:capitalize;
                text-align:center;
                font-size:16px;
                font-weight:600;
                color:#fff;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
text-align:center;
            }
            .lovers{
                display:block;
            }
            </style>

<script>
        var ButtonTest=document.querySelector(".chance");

function toggleButtonTest(){
    ButtonTest.classList.toggle("lovers");
    

}

        </script>

    </div>

    
<style>

    body{
        background:#0f2557;
    }
    .search{

        text-align:center;
    }
    .search button[type="submit"]{
        margin-left:-100px;
        color:white;
        margin-top:112px;
        background:transparent;
        padding:8px;
        font-size:15px;
        border:none;
        text-align:center;
        outline:none;
        border-radius:6px;
        border-top-left-radius:0px;
        border-bottom-left-radius:0px;

        width:20px;
        cursor:pointer;
        
}
.search input[type="text"]{
    padding:8px;
    font-size:15px;
    outline:none;
    
    border:none;
    width:250px;
margin-right:40px;
border-radius:0px 50px 50px 3px;
}

    </style>

    


<?php

$connection=mysqli_connect("localhost","root","","sequrity");
if(isset($_POST['search'])){
    $idnum=$_POST['Seid'];
    //cheeking existance of id
  $id_query="SELECT  * FROM foul WHERE idnum='$idnum'";
    $id_query_run=mysqli_query($connection,$id_query);

    if(mysqli_num_rows($id_query_run)>0){
        //display user info single
    $query="SELECT * FROM foul WHERE idnum='$idnum'";
$query_run=mysqli_query($connection,$query);
?><table>
    </br></br>
    <h1 >Student Record</h1>

<style>
h1,h2{
    text-align:center;
    color:white;
    background:#ff6e40;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}

</style><thead> <tr>
            <th>Name</th>
            <th>Id</th>
          <th>record</th>
       
           <th>from</th>
        

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
                 <td><?php echo $row['names'];?></td>
                 <td><?php echo $row['idnum'];?></td>
                  <td><?php echo $row['records'];?></td>
                  
                  <td><?php echo $row['froms'];?></td>
                 
                  

                  <form action="clothedit.php" method="post">
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
                $_SESSION['status']="There is no student susupenden in this id";
                $_SESSION['status_code']="error";
        
   }//close of ifquery else
   ?>
<?php
}else{

    $_SESSION['status']="There is No Student Suspended in This id";
                $_SESSION['status_code']="error";
        

    
}}else{

   

    
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





</body>
</html>
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