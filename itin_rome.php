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
                <img class="itinerary_img" src="Ininerary_images\Remote france.webp"> 
                <div class="overlay-text">
                    <h1 class='image_styling'>Adventure is Everywhere!</h1>
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
                <th>Morning: Wake up to a virtual Roman sunrise in your backyard. Immerse yourself in the ambiance of ancient Rome by playing authentic Roman music and enjoying a cup of espresso.</th>
                <th>Afternoon: Begin your journey to "Rome" by walking through a portal or a creative entrance that transports you to a digital rendition of the city. Feel the excitement as you step into the vibrant streets filled with the sounds of markets and chatter.</th>
                <th>Evening: go back inside.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>2</th>
                <th>Morning: Visit the virtual Vatican City in your backyard. Marvel at the digital recreation of St. Peter's Basilica and the stunning artwork within the Sistine Chapel. Take a virtual tour with a guide providing historical insights.</th>
                <th>Afternoon: Indulge in a homemade Italian lunch with virtual views of the Roman Forum. Enjoy classic dishes while virtually surrounded by the ancient ruins, digitally integrated into your backyard landscape.</th>
                <th>Evening: go back inside.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>3</th>
                <th>Morning: Explore a digital replica of the Colosseum that magically appears in your backyard. Take a virtual tour of this iconic structure, learning about its history, architecture, and the gladiator battles that once took place within its walls.</th>
                <th>Afternoon: Have a Roman-themed picnic in your backyard. Set up a cozy spot with Roman-inspired snacks and beverages, all while enjoying the view of the digitally enhanced Colosseum.</th>
                <th>Evening: go back inside.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>4</th>
                <th>Morning: Experience a virtual walk through the charming streets of Trastevere. Immerse yourself in the digital recreation of this picturesque neighborhood, complete with colorful buildings, cobblestone streets, and lively cafes.</th>
                <th>Afternoon: Attend a virtual pasta-making class in your backyard. Learn the art of making traditional Roman pasta dishes from a digital chef, and enjoy the fruits of your labor with a delicious homemade pasta lunch.</th>
                <th>Evening: go back inside.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>5</th>
                <th>Morning: Conclude your virtual Roman adventure with a farewell breakfast in your backyard. Reflect on the unique and immersive experience you've had, surrounded by the digitally transformed elements of Rome.</th>
                <th>Afternoon: Share your backyard Roman adventure with friends and family by creating a virtual photo album. Use Photoshop to enhance and edit the photos, adding a touch of fantasy to your incredible Roman staycation.</th>
                <th>Evening: go back inside.</th>
        </table>


        <?php include "site_footer.php"; ?>
    </body>
</html>




