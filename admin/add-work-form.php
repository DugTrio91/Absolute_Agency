<?php include_once "../scripts/connector.php"; ?>

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
            <h3>Create new portfolio page</h3>
            <form action="add-work.php" method="post">
               
                <label for="portfolioTitle">Project Name:</label>
                <input type="text" id="portfolioTitle" name="portfolioTitle" />
                <br />
                <label for="coverImage">Cover Image:</label>
                <input type="text" id="coverImage" name="coverImage" />
                <br />
                <label for="aboutIntro">Introduction:</label>
                <textarea id="aboutIntro" name="aboutIntro"></textarea>
                <br />
                <label for="image2">Image 2:</label>
                <input type="text" id="image2" name="image2" />
                <br />
                <label for="aboutClient">About the Client:</label>
                <textarea id="aboutClient" name="aboutClient"></textarea>
                <br />
                <label for="image3">Image 3:</label>
                <input type="text" id="image3" name="image3" />
                <br />
                <label for="image4">Image 4:</label>
                <input type="text" id="image4" name="image4" />
                <br />
                <label for="aboutDesign">About the Design:</label>
                <textarea id="aboutDesign" name="aboutDesign"></textarea>
                <br />
                <label for="finalImage">Final Image:</label>
                <input type="text" id="finalImage" name="finalImage" />
                <br />

                <input id="submit" type="submit" name="Add"></input>
            </form>

            <a href="admin-work.php">
                <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p>
            </a>
        </div>
    </body>

    </html>