<?php include_once "../scripts/connector.php"; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Edit blog post</title>
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
	$sql = "SELECT * FROM blog WHERE id = '$id'";
	$result = mysqli_query($dbconnect, $sql);

	//store result as array
	$row = mysqli_fetch_array($result);
	$title = $row["title"]; 
?>
                <h3>Edit post: <?php echo $title; ?></h3>
                <form method="post" action="admin-blog-update.php" enctype="multipart/form-data">
                    <p>NOTE: If pasting text from another source, ensure you select "Format" > "Clear Formatting".
                        <br>Failure to do so may result in an error when saving the form</p>


                    <label for="title">Post title:</label>
                    <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" />
                    <br />
                    <?php echo '<img src="../' . $row["image"] . '" alt="' . $row["name"] . '" height="200">'; ?>
                    <br>
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image" />
                    <br />
                    <label for="summary">Summary:</label>
                    <textarea id="summary" name="summary">
                        <?php echo $row['summary']; ?>
                    </textarea>
                    <br />
                    <label for="description">About the Client:</label>
                    <textarea id="description" name="description">
                        <?php echo $row['description']; ?>
                    </textarea>
                    <br />
                    <input type="hidden" id="id" name="id" value="<?php echo $row['id'];?>" />
                    <input id="submit" type="submit" name="Update"></input>
                    <br>
                    <?php
                    echo"<a style='color:red' href='deleteblog.php?id=" . $row["id"] . "' title='deleteblog'><i class='fa fa-trash fa-2x'></i></a>";
                    ?>
                    <a href="admin-blog.php">
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