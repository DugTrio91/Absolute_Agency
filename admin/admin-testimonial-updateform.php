<?php include_once "../scripts/connector.php"; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Edit testimonial</title>
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
	$sql = "SELECT * FROM testimonials WHERE id = '$id'";
	$result = mysqli_query($dbconnect, $sql);

	//store result as array
	$row = mysqli_fetch_array($result);
	$title = $row["client"]; 
?>
                <h3>Edit testimonial by: <?php echo $title; ?></h3>
                <form method="post" action="admin-testimonial-update.php" enctype="multipart/form-data">
                    
                    <label for="testimonial">Comment:</label><br>
                    <textarea id="testimonial" name="testimonial"><?php echo $row['testimonial']; ?>
                    </textarea>
                    <br>
                    <label for="client">Client:</label><br>
                    <input type="text" id="client" name="client" value="<?php echo $row['client']; ?>" />
                    <br />
                    <input type="hidden" id="id" name="id" value="<?php echo $row['id'];?>" />
                    <input id="submit" type="submit" name="update"></input>
                    <br>
                    <?php
                    echo"<a style='color:red' href='deletetestimonial.php?id=" . $row["id"] . "' title='deleteblog'><i class='fa fa-trash fa-2x'></i></a>";
                    ?>
                    <a href="admin-testimonial.php">
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