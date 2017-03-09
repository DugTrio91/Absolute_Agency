<?php
    $title = "Absolute Agency | Blog";
    include_once "header.php";

    function linkify($title){
        $lower = strtolower($title);
        return str_replace(" ", "-", $lower) . ".php";
    }    
?>
    <div class="top-container blog-top">
        <?php

        $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 1";
		$result = mysqli_query($dbconnect, $sql);

        while($row = mysqli_fetch_array($result)){          
        echo '<div class="blog-image" style="background: url(' . $row["image"] . ') center no-repeat; background-size: cover; height: 100vh; opacity: 0.7;"></div>';
        echo '<div class="introduction-section">';
        echo '<h3 class ="dotted-border">Latest post: <i>' . $row["title"] . '</i></h3>'; 
                    
        }

    ?> </div>
    </div>
    <!--To close 'top-container' div in header.php-->
    <div class="scrolling-content">
        <!--Start of scrolling content-->
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
        <?php include_once "footer.php"; ?>