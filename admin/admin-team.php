<?php include_once "../scripts/connector.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
	<title>Admin Area | Team members</title>

</head>
<body>
    
 <div class="admin-container">
  <h3>Team members</h3>
   <?php 

        $sql = "SELECT * FROM team ORDER BY id DESC";
        $result = mysqli_query($dbconnect, $sql);

		while($row = mysqli_fetch_array($result)){
                    
			echo "<a title='" . $row["name"] . "' href='admin-team-updateform.php?id=" . $row["id"] . "'>";
            echo "<div class='admin-work-button'><div class='admin-work-thumbnail' style='background: url(../" . $row["image"] . ") center; background-size: cover'></div><h4 class='admin-work-text'>" . $row["name"] . "</h4></div></a>";
            
        }
    ?> 
    <a class="admin-add-button admin-work-button" href="add-team-form.php">
        <div class="admin-add-button-thumbnail admin-work-thumbnail"></div>

        <h4 class="admin-work-text">Add new team member</h4>
    </a>
    <br>
    <a href="index.php"><p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p></a>
    </div>
    </body>
</html>
