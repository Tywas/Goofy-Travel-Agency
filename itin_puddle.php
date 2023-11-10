<?php
session_start();
// $thisPage="itineraries";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Itinerary_puddle</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="site_header_styles.css">

    </head>
    <body>
        <!-- HEADER CONTENT -->
        <header>
            <?php include "site_header.php" ?>
        </header>

        <!-- CONTENT -->

        <section id="home">
            <div class="image_container">
                <img class="itinerary_img" src="Ininerary_images\Puddle.jpg"> 
                <div class="overlay-text">
                    <h1 class='image_styling'>What a great puddle to jump in!</h1>
                </div>

                </img>
            </div>    
        </section>

        <table class="itinerary-description">
            <tr class="itinerary-table_headers">
                <th>Day</th>
                <th>Activity 1</th>
                <th>Activity 2</th>
                <th>Activity 3</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>1</th>
                <th>Morning: Arrive at the Puddle Paradise Resort, a whimsical destination known for its record-breaking puddles. Get geared up with waterproof boots and a playful attitude.</th>
                <th>Afternoon: Start with a warm-up session, learning the art of puddle jumping from expert instructors. Practice different jumping styles and techniques to maximize the splash.</th>
                <th>Evening: Join a puddle-themed dance party by the water's edge. Let loose and groove to the rhythm while getting splashed by synchronized puddle fountains.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>2</th>
                <th>Morning: Embark on a puddle exploration adventure. Discover hidden puddle gems in the resort's lush surroundings. Take a guided tour with puddle experts who share fascinating facts about the science of puddles.</th>
                <th>Afternoon: Compete in the Great Puddle Jumping Challenge. Navigate obstacle courses, master long-distance jumps, and showcase your unique jumping style. Earn points for creativity and enthusiasm.</th>
                <th>Evening: Relax with a soothing puddle-side spa experience. Indulge in mud masks and puddle-inspired treatments to rejuvenate and refresh.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>3</th>
                <th>Morning: Take a hot air balloon ride over the Puddle Paradise Resort. Marvel at the landscape dotted with shimmering puddles as you enjoy breathtaking views from above.</th>
                <th>Afternoon: Attend a puddle art workshop. Create your own masterpiece by incorporating puddle splashes into a canvas. Embrace the spontaneous and colorful world of puddle art.</th>
                <th>Evening: Join a puddle-themed feast. Indulge in delicious dishes inspired by water, rain, and puddles. Enjoy the culinary delights while surrounded by the enchanting ambiance of illuminated puddles.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>4</th>
                <th>Morning: Challenge yourself with extreme puddle jumping. Head to the resort's puddle cliffs and experience the thrill of jumping from different heights into giant puddles. Safety is a priority, but the excitement is guaranteed.</th>
                <th>Afternoon: Participate in a puddle photography contest. Capture the most dynamic and picturesque puddle jumps, splashes, and reflections. Share your photos with fellow puddle enthusiasts for a chance to win exciting prizes.</th>
                <th>Evening: Attend the Puddle Carnival, a lively celebration with games, rides, and entertainment inspired by the joy of puddle jumping. Conclude the night with a grand fireworks display reflecting off the resort's largest puddle.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>5</th>
                <th>Morning: Bid farewell to Puddle Paradise with a group puddle jump, creating a spectacular and memorable splash finale. Receive a certificate of achievement and a Puddle Jumping Champion medal as a memento of your exhilarating puddle adventure.</th>
        </table>


        <?php include "site_footer.php"; ?>
    </body>
</html>




