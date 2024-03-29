<?php include_once "../scripts/connector.php"; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Edit Page</title>
    </head>

    <body>
        <div class="admin-container">
            <?php

	//if you came here from the update page
	if(isset($_POST["Update"])){
    
        //*get values from the form
		$clientName = $_POST["clientName"];
		$colourLogo = $_POST["colourLogo"];
        
        $target_dir_colour = "../images/logos/colour/";
        
            $target_file = $target_dir . basename($_FILES["colourLogo"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        
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
            if (file_exists($target_file)) {
                echo "Note! This file already exists on the server. ";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["coverImage"]["size"] > 500000) {
                echo "Note! Your file is too large. ";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Note! Only JPG, JPEG, PNG & GIF files are allowed. ";
                $uploadOk = 0;
            }
            // No file was selected for upload
            if($_FILES['colourLogo']['name'] == "") {
                $target_file = $row['colourLogo'];
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo " Your file was not uploaded. ";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["coverImage"]["tmp_name"], $target_file)) {
                    echo " ";
                } else {
                    echo "Note!, there was an error uploading your file.";
                }
            }
        

		//prepare the query to run in the database

		$sql = "UPDATE portfoliolist SET 
			colourLogo = '$colourLogo', 
			clientName = '$clientName'         
			WHERE id = '$id'";
        
		//run the query
		$result = mysqli_query($dbconnect, $sql);

		//if updated successfully
		if($result){
			echo "<h2>Work has now been updated</h2>";
		} else {
			//something went wrong
			echo "Error in Update ";
			die(mysqli_error($dbconnect));
		}

	} 
?>
                <br />
                <a href="admin-work.php">
                    <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p>
                </a>
        </div>
    </body>

    </html>
    <?php

	//close connection
	mysqli_close($dbconnect);

?>