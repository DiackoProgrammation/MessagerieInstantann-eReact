<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Message App</title>
   
</head>
<body>
    <section class="form login">
<form action="connexion.php" method="POST">


    <div class="login-container">
        <p class="title">Realtime Chat App</p>
            
        <div class="email">
            
            <label>Email adress</label>
            <input id="emailinput" name="email" type="text" placeholder="Enter your email adress">
        </div>
        <div class="password">
            <label>Password</label>
            <input id="passwordinput" name="password" type="password" placeholder="Enter your password">
            </div>
            
            <input class="Continue" type="submit" value="Continue to chat">
            
            <p class="login-now">Not again signed up?<a href="index.php">Sign up now</a></p>
            
            <script src="javascript/connexion.js"></script>
            
            
        </div>
    </form>
    </section>
    </body>
    </html>