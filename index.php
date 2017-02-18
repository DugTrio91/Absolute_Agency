<?php 
    $title = "Absolute Agency | Creative marketing and design Newcastle upon Tyne | Gateshead | Design | Web Design | Branding | Logo Design";
    include_once "header.php";   
?>  
<div class="top-container">
    <div class="top-image index-image"></div>
    <div class="introduction-section">
        <h2 class="h2-grey">Hello, we are <img class="absolute-logo" src="images/absolute_logo.png" height="30px" alt="absolute logo"></h2>
        <h3><i>A creative brand &amp; design agency</i></h3>
        <br> <span>
               <p>
                <a class="gold"href="#">Looking to improve your brand?</a>

                <a class="gold" href="#">Looking to update your website?</a>
                <br>
                <br>
                <br>
                <a class="contact-button" href="#">Get in touch</a>
                </p>
            </span> 
    </div>
</div><!--To close 'top-container' div in header.php--> 
<div class="scrolling-content"><!--Start of scrolling content-->
    <h3 class="gold mission-statement">"Together we get you to where you want to be by forming an absolute alignment of your brand and ambitions"</h3>
        
    <div class="featured-projects">
        <h3 class="dotted-border">Featured Projects</h3>
        <br>
        <p>From logo designs to full brand experiences across all marketing.
        <br>Logo designs to full brand experiences across all marketing. </p>
        <br>
        <br>
    <?php

        $sql = "SELECT * FROM portfoliolist ORDER BY RAND() LIMIT 3";
		$result = mysqli_query($dbconnect, $sql);

        while($row = mysqli_fetch_array($result)){
                    
        echo "<a href=\"casestudy.php?id=" . $row["ID"] . "\">";
        echo "<div class='featured-projects-container'>";
        echo "<div class='portfolio-image-container'>";
		echo "<img src='" .  $row["coverImage"] . "'/>";
        echo "</div>";
        echo "<h4>" . $row["portfolioTitle"] . "</h4></a>";
        echo "</div>";
                    
        }

        ?> 
    </div>
    <div class="featured-info">
        <h3>Brand focused. Strategy driven. Design-led.</h3>
        <p>Our goal is to create better brands and better businesses.</p>
    </div>
    <div class="featurebox brand"> </div>
    <div class="featurebox design"> </div>
    <div class="featurebox web"> </div>
    <div class="client-section">
            <h3 class="dotted-border">Our Clients</h3>
            <br>
            <p>A selection of some of the people that we've worked with</p>
            <br>
            <div class="client-continer">
                <?php

				$sql = "SELECT * FROM clients ORDER BY RAND() LIMIT 9";
				$result = mysqli_query($dbconnect, $sql);

                while($row = mysqli_fetch_array($result)){
                    echo "<div class=\"client-frame\">";
                    echo "<div class=\"client-image\" style=\"background:url(" .  substr($row["colourLogo"], 3) . ") no-repeat\"></div>";
                    echo "</div>";
                    
                    
				}

			?> </div>
        </div>
        <!-- LightWidget WIDGET -->
        <script src="//lightwidget.com/widgets/lightwidget.js"></script>
        <iframe src="//lightwidget.com/widgets/311a88a2777b567cbeab55daecb341e6.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
        
        <?php include_once "footer.php"; ?>