<?php 
session_start();
$thisPage="packages"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Packages</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="site_header_styles.css">
    <link rel="icon" type="image/x-icon" href="favicon-32x32.ico">
</head>
<body>
    <header>
        <? include "site_header.php" ?>
    </header>

    <div class="card-box">
        <div class="card">
            <h2>*Limited Time* Free Itineraries</h2>
            <p class="card-discription">
                Most people pay for their personalized
                itinerary but we have a best trips planned
                just for you!
            </p>
            <h3>$0</h3>
            <h6>For Life!</h6>
            <p class="n_price">Normal : <del>$1,500 / month </del></p>
            <h4>Features</h4>
            <p class="card-features">- Great fun!</p>
            <p class="card-features">- Lots of adventure!</p>
            <p class="card-features">- Just a little bit Goofy!</p>
            <a href="itineraries.php">
            <input class="card-btn_effect" type="button" value="Select">
            </a>
        </div>
    </div>

    <?php include "site_footer.php"; ?>
</body>
</html>