<?php
include_once "config.php";

$searchTerm = mysqli_real_escape_string($connection,$_POST['searchTerm']);
$output = "";
$sql = mysqli_query($connection,"SELECT * FROM compte WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%'");
if(mysqli_num_rows($sql)>0){
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '
        <div class="restant">
        <img src="php/images/'.$row['img'].'" alt="">
        <div class="info">
        <label> <a href="chat.php">'.$row['fname']." ".$row['lname'].'</a></label>
        <p>Send a message</p>
        </div>
        <span></span>
    </div>
        ';
    }
}else{
    $output .= "No user found related to your search term";
}
echo $output;
?>