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

    </head>

    <body>
        <div class="admin-container">
            <h3>Add new client</h3>
            <form action="add-client.php" method="post" enctype="multipart/form-data">
               
                <label for="clientName">Client Name:</label>
                <input type="text" id="clientName" name="clientName" />
                <br />
                <label for="colourLogo">Logo:</label>
                <input type="file" id="colourLogo" name="colourLogo" />
                <br />
                <input id="submit" type="submit" name="clientAdd"></input>
                 <a href="admin-clients.php">
                <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</p>
                </a>
            </form>

           
        </div>
    </body>

    </html>