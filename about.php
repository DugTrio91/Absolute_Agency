<?php
    $title = "Absolute Agency | About us";
    include_once "header.php";

    function linkify($title){
        $lower = strtolower($title);
        return str_replace(" ", "-", $lower) . ".php";
    }    
?>

    <div class="about-header"></div>
    <div class="video-gradient-layer"></div>

    <div class="introduction-section">
        <h2>It's an <br> absolute delight<br>to introduce ourselves</h2>

        <br>
        <p>
            <a href="#">About us</a>
            <br class="mobile-br">

            <a href="#">Meet the team</a>
            <br>
            <br>
            <br>
            <a class="contact-button" href="#"><strong>Get in touch</strong></a>
        </p>
    </div>
    <div class="opening-statement">
        <div class="os-container opening-statement-photo"></div>
        <div class="os-container opening-statement-text">
            <p>
                <strong>Hello, we are Absolute</strong><br><br> 
                Absolute by name and absolute by nature. 100% absolutely committed to adding value to our clients’ businesses through effective design. <br><br>
                
                We take the time to understand your business, your objectives and who your audience and competition really are. We listen, learn and dig deep to find out every relevant piece of information, then come up with the best marketing solution for you and your business. We then get to work on creating a powerful strategy that will not only meet, but surpass your goals.
            </p>
        </div>
    </div>

    <?php include_once "footer.php"; ?>