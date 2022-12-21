<?php
while($row=mysqli_fetch_assoc($sql)){

    $sql2="SELECT * FROM messaga WHERE (incoming={$row['un_id']}
    OR outgoing	={$row['un_id']}) AND (incoming={$outgoing_id}
    OR outgoing={$outgoing_id}) ORDER BY m_id DESC LIMIT 1";

    $query2=mysqli_query($conn, $sql2);
    $row2=mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2) > 0){

        $result=$row2['mesg'];
    }else{

        $result="NO message available";
    }
    ($outgoing_id == $row2['incoming']) ? $you ="you:": $you=""; 
    (strlen($result) > 19) ? $mesg = substr($result, 0 ,19).'...':$mesg = $result;
    ($row['state']=="offline") ? $offline="offline" : $offline="";
    $output .= '<a href="adminstadium.php?u_id='.$row['un_id'].'">
                        <div class="content">
                        <img src="images/'. $row['images'] .'" alt="">
                        <div class="details">
                        <span style="color:#fff">'. $row['name'] .'</span>
                        <p style="color:#efefef">'.$you . $mesg.'</p>
                        </div> 
                        </div>
                        <div class="status-dot '.$offline.'"><i class="fas fa-circle"></i></div></a>';

}


?>