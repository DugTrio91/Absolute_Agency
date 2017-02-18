<?php
    $title = "Absolute Agency | About us";
    include_once "header.php";

    function linkify($title){
        $lower = strtolower($title);
        return str_replace(" ", "-", $lower) . ".php";
    }    
?>
<div class="top-container">
    <div class="top-image about-image"></div>
    <div class="introduction-section">
        <h3>It's an <img class="absolute-logo" src="images/absolute_logo.png" height="30px" alt="absolute logo"><br> delight to introduce ourselves</h3>
        <br>
        <span>
               <p>
                <a class="gold"href="#">A bit about us</a>
                <a class="gold" href="#">Meet the team</a>
                <br>
                <br>
                <br>
                <a class="contact-button" href="#">Get in touch</a>
                </p>
            </span> 
    </div>
    
</div><!--To close 'top-container' div in header.php--> 
<div class="scrolling-content"><!--Start of scrolling content-->
   
    <div class="opening-statement">
        <div class="os-container opening-statement-photo"></div>
        <div class="os-container opening-statement-text">
            
            <h3>Hello, we are Absolute</h3>
            <br>
            <p> 
                Absolute by name and absolute by nature. 100% absolutely committed to adding value to our clients’ businesses through effective design. <br><br>
                
                We take the time to understand your business, your objectives and who your audience and competition really are. We listen, learn and dig deep to find out every relevant piece of information, then come up with the best marketing solution for you and your business. We then get to work on creating a powerful strategy that will not only meet, but surpass your goals.
            </p>
        </div>
    </div>

    <?php include_once "footer.php"; ?>