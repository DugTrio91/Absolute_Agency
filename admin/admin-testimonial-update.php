<?php

require "../scripts/connector.php";

	//if you came here from the update page
	if(isset($_POST["update"])){

		//get values from the form
        $id = $_POST["id"];
		$testimonial = $_POST["testimonial"];
		$client = $_POST["client"];

		//prepare the query to run in the database
		$sql = "UPDATE testimonials SET testimonial = '$testimonial', client = '$client' WHERE id = '$id'";

		//run the query
		$result = mysqli_query($dbconnect, $sql);

			if(!$result){
				die("Error when updating testimonial.<br>" . mysqli_error($dbconnect));
			}
		
	} else {
		//form not posted
		header("location: admin-testimonial-updateform.php?id=$id");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
    <title>Admin Area | Update testimonial</title>
</head>
<body>
    <div class="admin-container">
    	<p>
    		<h2>Testimonial successfully updated!</h2><br>
    		Visitors can now view it on the <a href="../about.php" title="blog">about</a> page.
    	</p>
		<a href="admin-testimonial.php">
			<p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p>
		</a>
	</div>
</body>
</html>
<?php
	mysqli_close($dbconnect);
?>