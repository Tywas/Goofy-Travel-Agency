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
                <img class="itinerary_img" src="Ininerary_images\Elephants.jpg"> 
                <div class="overlay-text">
                    <h1 class='image_styling'>*Elephant Noise*("Join us!")</h1>
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
                <th>Morning: Embark on a mind-bending journey to the "Elephant Oasis Simulation." Prepare for an extraordinary experience as you enter the virtual realm that will transform you into an elephant, complete with realistic sights, sounds, and sensations.</th>
                <th>Afternoon: Meet your new elephant herd companions in the vast and digitally replicated savannah. Establish a sense of camaraderie as you engage in playful activities and form bonds with your fellow virtual pachyderms.</th>
                <th>Evening: Take part in a simulated elephant training session, where you learn how to use your trunk and tusks effectively. Sharpen your skills in a safe and controlled environment, enhancing your understanding of the challenges faced by real elephants in the wild.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>2</th>
                <th>Morning: Start your day with a virtual sunrise as you graze with the herd on the digital plains. Experience the thrill of foraging for food, simulating the intricate social dynamics of an elephant pack.</th>
                <th>Afternoon: Participate in a group mud bath to cool off and strengthen social bonds. Feel the virtual mud on your virtual skin as you enjoy the refreshing sensation, just like a real elephant in the wild.</th>
                <th>Evening: Find your elephant love interest and take them on a nice long walk.  Become vulnerable with your elephant love interest and get emotionally attached until you can see yourself living the rest of your human life with this elephant.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>3</th>
                <th>Morning: Embark on a simulated migration with your herd. Traverse different terrains, from grasslands to forests, as you navigate the challenges of the virtual wild. Encounter other simulated wildlife, adding a touch of adventure to your elephant experience.</th>
                <th>Afternoon: Engage in a virtual waterhole gathering. Interact with other digital elephants, exchanging trunk-to-trunk greetings and communicating through realistic elephant sounds. Immerse yourself in the simulation's authenticity as you quench your virtual thirst.</th>
                <th>Evening: Things hit a road block in your elephant relationship from the previous day.  Your one true love has deciced to cheat on you with Elehunk the baddest elephant on the block.  You must sit and sob with your fellow elephant friends you've made even though they are only there because they pity you.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>4</th>
                <th>Morning: Experience a virtual thunderstorm and revel in the excitement of playing in the simulated rain with your elephant companions. Feel the droplets on your virtual skin and enjoy the immersive sensation of a digital downpour.</th>
                <th>Afternoon: Participate in a puddle photography contest. Capture the most dynamic and picturesque puddle jumps, splashes, and reflections. Share your photos with fellow puddle enthusiasts for a chance to win exciting prizes.</th>
                <th>Evening: Conclude your unforgettable journey as a virtual elephant with a farewell feast. Gather with your herd for a virtual celebration, complete with digital treats and a sense of accomplishment. Bid farewell to your elephant companions, knowing that you've experienced the wild in a unique and immersive way.</th>
            </tr>
            </table>


        <?php include "site_footer.php"; ?>
    </body>
</html>




