<?php
session_start();

?>
<?php
include_once('adminnav.php');

?>

<div class="alert">
    <?php
    $connection=mysqli_connect("localhost","root","","sequrity");
$query="SELECT * FROM foul";
$query_run=mysqli_query($connection,$query);


?><table>
    <div class="hed">
    <h1 >Suspended Student list</h1>
    </div>
<style>
    body{
        background:#0f2557;

    }
.hed h1{
    text-align:center;
    color:white;
    background:#ff6e40;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}

</style>
    
    <thead> <tr>
        <th>Name</th>
        <th>ID</th>
        <th>record</th>
        <th>suspend from</th>
        
        <th>ADD</th>
        <th>Remove</th>
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

                  <form action="recordupdate.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['idnum'];?>">
                  <td><button type="submit"  name="edit_btn" style="background:#00743f">ADD</button></td>
                 
    </form>
    <form action="db.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['idnum'];?>">
                  <td><button  type="submit" name="redeltebutton" style="background:#d71b3b">Remove</button></td>
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
    
}

</style>













            </div>



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

