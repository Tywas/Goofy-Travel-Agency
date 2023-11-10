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
                <img class="itinerary_img" src="Ininerary_images\Space.webp"> 
                <div class="overlay-text">
                    <h1 class='image_styling'>Adventure is limitless!</h1>
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
                <th>Morning: Depart from Earth in a state-of-the-art space shuttle. Experience the thrill of liftoff and witness the transition from Earth's atmosphere to outer space.</th>
                <th>Afternoon: Arrive at the International Space Station (ISS). Enjoy a spacewalk with the astronauts, experiencing the sensation of weightlessness and marveling at the Earth from orbit.</th>
                <th>Evening: Share a meal with the ISS crew, enjoying space food specially prepared for the journey.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>2</th>
                <th>Morning: Depart from the ISS and head towards the Moon. Witness Earthrise from lunar orbit and take in the breathtaking views of the lunar landscape.</th>
                <th>Afternoon: Land on the Moon's surface and explore iconic landmarks such as the Sea of Tranquility. Conduct experiments in the lunar environment and collect souvenirs like moon rocks.</th>
                <th>Evening: Launch from the Moon and head towards Mars. Enjoy a space-themed dinner while in transit.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>3</th>
                <th>Morning: Arrive in orbit around Mars and witness the Red Planet's stunning landscapes. Take part in a virtual reality tour of Martian landmarks.</th>
                <th>Afternoon: Descend to the Martian surface using a rover. Explore the Martian terrain, conduct scientific experiments, and communicate with mission control back on Earth.</th>
                <th>Evening: Return to the spacecraft and watch a Mars sunset from orbit before departing for the journey back to Earth.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>4</th>
                <th>Morning: Begin the return journey to Earth. Reflect on the extraordinary experiences and discoveries made during the space voyage.</th>
                <th>Afternoon: Participate in space-themed workshops and activities onboard, learning about the future of space exploration and the technologies used in the mission.</th>
                <th>Evening: Enjoy a farewell dinner with the fellow space travelers and the crew, sharing stories and memories from the incredible journey.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>5</th>
                <th>Morning: Prepare for re-entry into Earth's atmosphere. Experience the intense heat during re-entry and the excitement of coming back home.</th>
                <th>Afternoon: Safely land back on Earth, completing the once-in-a-lifetime space travel adventure. Receive a certificate of completion and a personalized space travel memento.</th>
        </table>


        <?php include "site_footer.php"; ?>
    </body>
</html>




