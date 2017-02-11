<?php include_once "../scripts/connector.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
	<title>Admin Area | Clients</title>

</head>
<body>
    
 <div class="admin-container">
  <h3>Client list</h3>
   <?php 

        $sql = "SELECT * FROM clients";
        $result = mysqli_query($dbconnect, $sql);

		while($row = mysqli_fetch_array($result)){
                    
			echo "<a title='" . $row["clientName"] . "' href='admin-client-updateform.php?id=" . $row["id"] . "'>";
            echo "<div class='admin-work-button'><h4 class='admin-work-text'>" . $row["clientName"] . "</h4></div></a>";
            
        }
    ?> 
    <a class="admin-add-button admin-work-button" href="add-client-form.php">
        <div class="admin-add-button-thumbnail admin-work-thumbnail"></div>

        <h4 class="admin-work-text">Add new client</h4>
    </a>
    <br>
    <a href="index.php"><p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p></a>
    </div>
    </body>
</html>
