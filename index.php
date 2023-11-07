<?php 
session_start();
$thisPage="index"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Adventure Agency</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="site_header_styles.css">
    <link rel="icon" type="image/x-icon" href="favicon-32x32.ico">
<body>
    <header>
        <? include "site_header.php" ?>
    </header>

    
    <section id="home">
        <div class="image_container">
            <img class="home_img" src="Ininerary_images\Space.webp"> 
<!-- text-align:center;white-space:pre-wrap; -->
            <div class="overlay-text">
                <h1 class='image_styling'> The Future of Travel</h1>
            </div>

            </img>
        </div>    
    <!-- Add introductory content here -->
    </section>

    <?php include "site_footer.php"; ?>
</body>
</html>