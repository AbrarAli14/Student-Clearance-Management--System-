<?php


session_start();
if(isset($_SESSION['un_id'])){
include_once("config.php");
$outgoing_id=mysqli_real_escape_string($conn,$_POST['outgoing_id']);
$incoming_id=mysqli_real_escape_string($conn,$_POST['incoming_id']);
$output="";
$sql="SELECT *FROM messaga 
LEFT JOIN juadmin ON juadmin.un_id=messaga.incoming
WHERE (outgoing={$outgoing_id} AND incoming={$incoming_id})
OR (outgoing={$incoming_id} AND incoming={$outgoing_id}) ORDER BY m_id";

$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){


    while($row=mysqli_fetch_assoc($query)){

        if($row['outgoing'] === $outgoing_id){

$output.=' <div class=" chat outgoingMsg">
              <div class="details">
                  <p style="padding:8px">'.$row['mesg'].'</p>

             </div>
           </div>';

        }else{

            $output.='<div class="chat incomingMsg">
            <div class="details">
                <img src="images/'.$row['images'].'">
                <p style="padding:8px">'.$row['mesg'].'</p></br>
            </div>
       </div>';
        }
    }

    echo $output;
}
}else {
   echo "fuckkk";
}


?>