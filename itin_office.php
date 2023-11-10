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
                <img id="itinerary_img" src="Ininerary_images\Office cubical.jfif"> 
                <div class="overlay-text">
                    <h1 class='image_styling'>Rember to bring your work computer on this vacation!</h1>
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
                <th>Morning: Embark on a journey to the "Ultimate Cubicle Haven," a state-of-the-art office cubicle that promises to redefine your work experience. Feel the anticipation as you approach the entrance, adorned with a holographic welcome sign that greets you personally.</th>
                <th>Afternoon: Go to work.</th>
                <th>Evening: Work overtime.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>2</th>
                <th>Morning: Step into the cubicle, greeted by the luxurious ergonomic chair that adjusts to your every move. The desk, equipped with a faux wood finish, exudes an air of sophistication that will make you feel like you're working in the corner office of a skyscraper.</th>
                <th>Afternoon: Engage in a virtual tour of the neighboring cubicles, each designed with unique themes and features. From the "Zen Oasis" with a built-in meditation corner to the "Tech Marvel" with cutting-edge gadgets, you'll be inspired by the creativity of your cubicle neighbors.</th>
                <th>Evening: Sit alone in your cubicle till the next day.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>3</th>
                <th>Morning: Morning: Experience the "SmartDesk 3000," a desk with an integrated AI assistant that anticipates your needs. Need coffee? The desk senses it. Forgotten your meeting schedule? The AI has it covered, ensuring a seamless and stress-free workday.</th>
                <th>Afternoon: Attend a cubicle networking event, where colleagues gather to share stories, insights, and maybe even some snacks. Engage in casual conversations with fellow cubicle enthusiasts and discover the hidden talents of your office mates.</th>
                <th>Evening: Get back to work.</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>4</th>
                <th>Morning: Immerse yourself in the "Infinite Wall of Productivity," a virtual reality display that transforms your cubicle walls into panoramic landscapes. Choose from serene beaches, bustling cityscapes, or even the view from the International Space Station, providing the perfect backdrop to boost your creativity.</th>
                <th>Afternoon: Unwind in the "Ultimate Breakroom," a communal space filled with bean bags, foosball tables, and a never-ending supply of snacks. Take a break and recharge in this vibrant oasis that encourages collaboration and relaxation.</th>
                <th>Evening: You spent the whole afternoon in the breakroom... The boss is mad, work overtime</th>
            </tr>
            <tr class="itinerary-table_info">
                <th>5</th>
                <th>Morning: Conclude your epic cubicle adventure with a farewell gathering. Exchange contact information with your newfound cubicle friends and promise to stay in touch. As you exit the Ultimate Cubicle Haven, reflect on the extraordinary experience of working in a cubicle that surpassed all expectations.</th>
        </table>


        <?php include "site_footer.php"; ?>
    </body>
</html>




