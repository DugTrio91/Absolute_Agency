<?php include_once "../scripts/connector.php"; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Edit Page</title>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea'
            });
        </script>

    </head>

    <body>
        <div class="admin-container">

            <?php

	//if you came here from the update page
	if(isset($_POST["Update"])){
    
        //*get values from the form
		$id = $_POST["ID"];
		$logo = $_POST["logo"];
		$portfolioTitle = $_POST["portfolioTitle"];
        $coverImage = $_POST["coverImage"];
		$aboutIntro = $_POST["aboutIntro"];
		$image2 = $_POST["image2"];
		$aboutClient = $_POST["aboutClient"];
        $image3 = $_POST["image3"];
        $image4 = $_POST["image4"];
        $aboutDesign = $_POST["aboutDesign"];
        $finalImage = $_POST["finalImage"];
        $workType = $_POST["workType"];
        
        $target_dir = "../images/portfolio/";
            $target_file = $target_dir . basename($_FILES["coverImage"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["coverImage"]["tmp_name"]);
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
			logo = '$logo', 
			portfolioTitle = '$portfolioTitle',
            coverImage = '$target_file',
			aboutIntro = '$aboutIntro', 
			image2 = '$image2',
			aboutClient = '$aboutClient',
            image3 = '$image3',
            image4 = '$image4',
            aboutDesign = '$aboutDesign',
            finalImage = '$finalImage',
            workType = '$workType'          
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