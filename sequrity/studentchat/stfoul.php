
<?php
session_start();

include_once('studentnav.php');

?>

<div class="alert">
    <?php
    $connection=mysqli_connect("localhost","root","","sequrity");

    $query="SELECT * FROM foul WHERE idnum='{$_SESSION['passing']}'";
$query_run=mysqli_query($connection,$query);
?><table>  
<h2 >MY RECORD</h2>
<div class="err">

</div><style>
h2{
    text-align:center;
    color:white;
    background:#ff6e40;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}
.err {

display:none;
background:red;
color:white;
border-radius:10%;
width:30px;
height:10px;
margin:2px;
padding:4px;
}

</style>

                        <thead>
                            <tr>


                            
                        <th>Name</th>
                        <th>ID</th>
                        <th>record</th>
                        <th>suspend from</th>
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
   
    
</tr>
<?php
}
$_SESSION['status']="  you are free from any record";
$_SESSION['status_code']="success";
header('Location:stfoul.php');
}
else{
    
    $_SESSION['status']="  you are free from any record";
    $_SESSION['status_code']="success";
    header('Location:stfoul.php');
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
    
}

</style>













</div> 
</body>
</html>

<script src="message.js"></script>

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
