<?php 

	require "../scripts/connector.php";

	if(isset($_POST["add"])){


			//text fields
			$testimonial = $_POST["testimonial"];
			$client = $_POST["client"];

			//database input
			$sql = "INSERT INTO testimonials (testimonial, client) VALUES ('$testimonial', '$client')";
			$result = mysqli_query($dbconnect, $sql);

			if(!$result){
				die("Error when adding testimonial.<br>" . mysqli_error($dbconnect));
			}
		
	} else {
		//form not posted
		header("location: add-testimonial-form.php");
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
    <title>Admin Area | Create new work</title>
</head>
<body>
    <div class="admin-container">
    	<p>
    		<h2>Testimonial successfully added!</h2><br>
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