<?php

	require("../scripts/connector.php");

	error_reporting(E_ALL & ~E_NOTICE);
	session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
	<title>Admin Area</title>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea#CMS'});</script>
</head>
<body>
<div class="admin-login">
<img class="absolute-logo" src="../images/absolute_logo.png" alt="absolute logo">
            <br>
<p>This area is reserved for the website administrators only.</p>

<form action="home.php" method="post">
	<input type="text" id="email" name="email" placeholder="Email"/>
	<input type="password" id="password" name="password" placeholder="Password"/>
	<br>
	<input id="submit" name="submit" type="submit" value="Login">
	<p>Click <a href="../index.php" title="home"><strong>here</strong></a> to go back to the main website.</p>
</form>
</div>
</body>
</html>

<?php

	//close connection
	mysqli_close($dbconnect);

?>