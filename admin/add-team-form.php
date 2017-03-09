<?php include_once "../scripts/connector.php"; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Add new team member</title>
    </head>

    <body>
        <div class="admin-container">
            <h3>Add new team member</h3>
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
            <form action="add-team.php" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" />
                <br />
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" />
                <br />
                <label for="position">Position:</label>
                <input type="text" id="position" name="position" />
                <br />
                <label for="twitter">Twitter URL:</label>
                <input type="text" id="twitter" name="twitter" />
                <br />
                <label for="instagram">Instagram URL:</label>
                <input type="text" id="instagram" name="instagram" />
                <br />
                <input id="submit" type="submit" name="add"></input>
                <a href="admin-team.php">
                    <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p>
                </a>
            </form>
          </div>
    </body>

    </html>