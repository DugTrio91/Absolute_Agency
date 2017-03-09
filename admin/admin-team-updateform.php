<?php include_once "../scripts/connector.php"; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Edit team member details</title>
    </head>

    <body>
        <div class="admin-container">


            <?php

	//get value of id that sent from address bar
	$id = $_GET["id"];

	//if there is no id in the url, go back
	if($id < 1){
		header("location: index.php");
	}

	//retrieve data from database
	$sql = "SELECT * FROM team WHERE id = '$id'";
	$result = mysqli_query($dbconnect, $sql);

	//store result as array
	$row = mysqli_fetch_array($result);
	$title = $row["name"]; 
?>
                <h3>Edit <?php echo $title; ?>'s details</h3>
                
                   <form method="post" action="admin-team-update.php" enctype="multipart/form-data">
                    
                    <?php echo '<img src="../' . $row["image"] . '" alt="' . $row["name"] . '" height="100">'; ?>
                    <br>
                    
                    <label for="image">Add a new image:</label>
                    <input type="file" id="image" name="image" />
                    
                    <br>
                    
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"
                    </input>
                    <br>
                    <label for="position">Position:</label>
                    <input type="text" id="position" name="position" value="<?php echo $row['position']; ?>"
                    </input>
                    <br>
                    <input type="hidden" id="id" name="id" value="<?php echo $row['id'];?>" />

                    <input id="submit" type="submit" name="Update"></input><br>
                    
                    <?php echo"<a style='color:red' href='deleteteam.php?id=" . $row["id"] . "' title='deleteteam'><i class='fa fa-trash fa-2x'></i></a>"; ?>
                    
                    <a href="admin-team.php">
                    <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p>
                    </a>

                </form>


    </body>

    </html>

    <?php

	//free result set
	mysqli_free_result($result);

	//close connection
	mysqli_close($dbconnect);

?>