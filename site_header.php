<!-- <head> -->

<nav class="site_header">            
    <div class="header_logo" id="logo">
        <a href="index.php" >
            <img class="web-logo" src="android-chrome-192x192.png"> </img>
        </a>
    </div>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
            <path d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z">
            </path>
        </svg>
    </label>

    <div class="header_content">
        <div class="header-links">
        <ul>
                <li><a href="index.php"<?php if (isset($thisPage) && $thisPage=="index"){
                    echo " id=\"current-page\"";
                }?>>Home</a></li>
                <li><a href="about.php"<?php if (isset($thisPage) && $thisPage=="about"){
                    echo " id=\"current-page\"";
                }?>>About</a></li>
                <li><a href="itineraries.php"<?php if (isset($thisPage) && $thisPage=="itineraries"){
                    echo " id=\"current-page\"";
                }?>>Itineraries</a></li>
                <!-- <li><a href="worldmap.php">World Map</a></li> -->
                <li><a href="packages.php"<?php if (isset($thisPage) && $thisPage=="packages"){
                    echo " id=\"current-page\"";
                }?>>Packages</a></li>
                <!-- <li><a href="information.php">Information</a></li> -->
                <li><a href="contact.php"<?php if (isset($thisPage) && $thisPage=="contact"){
                    echo " id=\"current-page\"";
                }?>>Contact</a></li>
                <li><a href="user.php"<?php if (isset($thisPage) && $thisPage=="user"){
                    echo " id=\"current-page\"";
                }?>>User</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- </head> -->