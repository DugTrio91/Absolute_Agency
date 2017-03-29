<?php        

        $id = $_GET["id"];
        if(isset($id)){

            $sql = "SELECT * FROM blog WHERE id = $id";
            $result = mysqli_query($dbconnect, $sql);

            while($row = mysqli_fetch_array($result)){
            
                echo '<meta property="og:type" content="article" />';
                echo '<meta property="og:title" content="' . $row["title"] . '" />';
                echo '<meta property="og:description" content="' . substr($row["summary"],3) . '" />';
                echo '<meta property="og:image" content="http://marksandbox.esy.es/Absolute-Agency/' . $row["image"] . '" />';
                echo '<meta property="og:image:type" content="image/jpeg" />';
                echo '<meta property="og:image:width" content="400" />';
                echo '<meta property="og:image:height" content="300" />';
            }}
            ?>
                    



