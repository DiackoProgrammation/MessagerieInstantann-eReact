<?php
session_start();
if(isset($_SESSION['unique_id'])){
    include_once "config.php";
    $sendmsg = mysqli_real_escape_string($connection,$_POST['send-msg']);
    $receivemsg = mysqli_real_escape_string($connection,$_POST['receive-msg']);
    $message  = mysqli_real_escape_string($connection,$_POST['message']);
if(!empty($message)){
    $sql = mysqli_query($connection,"INSERT INTO messages(incoming_msg_id,outcoming_msg_id,msg)
                                     VALUES ({$receivemsg},{$sendmsg},'{$message}')") or die();
                                     
    echo "Message bien inseré";                                 

}else{
    header("Location: ../login.php");
}


}
?>