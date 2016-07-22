<?php
    $title = "Absolute Agency | Creative marketing and design Newcastle upon Tyne | Gateshead | Design | Web Design | Branding | Logo Design";
    include_once "header.php";
    include_once("scripts/connector.php");

    function linkify($title){
        $lower = strtolower($title);
        return str_replace(" ", "-", $lower) . ".php";
    }
    
?>

<div class="work-container">
   <?php 

				$sql = "SELECT * FROM portfolioList";
				$result = mysqli_query($dbconnect, $sql);

				while($row = mysqli_fetch_array($result)){
                    
                    echo "<div class='portfolio-image-container'>";
				    echo "<img src='" .  $row["portfolioImage"] . "'/>";
                    echo "<div class='portfolio-text-container'>";
                    echo "<a href='" . linkify($row["portfolioText"]) . "'>","<h3 class='portfolio-text-label'>" . $row["portfolioText"] . "</h3></a>";
                    echo "</div></div>";
				}

				 ?> 
    </div>
</body>
</html>


<?php
	mysqli_close($dbconnect); 
?>