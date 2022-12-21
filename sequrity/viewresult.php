


<?php

session_start();
include_once("config.php");

?>

   

<?php
include_once("adminnav.php");


?>
<div class="alert">
    <?php
    $connection=mysqli_connect("localhost","root","","sequrity");
$query="SELECT * FROM laptop";
$query_run=mysqli_query($connection,$query);
?><table>
    <h2 >Laptop</h2>

<style>
   
h2{
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
        <th>GC Date</th>
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
                  <td><?php echo $row['gcdate'];?></td>

                  <form action="edit.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['idnum'];?>">
                  <td><button type="submit"  name="edit_btn" style="background:#00743f">EDIT</button></td>
                 
    </form>
    <form action="db.php" method="post">
    <input type="hidden" name="delete_idddd" value="<?php echo $row['idnum'];?>">

                  <td> <a href="#"  onclick="drone()" style="background:#d71b3b">Yes</a>
</td>
                  <div class="sweet_alert">
<div class="another">
   <p>do you want to delete ?</p>
   <div class="try">
 <button  type="submit" name="deletebutton" style="background:#d71b3b">Yes</button>
   <a  onclick="drone()" style="background:#3eb650">no</a>
</div>
</div>
</div>
<script>
var luvers=document.querySelector(".sweet_alert");
function drone(){
    luvers.classList.toggle("fun");
}

   </script>
</tr>
    </form>
<style>

.sweet_alert {
display:none;
position:absolute;
   margin-top:14px;
   background:#fff;
   width:270px;
   height:140px;
   border-radius:30px;
}.another{
   margin:8px;
   padding:8px;
}
.fun{
   display:block;
}
.another p{
   padding:2px;
   border-radius:20px;
   margin-top:20px;
   text-align:center;
   border:2px solid #3775c2;
   font-weight:700;
}.try{
   display:flex;
   justify-content:space-between;
   padding:8px;
   margin-top:8px;
   text-align:center;

}
 .try a{
    text-transform:capitalize;
   border-radius:50%;
   width:auto;
   background:red;
   color:#fff;
   padding:8px;
   outline:none;
   border:none;
   margin:5px;
}</style>

            
            <?php
    }}
            else{
       echo "no record";
   }?>
  
   <?php

   $connection=mysqli_connect("localhost","root","","sequrity");
   $query="SELECT * FROM cloth";
$query_run=mysqli_query($connection,$query);
?>
            </tbody>

            </table>
<h2 >Cloth and other Resource</h2>

<style>
h2{
    text-align:center;
    color:white;
    background:#ff6e40;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
padding: 6px;
}

</style>
            <table><thead> <tr>
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
    <form action="clothedit.php" method="post">
                  <input type="hidden" name="delete_ids" value="<?php echo $row['ids'];?>">
                  <td><button  type="submit" name="deletebutton" style="background:#d71b3b">DELETE</button></td>
                  
    </tr>
            <?php
    }}
            else{
       echo "no record";
   }
   ?>

            </tbody>

            </table>


<style>
    
table{
    
    width:100%;

}
table th{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
text-align:left;    
background:#000000;
    color:#fff;
    text-transform:uppercase;
    border:none;
    margin:0px;

    padding:2px;
}table tr{
    border:3px solid green;
    font-size:11px;
    padding:0px;
    line-height:11px;
}
table tr td{
    text-transform:uppercase;
    background:#408ec6;
    color:#fff;
    padding:2px;
    font-size:11px;
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


            </div>

           <?php
            //delete
     

       
           
           ?>



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

