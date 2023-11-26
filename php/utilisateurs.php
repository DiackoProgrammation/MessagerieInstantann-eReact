<?php

session_start();
include_once "config.php";
$sql = mysqli_query($connection, "SELECT * FROM compte");
$output = "";

if(mysqli_num_rows($sql) == 1){
    $output = "No users are available to chat";
}elseif(mysqli_num_rows($sql) > 0){
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '
        <div class="restant">
        <img src="php/images/'.$row['img'].'" alt="">
        <div class="info">
            <label> <a href="chat.php?user_id='.$row['unique_id'].'">'.$row['fname']." ".$row['lname'].'</a></label>
            <p>Send a message</p>
        </div>
        <span></span>
    </div>
        ';
    }
}
echo $output;

?>