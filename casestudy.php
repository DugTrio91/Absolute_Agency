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

        $id = $_GET["ID"];
        if(isset($id)){

        $sql = "SELECT * FROM portfoliolist WHERE ID = $id";
        $row = $db->fetchOne($sql);

        $title = $row["portfolioTitle"];

        if(!empty($row)){

            //cover
            $out .= "<div id='container1' class='case-study-container1' style='background: url(" . $row["coverImage"] . ") top no-repeat;'>";
            $out .= "<div class='cover cover-logo' style='background: url(" . $row["logo"] . ") center no-repeat;'></div>";
            $out .= "<div class='cover cover-text'><h2>" . $row["portfolioTitle"] . "</h2></div>";
            $out .= "</div>";
            //container2
            $out .= "<div id='container2' class='case-study-container2'>";
            $out .= "<div class='splitcontainer-upper'><p><i>" . $row["aboutIntro"] . "</i></p></div>";
            $out .= "<div class='splitcontainer-lower' style='background: url(" . $row["image2"] . ") center no-repeat;'></div>";
            $out .= "</div>";
            //container3
            $out .= "<div id='container3' class='case-study-container3'>";
            $out .= "<div class='splitcontainer-upper'><h2>About the Client</h2><p>" . $row["aboutClient"] . "</p></div>";
            $out .= "<div class='splitcontainer-lower' style='background: url(" . $row["image3"] . ") center no-repeat;'></div>";
            $out .= "</div>";
            //container4
            $out .= "<div id='container4' class='case-study-container4 style='background: url(" . $row["image4"] . ") center no-repeat;'></div>";
            //final
            $out .= "<div id='container5' class='case-study-container5'>";
            $out .= "<div class='splitcontainer-upper'><h2>The Design</h2><p>" . $row["aboutDesign"] . "</p></div>";
            $out .= "<div class='splitcontainer-lower' style='background: url(" . $row["image5"] . ") center no-repeat;'></div>";
            $out .= "</div>";
            
            //output
            echo $out;

            }

        }

    ?>
    
    <div id="container6" class="container mulberry-container6">
        <h2>Need something similar?</h2>
        <div class="contact-form">
            <form method="post" action="index.php">
                <input name="name" placeholder="Full Name">
                <input name="email" type="email" placeholder="Email Address">
                <input name="telephone" type="telephone" placeholder="Telephone Number">
                <textarea name="message" placeholder="Message"></textarea>
                <br/>
                <input id="submit" name="submit" type="submit" value="Send">
            </form>
        </div>
        <div class="other-projects">
            <h3>Other Projects</h3>
            <br>
            <br>
            
        <?php 

            $sql = "SELECT * FROM portfolioList ORDER BY RAND() limit 0,3";
			$result = mysqli_query($dbconnect, $sql);
            shuffle($result);
            while($row = mysqli_fetch_array($result)){
                    
                echo "<a href=\"casestudy.php?id=" . $row["ID"] . "\">";
                echo "<div class='featured-projects-container'>";
                echo "<div class='portfolio-image-container'>";
				echo "<img src='" .  $row["portfolioImage"] . "'/>";
                echo "</div>";
                echo "<h4>" . $row["portfolioText"] . "</h4></a>";
                echo "</div>";
            }

        ?>
        
        </div>
    </div>
</div>


<?php include_once "footer.php"; ?>
        

            
        