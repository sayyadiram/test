<?php 
    //include 
    include_once'admin_signin_details.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="title">
        <h2>Login Form</h2>
    </div>
    <div class="main">
        <div class="imgcontainer">
            <img src="./assets/image/user.png" alt="Avatar" class="avatar"> 
        </div>    
        <form  method="post" action="admin_signin_details.php">
            <div class="container">    
                <?php if(isset($_SESSION['msg'])):?>
                    <div class="msg">
                        <?php
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        ?>
                    </div>
                <?php endif ?>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Admin name" name="admin_name">

                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password">
                    
                <input type="submit" name="Login" value="Login" >
            
                <button class="cancelbtn" name="Cancel">Cancel</button>
            
                <span class="psw">Forgot <a href="#">password?</a></span>
            
            </div>
        </form>
    </div>
</body>
</html>