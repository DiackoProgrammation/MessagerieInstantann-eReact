<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="chat-container">
        <header>
            <?php
            include_once "php/config.php";
            $user_id = mysqli_real_escape_string($connection,$_GET['user_id']);
            $sql = mysqli_query($connection,"SELECT * FROM compte WHERE unique_id = $user_id");
            if(mysqli_num_rows($sql)>0){
               $row = mysqli_fetch_assoc($sql);
            }else{
                echo "$user_id non existant ";
            }

            ?>
            <a href="users.php">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <img src="php/images/<?php echo $row['img']?>" alt="">
            <div class="user-infos">
                <label for=""><?php echo $row['lname']. " " .$row['fname']  ?></label>
                <span><?php echo $row['statut']?></span>
            </div>
        </header>
        <main>
            <div class="chat-area">
        </div>
        </main>
        <footer>
            <form action="php/insert-chat.php"  class="typing-area">
                <div class="send-message">
                    <input type="text" name="send-msg" value="<?php echo $_SESSION['unique_id'];?>" hidden>
                    <input type="text" name="receive-msg" value="<?php echo $user_id;?>" hidden>
                    <input type="text" name="message" class="txt-msg" placeholder="Text a new message">
                    <button class="send"><i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </form>
        </footer>
    </div>
    <script src="javascript/chat.js"></script>
</body>
</html>