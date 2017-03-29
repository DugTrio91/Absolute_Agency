<?php
    $title = "Absolute Agency | About us";
    include_once "header.php";   
?>
    <div class="top-container">
        <div class="top-image about-image"></div>
        <div class="introduction-section">
            <h3>It's an <img class="absolute-logo" src="images/absolute_logo.png" height="30px" alt="absolute logo"><br> delight to introduce ourselves</h3>
            <br> <span>
               <p>
                <a class="gold"href="#about">A bit about us</a>
                <a class="gold" href="#team">Meet the team</a>
                <br>
                <br>
                <br>
                <a class="contact-button" href="contact.php">Get in touch</a>
                </p>
            </span> </div>
    </div>
    <!--To close 'top-container' div in header.php-->
    <div class="scrolling-content">
        <!--Start of scrolling content-->
        <div id="about" class="opening-statement">
            <div class="os-container opening-statement-photo"></div>
            <div class="os-container opening-statement-text">
                <h3>Hello, we are Absolute</h3>
                <br>
                <p> Absolute by name and absolute by nature. 100% absolutely committed to adding value to our clients’ businesses through effective design.
                    <br>
                    <br> We take the time to understand your business, your objectives and who your audience and competition really are. We listen, learn and dig deep to find out every relevant piece of information, then come up with the best marketing solution for you and your business. We then get to work on creating a powerful strategy that will not only meet, but surpass your goals. </p>
            </div>
        </div>
        <div class="slideshow-container">
            <h3 class="dotted-border">What our clients say</h3>
            <?php

            $sql = "SELECT * FROM testimonials ORDER BY id ASC";
            $result = mysqli_query($dbconnect, $sql);

            while($row = mysqli_fetch_array($result)){
            
            echo '<div class="testimonial fade">';
            echo '<h4>"' . $row["testimonial"] . '"</h4>';
            echo '<br><div class="gold-dash" style="margin: 0px auto"></div><br>';
            echo '<p>' . $row['client'] . '</p>';
            echo "</div>";
            }
        ?> <a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <br>
                <div>
                    <?php

            $sql = "SELECT * FROM testimonials ORDER BY id ASC";
            $result = mysqli_query($dbconnect, $sql);

            while($row = mysqli_fetch_array($result)){
            
            echo '<span class="dot" (' . $row['id'] . ')"></span>';
            }
        ?> </div>
        </div>
        <div id="team" class="team-section">
            <h3 class="dotted-border">Meet the team</h3>
            <?php

            $sql = "SELECT * FROM team ORDER BY id ASC";
            $result = mysqli_query($dbconnect, $sql);

            while($row = mysqli_fetch_array($result)){

            echo "<div class='team-container'>";
            echo "<div class='team-image' style='background: url(" . $row["image"] . ") center no-repeat; background-size: cover;'></div><br>";
            echo "<h4>" . $row["name"] . "</h4>";
            echo "<p>" . $row["position"] . "</p><br>";
            echo "</div>"; 
            }

            ?> </div>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("testimonial");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" activedot", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " activedot";
            }
        </script>
        <?php include_once "footer.php"; ?>