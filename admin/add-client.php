<?php require "../scripts/connector.php"; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Create new work</title>
        
    </head>

    <body>
        <div class="admin-container">

            <?php
            
	//if you came here from the add client page
	if(isset($_POST["clientAdd"])){

		//get form values
		$clientName = $_POST["clientName"];
		$colourLogo = $_POST["colourLogo"];
        
        $target_dir_colour = "../images/logos/colour/";
        
            $colourLogo = $target_dir_colour . basename($_FILES["colourLogo"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($colourLogo,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["colourLogo"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($colourLogo)) {
                echo "Note! This file already exists on the server. ";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["colourLogo"]["size"] > 500000) {
                echo "Note! Your file is too large. ";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Note! Only JPG, JPEG, PNG & GIF files are allowed. ";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo " Your file was not uploaded. ";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["colourLogo"]["tmp_name"], $colourLogo)) {
                    echo " ";
                } else {
                    echo "Note!, there was an error uploading your file.";
                }
            }
        
        
		//insert form values into database
		$sql = "INSERT INTO clients (clientName, colourLogo) VALUES ('$clientName', '$colourLogo')";
		$result = mysqli_query($dbconnect, $sql);

		//if successful
		if($result){
			echo "Added Successfuly";
		} else {
			//if not
			echo "Error when adding work.";
			die(mysqli_error($dbconnect));
		}

	} 

?>

            <a href="admin-clients.php">
                <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p>
            </a>
        </div>
    </body>

    </html>
    
   <?php

	//close connection
	mysqli_close($dbconnect);

?>