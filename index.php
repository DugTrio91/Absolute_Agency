<?php 
    $title = "Absolute Agency | Creative marketing and design Newcastle upon Tyne | Gateshead | Design | Web Design | Branding | Logo Design";
    include_once "header.php";

    function linkify($title){
        $lower = strtolower($title);
        return str_replace(" ", "-", $lower) . ".php";
    }    
?>

    <div class="video-introduction">
        <video class="index-video" autoplay loop muted>
            <source src="images/absoluteImages.m4v" type="video/mp4">
        </video>
        <div class="video-gradient-layer"></div>
        <div class="introduction-section">
            <img src="images/absolute_logo.png" alt="absolute logo">
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

				$sql = "SELECT * FROM portfolioList ORDER BY RAND() limit 0,3";
				$result = mysqli_query($dbconnect, $sql);
                shuffle($result);
				while($row = mysqli_fetch_array($result)){
                    
                    echo "<a href='" . linkify($row["portfolioText"]) . "'>";
                    echo "<div class='featured-projects-container'>";
                    echo "<div class='portfolio-image-container'>";
				    echo "<img src='" .  $row["portfolioImage"] . "'/>";
                    echo "</div>";
                    echo "<h4>" . $row["portfolioText"] . "</h4></a>";
                    echo "</div>";
				}

				 ?>
        </div>