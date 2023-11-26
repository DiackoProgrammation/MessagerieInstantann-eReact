<?php
session_start();
if(!isset($_SESSION['unique_id'])){
    header("location:connexion.php");
};



?>

<?php

include_once "header.php";

?>
<body>
    <?php

include_once "php/config.php";
$sql = mysqli_query($connection,"SELECT * FROM compte WHERE unique_id = {$_SESSION['unique_id']}");
if(mysqli_num_rows($sql)> 0){
$row = mysqli_fetch_assoc($sql);
}
    ?>
    
    <section class="user-container">

        <div class="div">
            <div class="premier">

                <img src="php/images/<?php echo $row['img']?>" alt="kuroro">
                
                <div class="name">
                    <label><?php echo $row['fname']. " " . $row['lname']?></label><span><?php echo $row['statut'] ?> </span>
                </div>
            </div>
            

    <button><a href="connexion.php">Logout</a></button>
</div>
<form action="users.php" method="POST">

    <div class="search">
        <input  class="searchbar" type="text" placeholder="Enter name to search">
       
</form>
</div>
<div class="users-list">
</div>

</section>
<script src="javascript/users.js"></script>
</body>
</html>