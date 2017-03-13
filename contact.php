<?php
    $title = "Absolute Agency | Our Work";
    include_once "header.php";

    function linkify($title){
        $lower = strtolower($title);
        return str_replace(" ", "-", $lower) . ".php";
    }    
?>

<?php include_once "map.php"; ?>


<?php include_once "footer.php"; ?>