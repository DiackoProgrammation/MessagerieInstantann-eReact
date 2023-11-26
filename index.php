<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="app.js" defer></script>
    <title>Message App</title>

</head>
<body>
    <section class="form signup">
        <form action="index.php" method="POST" autocomplete="off" >
        <p class="title">Messagerie instantannée</p>
        <p class="error-msg"></p>  
     <div class="name-container">
         <span>First Name <input id="Firstnameinput" name="fname" type="text" placeholder="First Name" autocomplete="off" required ></span>
         <span>Last Name <input id="Lastnameinput" name="lname" type="text" placeholder="Last Name" autocomplete="off" required></span>   
     </div>
     <div class="email">
        <span>Email Adress
            </span>
            <input id="emailinput" name="email" type="email" placeholder="Enter your email adress" autocomplete="off" required>
     </div>
     <div class="password">
        <span>Password</span>
            <input id="passwordinput" name="password" type="password" placeholder="Enter your password" autocomplete="off" required>
            
     </div>
    <p>Select image</p>
    <div class="file">
        <input class="file-btn" name="image" type="file" autocomplete="off" required >
    </div>
    <input  class="Continue" type="submit" value="Continuer" >
    </form>
    <p class="login-now">Already signed up?<a href="connexion.php">Login now</a></p>
</section>
    <script src="javascript/inscription.js"></script>
</body>
</html>