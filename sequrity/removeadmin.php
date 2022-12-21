
<?php

session_start();
include_once("config.php");

?>

   
<?php

include_once("superadmin.php");

?>



          

<div class="alert">
    <?php
    $connection=mysqli_connect("localhost","root","","sequrity");
$query="SELECT * FROM juadmin";
$query_run=mysqli_query($connection,$query);






?><table>
    
    
    <h2 >admin list</h2>

<style>
h2{
    text-align:center;
    color:white;
    background:#ff6e40;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}

</style><thead> <tr>
        <th>Name</th>
        <th>password</th>
        <th>role</th>
        <th>image</th>
        
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
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['passwordd'];?></td>
                  <td><?php echo $row['role'];?></td>
                  <td><img src="images/<?php echo $row['images'];?>" style="width:50px;height:50px;border-radius:50%;"></td>

                
    <form action="db.php" method="post">
                  <input type="hidden" name="deletea_id" value="<?php echo $row['passwordd'];?>">
                  <td><button  type="submit" name="deletebuttona" style="background:#d71b3b">DELETE</button></td>
            </tr>
    </form>
            <?php
    }}
            else{
       echo "no record";
   }
?>
   <style>
   table{
       
       width:100%;
   
   }
   table th{
       font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
   text-align:left;    
   background:#c6d7eb;
       color:#d902ee;
       text-transform:uppercase;
       border:none;
       margin:0px;
   
       padding:2px;
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
       padding:2px;
       border-radius:5px;
       font-size:15px;
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
       cursor:pointer;
   }
   h2{
    text-align:center;
    color:white;
    background:#ff6e40;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
padding: 6px;
}
   </style>
   
   
               </div>
   
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
   
   