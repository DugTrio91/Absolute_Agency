<?php 
    
    include_once "header.php";

?>

<div id="case-study-menu">
    <span id="case-study-menu-title">Cover</span>
    <hr />
    <a title="Cover">Cover</a>
    <a title="Introduction">Introduction</a>
    <a title="About the Client">About the Client</a>
    <a title="Logo">Logo</a>
    <a title="Design">Design</a>
    <a title="Contact">Contact</a>
</div>
<div class="case-study">
    <div class="cover-gradient"></div>

    <?php        

        $id = $_GET["id"];
        if(isset($id)){

            $sql = "SELECT * FROM portfoliolist WHERE ID = $id";
            $result = mysqli_query($dbconnect, $sql);

            while($row = mysqli_fetch_array($result)){

                $title = $row["portfolioTitle"];

                //cover
                $out .= "<div id='container1' class='cs-container case-study-container1' style='background: url(" . substr($row["coverImage"],3) . ") top no-repeat; background-size: cover;'>";
                $out .= "<div class='cover cover-logo' style='background: url(" . substr($row["logo"],3) . ") center no-repeat; background-size: contain;'></div>";
                $out .= "<div class='cover cover-text'><h2>" . $row["portfolioTitle"] . "</h2></div>";
                $out .= "</div>";
                //container2
                $out .= "<div id='container2' class='cs-container case-study-container2'>";
                $out .= "<div class='splitcontainer-upper'><p><i>" . $row["aboutIntro"] . "</i></p></div>";
                $out .= "<div class='splitcontainer-lower' style='background: url(" . $row["image2"] . ") center no-repeat; background-size: cover;'></div>";
                $out .= "</div>";
                //container3
                $out .= "<div id='container3' class='cs-container case-study-container3'>";
                $out .= "<div class='splitcontainer-upper'><h2>About the Client</h2><p>" . $row["aboutClient"] . "</p></div>";
                $out .= "<div class='splitcontainer-lower' style='background: url(" . $row["image3"] . ") center no-repeat; background-size: cover;'></div>";
                $out .= "</div>";
                //container4
                $out .= "<div id='container4' class='cs-container case-study-container4' style='background: url(" . $row["image4"] . ") center no-repeat; background-size: cover;'></div>";
                //final
                $out .= "<div id='container5' class='cs-container case-study-container5'>";
                $out .= "<div class='splitcontainer-upper'><h2>The Design</h2><p>" . $row["aboutDesign"] . "</p></div>";
                $out .= "<div class='splitcontainer-lower' style='background: url(" . $row["finalImage"] . ") center no-repeat; background-size: cover;'></div>";
                $out .= "</div>";
                    
                //output
                echo $out;
        
            }

        }

    ?>
    
    <div id="container6" class="container case-study-container6">
        <h2>Need something similar?</h2>
        <div class="contact-form">
            <form method="post" action="index.php">
                <input name="name" placeholder="Full Name">
                <input name="email" type="email" placeholder="Email Address">
                <input name="telephone" type="telephone" placeholder="Telephone Number">
                <textarea id="myform" name="message" placeholder="Message"></textarea>
                <br/>
                <input id="submit" name="submit" type="submit" value="Send">
            </form>
        </div>
        <div class="other-projects">
            <h3>Other Projects</h3>
            <br>
            <br>
            
        <?php

				$sql = "SELECT * FROM portfoliolist ORDER BY RAND() LIMIT 3";
				$result = mysqli_query($dbconnect, $sql);

                while($row = mysqli_fetch_array($result)){
                    
                    echo "<a href=\"casestudy.php?id=" . $row["ID"] . "\">";
                    echo "<div class='featured-projects-container'>";
                    echo "<div class='portfolio-image-container'>";
				    echo "<img src='" .  substr($row["coverImage"],3) . "'/>";
                    echo "</div>";
                    echo "<h4>" . $row["portfolioTitle"] . "</h4></a>";
                    echo "</div>";
                    
				}

			?>
        
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>