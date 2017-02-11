<?php include_once "../scripts/connector.php"; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Edit client details</title>
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
	$sql = "SELECT * FROM clients WHERE id = '$id'";
	$result = mysqli_query($dbconnect, $sql);

	//store result as array
	$row = mysqli_fetch_array($result);
	$title = $row["clientName"]; 
?>
                <h3>Edit <?php echo $title; ?>'s details</h3>
                
                   <form method="post" action="admin-client-update.php" enctype="multipart/form-data">
                    
                    <?php echo '<img src="' . $row["colourLogo"] . '" alt="' . $row["clientName"] . '" height="100">'; ?>
                    <br>
                    
                    <label for="colourLogo">Add a new logo:</label>
                    <input type="file" id="colourLogo" name="colourLogo" />
                    
                    <br>
                    
                    <label for="clientName">Client name:</label>
                    <input type="text" id="clientName" name="clientName" value="<?php echo $row['clientName']; ?>"
                    </input>
                    <br>
                    <input type="hidden" id="ID" name="ID" value="<?php echo $row['ID'];?>" />

                    <input id="submit" type="submit" name="Update"></input>
                    <a href="admin-clients.php">
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