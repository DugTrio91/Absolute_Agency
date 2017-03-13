<?php 
    $title = "Absolute Agency | Creative marketing and design Newcastle upon Tyne | Gateshead | Design | Web Design | Branding | Logo Design";
    include_once "header.php";   
?>  
<div class="top-container">
    <div class="top-image index-image"></div>
    <div class="introduction-section">
        <h2 class="h2-grey">Hello, we are <img src="images/absolute_logo.png" height="30px" alt="absolute logo"></h2>
        <h3><i>A creative brand &amp; design agency</i></h3>
        <br> <span>
               <p>
                <a class="gold"href="#">Looking to improve your brand?</a>

                <a class="gold" href="#">Looking to update your website?</a>
                <br>
                <br>
                <br>
                <a class="contact-button" href="contact.php">Get in touch</a>
                </p>
            </span> 
    </div>
</div><!--To close 'top-container' div in header.php--> 
<div class="scrolling-content"><!--Start of scrolling content-->
    <h3 class="gold mission-statement">"Together we get you to where you want to be by forming an absolute alignment of your brand and ambitions"</h3>
        
    <div class="featured-projects">
        <h3 class="dotted-border-white">Featured Projects</h3>
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
    <div class="services">
        <h3 class="dotted-border">Services</h3>
        <br>
        <div class="featurebox brand"> </div>
        <div class="featurebox">
            <div class="fb-inner-text">
                <h2>Branding</h2>
                <div class="gold-dash"></div>
                <p>Whether you are a furniture retailer with an ambition to become a household name, a recruitment company aiming to hit their height in head hunting, or an awarding organisation with a desire to rise to the top of the class, we’ll get you to where you want to be. We build distinctive, authentic brands that set out what you want to achieve.</p>
                <br>
                <p class="faded">Brand consultancy | Brand development | Brand styling | Brand strategy</p>
            </div>
        </div>
        <div class="featurebox desktop">
            <div class="fb-inner-text">
                <h2>Design</h2>
                <div class="gold-dash"></div>
                <p>From brochures to exhibition stands we can make your business irresistible through strategic design. With a combined experience of over 30 years working with cross-channel marketing mediums, we are experts in creating a unique experience that authentically represents your business and will resonate with your target audience.</p>
                <br>
                <p class="faded">Logo | Brochure | Exhibition stands | Office interiors | Direct mail | Press advertising</p>
            </div>
        </div>
        <div class="featurebox design"> </div>
        <div class="featurebox mobile">
            <div class="fb-inner-text">
                <h2>Design</h2>
                <div class="gold-dash"></div>
                <p>From brochures to exhibition stands we can make your business irresistible through strategic design. With a combined experience of over 30 years working with cross-channel marketing mediums, we are experts in creating a unique experience that authentically represents your business and will resonate with your target audience.</p>
                <br>
                <p class="faded">Logo | Brochure | Exhibition stands | Office interiors | Direct mail | Press advertising</p>
            </div>
        </div>
        <div class="featurebox web"> </div>
        <div class="featurebox">
            <div class="fb-inner-text">
                <h2>Web</h2>
                <div class="gold-dash"></div>
                <p>Your online presence is more important than ever, not only does it need to represent your brand, it needs to be practical in order to accomplish your business objectives. That’s why we take time to understand your business goals and design everything with the end user in mind. Making it easier for your prospective customers to do business with you.</p>
                <br>
                <p class="faded">Responsive web design | Web development | SEO | Social Media | Email marketing</p>
            </div>
        </div>
        <div class="featurebox desktop">
            <div class="fb-inner-text">
                <h2>Team work</h2>
                <div class="gold-dash"></div>
                <p>We believe that success lies in collaboration, and bringing together the best team for your project. We partner with many specialists across the communications spectrum:</p>
                <br>
                <p class="faded">Marketers | Photographers | Stylists | Web Developers | Copywriters | Social Media and SEO Experts.</p>
            </div>
        </div>
        <div class="featurebox team"> </div>
        <div class="featurebox mobile">
            <div class="fb-inner-text">
                <h2>Team work</h2>
                <div class="gold-dash"></div>
                <p>We believe that success lies in collaboration, and bringing together the best team for your project. We partner with many specialists across the communications spectrum:</p>
                <br>
                <p class="faded">Marketers | Photographers | Stylists | Web Developers | Copywriters | Social Media and SEO Experts.</p>
            </div>
        </div>
    </div>
    <div class="client-section">
            <h3 class="dotted-border-white">Our Clients</h3>
            <br>
            <p>A selection of some of the people that we've worked with</p>
            <br>
            <div class="client-container">
            <?php

				$sql = "SELECT * FROM clients ORDER BY RAND() LIMIT 9";
				$result = mysqli_query($dbconnect, $sql);

                while($row = mysqli_fetch_array($result)){
                    echo "<div class=\"client-frame\">";
                    echo "<div class=\"client-image\" style=\"background:url(" .  substr($row["colourLogo"], 3) . ") no-repeat\"></div>";
                    echo "</div>";
				}

			?>
            </div>
    </div>
    
    <div class="blog-section">
            <div class="blog-content">
            <h3 class="dotted-border">Blog</h3>
            <br>
            <?php

            $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 3";
            $result = mysqli_query($dbconnect, $sql);

            while($row = mysqli_fetch_array($result)){

            echo "<a class='blog-container' href='blog-post.php?id=" . $row["id"] . "'>";
            echo "<div class='blog-container-image' style='background: url("    . $row["image"] . ") center no-repeat; background-size: 120%'>";
            echo "</div>";
            echo "<div class='blog-info'><h4>" . $row["title"] . "</h4>";
            echo "<p>" . substr($row["description"],0,240) . "...</p></div>";
            echo "</a>";         
            }

            ?> 
            
            
       </div>
    </div>
    
    
        <!-- LightWidget WIDGET -->
        <script src="//lightwidget.com/widgets/lightwidget.js"></script>
        <iframe src="//lightwidget.com/widgets/311a88a2777b567cbeab55daecb341e6.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
        
        <?php include_once "footer.php"; ?>