<?php
    include_once "header.php"; 
?>
    <div class="top-container blog-top">
        <?php        

        $id = $_GET["id"];
        if(isset($id)){

            $sql = "SELECT * FROM blog WHERE id = $id";
            $result = mysqli_query($dbconnect, $sql);

            while($row = mysqli_fetch_array($result)){

                $title = $row["title"];

                echo '<div class="blog-image" style="background: url(' . $row["image"] . ') center no-repeat; background-size: cover; height: 100vh; opacity: 0.7;"></div>';
                echo '<div class="introduction-section">';
                echo '<h3 class ="dotted-border"><i>' . $row["title"] . '</i></h3>'; 
                    
                        }
        
                    }

    ?> </div>
    </div>
    <!--To close 'top-container' div in header.php-->
    <div class="scrolling-content">
        <!--Start of scrolling content-->
        <div class="blog-content">
            <?php        

        $id = $_GET["id"];
        if(isset($id)){

            $sql = "SELECT * FROM blog WHERE id = $id";
            $result = mysqli_query($dbconnect, $sql);

            while($row = mysqli_fetch_array($result)){

                $title = $row["title"];
                $date = date_create($row["datetime"]);

                echo '<h4 class="blog-text">' . strip_tags($row["summary"],"<b><strong><i><u><br><style>") . '</h4><br>';
                echo '<p class="faded">' . date_format($date, 'l j F Y') . '</p><br>';
                echo '<p class="blog-text description">' . strip_tags($row["description"],'<b><strong><i><u><br><style>') . '</p>';
                echo '<a href="http://www.facebook.com/sharer.php?u=http://marksandbox.esy.es/Absolute-Agency/" target="_blank">';
                    
                        }
        
                    }

    ?>
                <!-- Facebook -->
                 <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /> </a>
                <h3 class="dotted-border">More posts</h3>
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

            ?> </div>
        <?php include_once "footer.php"; ?>