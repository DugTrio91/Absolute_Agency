<?php
    $title = "Absolute Agency | Blog";
    include_once "header.php";

    function linkify($title){
        $lower = strtolower($title);
        return str_replace(" ", "-", $lower) . ".php";
    }    
?>
    <div class="top-container">
        <?php
    //check if a specific blog post is to be loaded
    $id = $_GET["id"];
    if(isset($id)){
        //get selected post from db
        $sql = "SELECT * FROM blog WHERE id = $id";
    } 
    if(!empty($row)){
        echo "<p>HELLO WORLD</p>";
    }

?>
    </div>
    </div>
    <!--To close 'top-container' div in header.php-->
    <div class="scrolling-content">
        <!--Start of scrolling content-->
        <div class="blog-content">
            <h3 class="dotted-border">More posts</h3>
            <br>
            <?php

            $sql = "SELECT * FROM blog ORDER BY id DESC";
            $result = mysqli_query($dbconnect, $sql);

            while($row = mysqli_fetch_array($result)){

            echo "<div class='blog-container'>";
            echo "<div class='blog-container-image' style='background: url("    . $row["image"] . ") center no-repeat'>";
            echo "<h4 class='dotted-border-small'>" . substr($row["title"],0,30) . "...</h4>";
            echo "</div>";
            echo "<p class='blog-info'>" . substr($row["description"],0,340) . "...</p>";
            echo "</div>";         
            }

            ?> 
       </div>
        <?php include_once "footer.php"; ?>