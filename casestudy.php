<?php 
    
    include_once "header.php";

    $id = $_GET["ID"];
    if(isset($id)){
        
        
        $sql = "SELECT * FROM portfoliolist WHERE ID = $id";
        $row = $db->fetchOne($sql);
        
        $title = $row["portfolioTitle"];

        if(!empty($row)){

            //prepare element
            $out .= "<img src=" . $row["coverImage"] . ">";
            //output element
            echo $out;

        }

    }

?>

</body>
</html>


<?php include_once "footer.php"; ?>


