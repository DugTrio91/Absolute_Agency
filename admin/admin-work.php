<?php include_once "../scripts/connector.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
	<title>Admin Area | Portfolio</title>

</head>
<body>
    
 <div class="admin-container">
  <h3>Portfolio</h3>
   <?php 

        $sql = "SELECT * FROM portfoliolist";
        $result = mysqli_query($dbconnect, $sql);

		while($row = mysqli_fetch_array($result)){
                    
			echo "<a title='" . $row["portfolioTitle"] . "' href='admin-work-updateform.php?id=" . $row["ID"] . "'>";
            echo "<div class='admin-work-button'><div class='admin-work-thumbnail' style='background: url(../" . $row["coverImage"] . ") center; background-size: cover'></div><h4 class='admin-work-text'>" . $row["portfolioTitle"] . "</h4></div></a>";
            
        }
    ?> 
    <a class="admin-add-button admin-work-button" href="add-work-form.php">
        <div class="admin-add-button-thumbnail admin-work-thumbnail"></div>

        <h4 class="admin-work-text">Create new work</h4>
    </a>
    <br>
    <a href="index.php"><p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p></a>
    </div>
    </body>
</html>
