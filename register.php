<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="login_register_style.css">
        <link rel="stylesheet" href="site_header_styles.css">
        <title>Register</title>
    </head>
    <body>
        <header>
            <? include "site_header.php" ?>
        </header>

        <div class="login_register-page">
            <div class="login_register-form">
                <div class="login_register-content">
                    <div class="login_register-header">
                        <h3>REGISTER</h3>
                        <p>Please enter credentials to register.</p>
                    </div>
                </div>
                <form class="login-form" method="POST" action="register_handler.php">
                    <input type="text" placeholder="first name" name="fname" id="fname"> </input>
                    <input type="text" placeholder="last name" name="lname" id="lname"> </input>
                    <input type="text" placeholder="username" name="username" id="username"> </input>
                    <input type="text" placeholder="email" name="email" id="email"> </input>
                    <input type="password" placeholder="password" name="password" id="password"> </input>
                    <input type="password" placeholder="confirm-password" name="confirm_password" id="confirm_password"> </input>
                    <input type="submit" value="REGISTER" id="login_button"> </input>
                        <?php
                            if(isset($_SESSION['messages'])){
                                foreach($_SESSION['messages'] as $col_name => $string) {
                                    echo "<p class='registration_error_message'>" . $_SESSION['messages'][$col_name] . "</p>";
                                    unset($_SESSION['messages'][$col_name]);
                                };
                                unset($_SESSION['messages']);
                            }
                        ?>
                </form>
            </div>
        </div>
    </body>
</html>
