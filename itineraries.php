
<?php
session_start();
$thisPage="itineraries";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Itineraries</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="Itinerary_styles.css">
        <link rel="stylesheet" href="site_header_styles.css">

    </head>
    <body>
        <!-- HEADER CONTENT -->
        <header>
            <? include "site_header.php" ?>
        </header>

        <section id="itineraries-info">

            <div class="itinerary-container">
                <h1>Itinerary Insiration Page</h1>
            
                <a href="itin_puddle.php" class="itinerary_link"> 
                    <div class="itineraries"> 
                        <h3 class="itinerary_title"> Puddle Jumping </h3>
                        <img class="itinerary_img" src="Ininerary_images\Puddle.jpg"> </img>
                    </div>
                </a>

                <a href="itin_space.php" class="itinerary_link">
                    <div class="itineraries"> 
                        <h3 class="itinerary_title"> Space </h3>
                        <img class="itinerary_img" src="Ininerary_images\Space.webp"> </img>

                    </div>
                </a>
                
                <a href="itin_rome.php" class="itinerary_link">
                    <div class="itineraries"> 
                        <h3 class="itinerary_title"> Rome (REMOTE) </h3>
                        <img class="itinerary_img" src="Ininerary_images\Remote france.webp"> </img>
                    </div>
                </a>

                <a href="itin_cave.php" class="itinerary_link">
                    <div class="itineraries"> 
                        <h3 class="itinerary_title"> Cave Exploring </h3>
                        <img class="itinerary_img" src="Ininerary_images\Cave.jfif"> </img>
                    </div>
                </a>

                <a href="itin_office.php" class="itinerary_link">
                    <div class="itineraries"> 
                        <h3 class="itinerary_title"> Office Cubical </h3>
                        <img class="itinerary_img" src="Ininerary_images\Office cubical.jfif"> </img>
                    </div>
                </a>

                <a href="itin_elephant.php" class="itinerary_link">
                    <div class="itineraries"> 
                        <h3 class="itinerary_title"> Elephant Simulation </h3>
                        <img class="itinerary_img" src="Ininerary_images\Elephants.jpg"> </img>
                    </div>
                </a>
            </div>
        </section>

        <?php include "site_footer.php"; ?>
    </body>
</html>