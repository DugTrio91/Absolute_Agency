<?php
    $title = "Absolute Agency | Our Work";
    include_once "header.php";

    function linkify($title){
        $lower = strtolower($title);
        return str_replace(" ", "-", $lower) . ".php";
    }    
?>

<div class="work-container">
   <?php 

        $sql = "SELECT * FROM portfolioList ORDER BY portfolioText ASC";
        $result = mysqli_query($dbconnect, $sql);

		while($row = mysqli_fetch_array($result)){
                    
            echo "<div class='portfolio-image-container'>";
			echo "<a href='" . linkify($row["portfolioText"]) . "'>";
            echo "<img src='" .  $row["portfolioImage"] . "'/>";
            echo "<div class='portfolio-text-container'>";
            echo "<h4 class='portfolio-text-label'>" . $row["portfolioText"] . "</h4></a>";
            echo "</div></div>";
        }
    ?> 
    </div>
</body>
</html>


<?php
	mysqli_close($dbconnect); 
?>