<?php include_once "../scripts/connector.php"; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Edit Page</title>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea', // change this value according to your html
                block_formats: '* Paragraph=p;Header 1=h1;Header 2=h2;Header 3=h3'
            });
        </script>

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
	$sql = "SELECT * FROM portfoliolist WHERE id = '$id'";
	$result = mysqli_query($dbconnect, $sql);

	//store result as array
	$row = mysqli_fetch_array($result);
	$title = $row["portfolioTitle"]; 
?>
                <h3>Edit <?php echo $title; ?>'s page</h3>
                <form method="post" action="admin-work-update.php" enctype="multipart/form-data">
                    <p>NOTE: If pasting text from another source, ensure you select "Format" > "Clear Formatting".<br>Failure to do so will result in an error when saving the form</p>

                    <label for="portfolioTitle">Project Name:</label>
                    <input type="text" id="portfolioTitle" name="portfolioTitle" value="<?php echo $row['portfolioTitle']; ?>" />
                    <br />
                    <label for="coverImage">Cover Image:</label>
                    <input type="file" id="coverImage" name="coverImage" />
                    <br />
                    <label for="logo">Logo:</label>
                    <input type="file" id="logo" name="logo" />
                    <br />
                    <label for="aboutIntro">Introduction:</label>
                    <textarea id="aboutIntro" name="aboutIntro">
                        <?php echo $row['aboutIntro']; ?>
                    </textarea>
                    <br />
                    <label for="image2">Image 2:</label>
                    <input type="file" id="image2" name="image2"/>
                    <br />
                    <label for="aboutClient">About the Client:</label>
                    <textarea id="aboutClient" name="aboutClient">
                        <?php echo $row['aboutClient']; ?>
                    </textarea>
                    <br />
                    <label for="image3">Image 3:</label>
                    <input type="file" id="image3" name="image3"/>
                    <br />
                    <label for="image4">Image 4:</label>
                    
                    <input type="file" id="image4" name="image4"/>
                    <br />
                    <label for="aboutDesign">About the Design:</label>
                    <textarea id="aboutDesign" name="aboutDesign">
                        <?php echo $row['aboutDesign']; ?>
                    </textarea>
                    <br />
                    <label for="finalImage">Final Image:</label>
                    <input type="file" id="finalImage" name="finalImage" />
                    <br />
                    <input type="hidden" id="ID" name="ID" value="<?php echo $row['ID'];?>" />
                    <input id="submit" type="submit" name="Update"></input>
                    <br>
                    <?php
                    echo"<a style='color:red' href='deletework.php?id=" . $row["ID"] . "' title='deletework'><i class='fa fa-trash fa-2x'></i></a>";
                    ?>
                    <a href="admin-work.php">
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