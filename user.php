<?php
session_start();

if(!isset($_SESSION['authenticated'])) {
    header('Location: login.php');
    exit(); 
}

if(isset($_SESSION['authenticated']) && !$_SESSION['authenticated']) {
    header('Location: login.php');
    exit(); 
}

$thisPage="user";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/get_class.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="site_header_styles.css">
    <link rel="icon" type="image/x-icon" href="favicon-32x32.ico">
</head>
<body>  
    <header>
        <? include "site_header.php" ?>
    </header> 
    <h1>User Dashboard</h1>


    <section id="about">
    <p class="user_introduction">Welcome, <?php echo $_SESSION['fname']?>!</p>
    <p class="user_intro_doc">This is your personalized dashboard. Here, you can manage the countries you want to visit,
        and mess aroung with a interactive map.  Your travel journey starts here. Explore your options and embark on exciting adventures with G.T.A.
    </p>
        <!-- Add content for the about page here -->
    </section>
    <div class="hovertext"></div>

    <p class="startadventure" id="startadventure">
        Start your adventure
    </p>
    <div id="world_map">
        <? include "World_Map.php" ?>
    </div>

    <p class="startadventure" id="startadventure">
        Adventure awaits you!
    </p>
    <div class="user_itineraries">
        <?php foreach($_SESSION['countries'] as $col_name => $string) {
        echo '
        <div class="user_itinerary"> 
            <h3 class="itinerary_title">' . $string . '</h3>
            <a href="delete_itinerary.php?id=' . $string . '" class="itinerary_link" id="puddle"> 
                <h3 class="itinerary_title" id="delete"> X </h3>
            </a>
        </div>';
        }
        ?>

    </div>

    <footer>
	<div class="footer-content">
	   <div class="footer-section-col-1">
              <h2>About Us</h2>
              <p>G.T.A., where we believe that laughter is the best travel companion! 
                We're not your typical travel agency—we're the masters of mirth, the sultans of silliness, 
                and your go-to guides for the wildest adventures around the globe.
                <br></br>
            
                Forget about serious sightseeing, since we specialize in whimsical wonders our itineraries
                 are carefully crafted to include absurd attractions.  At G.T.A., the journey may be goofy,
                 but the memories are serious.</p>
           </div>
	
	   <div class="footer-section-col-2">
               <h2>Quick Links</h2>
               <ul>
                  <li><a href="index.php">Home</a></li>
                   <li><a href="about.php">About</a></li>
		               <!-- <li><a href="worldmap.php">World Map</a></li> -->
                   <li><a href="packages.php">Packages</a></li>
                   <!-- <li><a href="information.php">Information</a></li> -->
                   <!-- <li><a href="itineraries.php">Itineraries</a></li> -->
                   <li><a href="contact.php">Contact</a></li>
                   <li><a href="user.php">User</a></li>
               </ul>
           </div>

	</div>
    	<div class="footer-content-copyright">
	        <p class="copyright" data-type="group">© 2023 G.T.A. Goofiest of Travel Agencies.</p> </div>
    </footer>
</body>
</html>