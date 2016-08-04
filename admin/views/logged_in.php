<!-- if you need user information, just put them into the $_SESSION variable and output them here -->


<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
	<title>Admin Area</title>

</head>
<body>
    <div class="admin-container">
        <div class="admin-welcome">
           <img class="absolute-logo" src="../images/absolute_logo.png" alt="absolute logo">
            <h2>Hi <?php echo $_SESSION['user_name']; ?>.</h2>
        </div>
          <ul class="admin-tasks">
              <li>
                  <a class="admin-task-button admin-work" href="admin-work.php"><i class="fa fa-book fa-4x" aria-hidden="true"></i><br><p>Portfolio</p></a>
              </li>
              <li>
                  <a class="admin-task-button admin-register" href="register.php"><i class="fa fa-user-plus fa-4x" aria-hidden="true"></i><br><p>New user</p></a>
              </li>
              <li>
                  <a class="admin-task-button admin-logout" href="index.php?logout"><i class="fa fa-sign-out fa-4x" aria-hidden="true"></i><br><p>Logout</p></a>
              </li>
              
          </ul>
           
           
           
    </div>
</body>