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

	if(isset($_POST["Add"])){

		//get form values
		$logo = $_POST["logo"];
		$portfolioTitle = $_POST["portfolioTitle"];
		$aboutIntro = $_POST["aboutIntro"];
		$image2 = $_POST["image2"];
		$aboutClient = $_POST["aboutClient"];
        $image3 = $_POST["image3"];
        $image4 = $_POST["image4"];
        $aboutDesign = $_POST["aboutDesign"];
        $finalImage = $_POST["finalImage"];
        $workType = $_POST["workType"];
        
        $target_dir = "../images/portfolio/";
            $coverImage = $target_dir . basename($_FILES["coverImage"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($coverImage,PATHINFO_EXTENSION);
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
            if (file_exists($coverImage)) {
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
                if (move_uploaded_file($_FILES["coverImage"]["tmp_name"], $coverImage)) {
                    echo " ";
                } else {
                    echo "Note!, there was an error uploading your file.";
                }
            }
        
		//insert form values into database
		$sql = "INSERT INTO portfoliolist (coverImage, logo, portfolioTitle, aboutIntro, image2, aboutClient, image3, image4, aboutDesign, finalImage, workType) VALUES ('$coverImage', '$logo', '$portfolioTitle', '$aboutIntro', '$image2', '$aboutClient', '$image3', '$image4', '$aboutDesign', '$finalImage', '$workType')";
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