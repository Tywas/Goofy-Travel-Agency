<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="login_register_style.css">
        <link rel="stylesheet" href="site_header_styles.css">
        <title>Login</title>

    </head>
    <body>
        <header>
            <? include "site_header.php" ?>
        </header>
        <div class="login_register-page">
            <div class="login_register-form">
                <div class="login_register-content">
                    <div class="login_register-header">
                        <h3>LOGIN</h3>
                        <p>Please enter your credentials to login.</p>
                    </div>
                </div>
            <form class="login-form" method="POST" action="login_handler.php">
            <input type="text" placeholder="username" name="username" id="username"> </input>
            <input type="password" placeholder="password" name="password" id="password"> </input>
            <input type="submit" value="LOGIN" id="login_button"> </input>
            <p class="register_message">Not registered? <a href="register.php">Create an account</a></p>
            <p class="registration_error_message">
                <?php
                    if(isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                ?>
            </p>
            </form>
            </div>
        </div>
    </body>
</html>