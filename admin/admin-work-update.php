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

		//get values from the form
		$id = $_POST["ID"];
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


		//prepare the query to run in the database
        
        
		$sql = "UPDATE portfoliolist SET 
			coverImage = '$coverImage', 
			logo = '$logo', 
			portfolioTitle = '$portfolioTitle', 
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