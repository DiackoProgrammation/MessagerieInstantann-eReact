<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    include_once "config.php";
    $sendmsg = mysqli_real_escape_string($connection, $_POST['send-msg']);
    $receivemsg = mysqli_real_escape_string($connection, $_POST['receive-msg']);
    $output = "";

    $sql = "SELECT * FROM messages
            LEFT JOIN compte ON compte.unique_id = messages.outcoming_msg_id
            WHERE (outcoming_msg_id = {$sendmsg} AND incoming_msg_id = {$receivemsg})
            OR (outcoming_msg_id = {$receivemsg} AND incoming_msg_id = {$sendmsg}) ORDER BY msg_id DESC";

    $query = mysqli_query($connection, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            if ($row['outcoming_msg_id'] === $sendmsg) {
                $output .= '<div class="send-msg">
                                <p>' . $row['msg'] . '</p>                
                            </div>';
            } else {
                $output .= '<div class="receive-msg">
                            <img src"php/images/'. $row['img'] .'" alt"">
                                <p>' . $row['msg'] . '</p> 
                            </div>';
            }
        }
        echo $output;
    } else {
        echo "Aucun message trouvé.";
    }
} else {
    header("Location: ../login.php");
}
?>