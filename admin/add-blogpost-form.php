<?php include_once "../scripts/connector.php"; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Create new post</title>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea'
                
            });
        </script>
    </head>

    <body>
        <div class="admin-container">
            <h3>Create new blog post</h3>
            <?php
                if(isset($_GET["error"])){
                    $error = $_GET["error"];
                    echo "<p style='color:red'>";
                    switch($error){
                        case "file":
                            echo "There is an error with one of the files you tried to upload";
                            break;
                    }
                    echo "</p>";
                }
            ?>
            <form action="add-blogpost.php" method="post" enctype="multipart/form-data">
               <p>NOTE: If pasting text from another source, ensure you select "Format" > "Clear Formatting".<br>Failure to do so will result in an error when saving the form</p>
                <label for="portfolioTitle">Post title:</label>
                <input type="text" id="blogtitle" name="blogtitle" />
                <br />
                <label for="blogImage">Cover Image:</label>
                <input type="file" id="blogImage" name="coverImage" />
                <br />
                <label for="summary">Introduction (will be shown at the top of the post):</label>
                <textarea id="summary" name="summary"></textarea>
                <br />
                <label for="description">Bulk of blog post:</label>
                <textarea id="description" name="description"></textarea>
                <br />
                <input id="submit" type="submit" name="add"></input>
                <a href="admin-blog.php">
                    <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p>
                </a>
            </form>
          </div>
    </body>

    </html>