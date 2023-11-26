<?php
while($row = mysqli_fetch_assoc($sql)){
$sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = ($row['unique_id]'}
OR outcoming_msg_id = {$row['unique_id']}) AND {outcoming_msg_id = {$sendmsg}
OR outcoming_msg_id = $row['unique_id']} ORDER BY msg_id DESC LIMIT 1";

$query2 = mysqli_query($connection,$sql2);
$row2 = mysqli_fetch_assoc($query2);


$output .= '
<div class="restant">
<img src="php/images/'.$row['img'].'" alt="">
<div class="info">
    <label> <a href="chat.php?user_id='.$row['unique_id'].'">'.$row['fname']." ".$row['lname'].'</a></label>
    <p>this is a text message</p>
</div>
<span>Etat</span>
</div>
';
}




?>