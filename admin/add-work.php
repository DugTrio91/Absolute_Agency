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
		$coverImage = $_POST["coverImage"];
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