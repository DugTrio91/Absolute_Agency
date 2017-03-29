<?php include_once "../scripts/connector.php"; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <title>Admin Area | Add new testimonial</title>
    </head>

    <body>
        <div class="admin-container">
            <h3>Add new testimonial</h3>
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
            <form action="add-testimonial.php" method="post" enctype="multipart/form-data">
                <label for="testimonial">Comment:</label><br>
                <textarea id="testimonial" name="testimonial"></textarea>
                <br />
                <label for="client">Client</label><br>
                <input type="text" id="client" name="client" />
                <br />
                <input id="submit" type="submit" name="add"></input>
                <a href="admin-testimonial.php">
                    <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p>
                </a>
            </form>
          </div>
    </body>

    </html>