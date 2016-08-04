<?php include_once "../scripts/connector.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
	<title>Admin Area | Portfolio</title>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea#CMS'});</script>

</head>


   <?php 

        $sql = "SELECT * FROM portfoliolist";
        $result = mysqli_query($dbconnect, $sql);

		while($row = mysqli_fetch_array($result)){
                    
			echo "<a title=\"" . $row["portfolioTitle"] . "\" href=\"casestudy.php?id=" . $row["ID"] . "\">";
            echo "<h4 class='portfolio-text-label'>" . $row["portfolioTitle"] . "</h4></a>";
            echo "</div></div>";
        }
    ?> 