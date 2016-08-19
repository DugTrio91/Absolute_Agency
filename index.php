<?php 
    $title = "Absolute Agency | Creative marketing and design Newcastle upon Tyne | Gateshead | Design | Web Design | Branding | Logo Design";
    include_once "header.php";   
?>

    <div class="video-introduction">
        <video class="index-video" autoplay loop muted>
            <source src="images/absoluteImages.m4v" type="video/mp4">
        </video>
        <div class="video-gradient-layer"></div>
        <div class="introduction-section">
            <img class="absolute-logo" src="images/absolute_logo.png" alt="absolute logo">
            <br>
            <h2>Design-led<br>brand communication<br>&amp;digital innovation</h2>
            <br>
            <p>
                <a href="#">Looking to improve your brand?</a>
                <br class="mobile-br">

                <a href="#">Looking to update your website?</a>
                <br>
                <br>
                <br>
                <a class="contact-button" href="#"><strong>Get in touch</strong></a>
            </p>
        </div>
        <div class="featured-projects">
            <h3>Featured Projects</h3>
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
				    echo "<img src='" .  substr($row["coverImage"], 3) . "'/>";
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
        <div class="featurebox brand">
            
        </div>
        <div class="featurebox design">
            
        </div>
        <div class="featurebox web">
            
        </div>
        <div class="clients-bar">
            <?php

				$sql = "SELECT * FROM clients ORDER BY RAND()";
				$result = mysqli_query($dbconnect, $sql);

                while($row = mysqli_fetch_array($result)){
                    
                    echo "<div class='client-container' style='background: url(" .  substr($row["monoLogo"], 3) . "onmouseover='" .  substr($row["colourLogo"], 3) . "'></div>";
                    
                    
				}

			?>
            </div>
        </div>

        <?php include_once "footer.php"; ?>