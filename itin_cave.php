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
                <img class="itinerary_img" src="Ininerary_images\Cave.jfif"> 
                <div class="overlay-text">
                    <h1 class='image_styling'>Bring your dog deep down under!</h1>
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
                <th>Morning: Gear up in your adventurer attire and embark on a thrilling journey to the "Mystical Caverns" in your backyard. Imagine the excitement as you approach the entrance, surrounded by mist and the sound of echoing cave whispers.</th>
                <th>Afternoon: Enter the caverns with anticipation, armed with a trusty flashlight. Marvel at the stunning stalactites and stalagmites that seem to guard the entrance to an undiscovered world.</th>
                <th>Evening: Find peace with your inner darkness.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>2</th>
                <th>Morning: Dive into the heart of the caverns, navigating through narrow passages and spacious chambers. Feel the cool, damp air on your skin as you walk along the well-lit path, surrounded by the illusion of hidden treasures waiting to be uncovered.</th>
                <th>Afternoon: Set up a makeshift base camp within the caverns for a picnic lunch. Enjoy sandwiches, snacks, and refreshing drinks while imagining the mythical creatures that might inhabit the unseen depths of the cave.</th>
                <th>Evening: Get professionally taught how to read ancient scriptures writen during prehistoric times.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>3</th>
                <th>Morning: Encounter the "Glowing Grotto," a visually stunning chamber adorned with bioluminescent moss and rocks. Although it's just a play of lights and imagination, let the beauty of the surroundings captivate your senses.</th>
                <th>Afternoon: Take part in a rock-skipping challenge. Find the perfect flat stones within the cavern and attempt to break your own record for consecutive skips across the imaginary underground river.</th>
                <th>Evening: join the cult of hairless beasts.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>4</th>
                <th>Morning: Experience the "Whispering Tunnels," where the acoustics create an otherworldly symphony of echoes. Experiment with your own echo creations and pretend you've discovered a secret language hidden within the cave walls.</th>
                <th>Afternoon: Engage in a rock formation naming contest. As you explore, come up with imaginative names for the various formations you encounter, turning ordinary cave features into legendary landmarks.</th>
                <th>Evening: Sleep through the peaceful endless screaming hole.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>5</th>
                <th>Morning: Conclude your cave exploration adventure with a dramatic exit from the caverns. As you emerge into the daylight, bask in the satisfaction of a journey well-taken, despite not stumbling upon any mythical creatures or hidden treasures.</th>
        </table>


        <?php include "site_footer.php"; ?>
    </body>
</html>




